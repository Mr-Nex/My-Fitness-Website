<?php

session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','nitinkumar@26','blog');

if($_SERVER['REQUEST_METHOD']=='POST'){

if($_POST['password'] == $_POST['confirmpassword']){
    $fullname=$mysqli->real_escape_string($_POST['fullname']);
    $age=$mysqli->real_escape_string($_POST['age']);
    $gender=$mysqli->real_escape_string($_POST['gender']);
	
	$email=$mysqli->real_escape_string($_POST['email']);
	$password=md5($_POST['password']);
	$picture_path=$mysqli->real_escape_string('images/'.$_FILES['picture']['name']);
    
	if(preg_match("!image!", $_FILES['picture']['type'])){
		if(copy($_FILES['picture']['tmp_name'], $picture_path)){
			$_SESSION['fullname'] = $fullname;
			$_SESSION['picture'] = $picture_path;
			
			$sql = "INSERT INTO userlogin(fullname,age,gender,password,email,picture)"
			      . "VALUES ('$fullname','$age','$gender','$password','$email','$picture_path')";

        if($mysqli->query($sql)==true){
			$_SESSION['message'] = "Registration Successful... $username is added to the database.";
			header("location: clients.php");
		}		
        else{
			$_SESSION['message'] = "Registration failed!!!";
		}		
		
		}
		else{
			$_SESSION['message'] = "file upload failed";
		}
	}
	    else{
			$_SESSION['message'] = "Please upload JPEG,PNG images only!";
		}
	}
	    else{
			$_SESSION['message'] = "Passwords do not match!!!";
		}
}
?>

<!DOCTYPE html>

<html>

<head>
<title>User Login</title>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="userlogin.css" type="text/css">

</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>

<form class="form" action="userlogin.php" method="post" enctype="multipart/form-data" autocomplete="off">

<div class="alert alert-error"></div>
    
<input type="text" placeholder="Full Name" name="fullname" required />
    
<input type="text" placeholder="Age" name="age" required />
    
<input type="text" placeholder="Gender" name="gender" required />    

<input type="email" placeholder="Email" name="email" required />

<input type="password" placeholder="Password" autocomplete="new-password" name="password" required />

<input type="password" placeholder="Confirm Password" autocomplete="new-password" name="confirmpassword" required />

<div class="picture"><label>Select Your Picture: </label>
<input type="file" name="picture" accept="images/*" required /></div>

<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />

</form>
</div></div>

</body>
</html>
