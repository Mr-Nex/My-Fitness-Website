<?php
include_once('redirect.php');

session_start();

if(isset($_POST['submit'])){
	include 'db.php';
	
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);    
    
    //to hack into unprotected password... type  ' or '1'='1
	
	if(empty($uid) || empty($pwd)){
        safe_redirect("./index.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM usernew WHERE username='$uid' OR email='$uid' ";
		$result = mysqli_query($conn,$sql);
		$resultChech = mysqli_num_rows($result);
		if($resultChech<1){
            safe_redirect("./index.php?login=error");
		    exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				//we need to dehash the password in order to compare 
				$hashedPWDCheck = password_verify($pwd,$row['password']);
				if($hashedPWDCheck == false){
                    safe_redirect("./index.php?login=error");
					exit();
				}elseif($hashedPWDCheck == true){
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['f_name'] = $row['first_name'];
					$_SESSION['l_name'] = $row['last_name'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['username'];
                    safe_redirect("./comments.php?login=success");
					exit();
				}
			}
		}
	}
	}else{
        safe_redirect("./index.php?login=error");
		exit();
}