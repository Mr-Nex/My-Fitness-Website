<?php 

$_SESSION['message']='';
//$mysqli = new mysqli('mysql.hostinger.in','u711358606_nitin','nitinkumar@26','u711358606_blog');
include_once('redirect.php');
if(isset($_POST['submit'])){
	

    include_once 'db.php';
    $mysql = new mysqli($host,$user,$pass,$db);
    
    
	$fname=mysqli_real_escape_string($conn,$_POST['fname']);
	$lname=mysqli_real_escape_string($conn,$_POST['lname']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);	
    $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
    $rename_path="./images/".$uid.".jpg";
    
    //$picture_path=$mysqli->real_escape_string('images/'.$_FILES['picture_path']['name']);
    $picture_path=$_FILES['picture_path']['tmp_name'];
    move_uploaded_file($picture_path,$rename_path);
    
    $picture_path=$rename_path;
   
    
	//error handling
	if(empty($fname)|| empty($lname)|| empty($email)|| empty($uid)|| empty($pwd)){
		safe_redirect("./index.php?signup=empty");
		exit();
	} else{
		if(!preg_match("/^[a-zA-Z]*$/", $fname)|| !preg_match("/^[a-zA-Z]*$/", $lname)){
			safe_redirect("./index.php?signup=invalid");
			exit();
		}else{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				safe_redirect("./index.php?signup=email");
				exit();
			}else{
				$sql="SELECT * FROM usernew WHERE username='$uid'";
				$result=mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0){
					safe_redirect("./index.php?usertaken");
				} else{
            //        if(preg_match("!image!", $_FILES['picture_path']['type'])){
		  //  if(copy($_FILES['picture_path']['tmp_name'], $picture_path)){
			$_SESSION['first_name'] = $fname;
			$_SESSION['picture_path'] = $picture_path;
                    
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					// echo '<h1>image path='.$picture_path.'</h1>';
					$sql="INSERT INTO usernew (first_name, last_name, email, username, password, picture_path) VALUES('$fname', '$lname', '$email', '$uid', '$hashedPwd', '$picture_path');";
					mysqli_query($conn,$sql);
					safe_redirect("./index.php?signup=success");
					exit();
				//}
	//		}
		}
	}
        }}
	
} else{
	header("./index.php");
	exit();
}
