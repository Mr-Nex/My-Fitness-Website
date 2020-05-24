<?php
include_once('redirect.php');

function setcomments($conn){
    if(isset($_POST['commentsubmit'])){
        
        $uid =$_POST['uid'];
        $date = $_POST['date'];
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
        if(empty($message)){
            safe_redirect("./comments.php?comment=empty");
		//header("Location: ../website/comments.php?comment=empty");
		exit();
	} else{
        if(!preg_match("/^[a-z \nA-Z]*$/", $message)){
			safe_redirect("./comments.php?comment=invalid");
            //header("Location: ../website/comments.php?comment=invalid");
			exit();
        }else{        
        $sql = "INSERT INTO comments(uid,date,message) VALUES('$uid','$date','$message')"; 
        $result = mysqli_query($conn,$sql);
        }
    }
}
}

function getcomments($conn){
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {    
    $u_id = $row['uid'];    
    $sql2 = "SELECT * FROM usernew WHERE user_id='$u_id'";
    $result2 = mysqli_query($conn,$sql2); 
        //pic= "<"
        if($row2 = mysqli_fetch_assoc($result2)){
          echo "<div class='panel-group'>"; 
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-body'><div class='row'><div class='col-xs-4'>";    
    echo "<img src='".$row2['picture_path']."' width='60px' height='60px' >"."     <img src='images/user.png' height='25px' width='25px' border-radius='30%'/>".$row2['username']."              ";
    echo "<img src='images/date.png' height='25px' width='25px' />".$row['date']."</div>"; 
        
    if(isset($_SESSION['u_id'])){
        if($_SESSION['u_id'] == $row['uid']){
            echo "<div class='col-xs-4 text-left'>
    <form class='edit-form' method='POST' action='editcomment.php'>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <input type='hidden' name='uid' value='".$row['uid']."'>
    <input type='hidden' name='date' value='".$row['date']."'>
    <input type='hidden' name='message' value='".$row['message']."'>
    <button class='btn btn-default btn-xs'>Edit</button></form></div>
    
    
    <div class='col-xs-4 text-right'>
    <form class='delete-form' method='POST' action='".deletecomments($conn)."'>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <button class='btn btn-default btn-xs' name='commentdelete' type='submit'>Delete</button></form></div>";
        }
    }        
            
    echo "</div>    
    </div>
    </div>";
            
        echo "<div class='panel panel-default'>";
        echo "<div class='panel-body'>";    
    echo nl2br($row['message']);    
        echo "</div></div></div>";    
      
        }
  
}}

function editcomments($conn){
    if(isset($_POST['commentsubmit'])){
        
        $cid =$_POST['cid'];
        $uid =$_POST['uid'];
        $date = $_POST['date'];
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        
        if(empty($message)){
		safe_redirect("./comments.php?comment=empty");
		exit();
	} else{
        if(!preg_match("/^[a-z \nA-Z]*$/", $message)){
			safe_redirect("./comments.php?comment=invalid");
            //header("Location: ../website/comments.php?comment=invalid");
			exit();
        }else{
        
        $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'"; 
        $result = mysqli_query($conn,$sql);
        //header("Location: ../website/comments.php");
            safe_redirect("./comments.php");
    }
    }
    }}

function deletecomments($conn){
    if(isset($_POST['commentdelete'])){
        
        $cid =$_POST['cid'];
        
        $sql = "DELETE FROM comments WHERE cid='$cid'"; 
        $result = mysqli_query($conn,$sql);
        //header("Location: ../website/comments.php");
        safe_redirect("./comments.php");
    }
}
	

