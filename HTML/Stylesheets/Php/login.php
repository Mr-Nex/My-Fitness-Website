<?php include 'loginheader.php'; ?> 

<?php 
   if($_POST){
       $host="mysql.hostinger.in";
       $user="u711358606_nitin";
       $pass="nitinkumar@26";
       $db="u711358606_blog";
       
       $username=$_POST['username'];
       $password=$_POST['password'];
       
       $conn=mysqli_connect($host, $user, $pass, $db);
       $query="SELECT * FROM usernew WHERE username='$username' and password='$password'";
       
       $result=mysqli_query($conn, $query);
       if(mysqli_num_rows($result)==1){
           session_start();
           $_SESSION['blog']='true';
           header('location:admin.php');
       }else{
           echo 'Incorrect username or password';
       }
   }
       
?>

<!--<h1>Login Here</h1>-->
<form method="POST">
     Username:<br>
     <input type="text" name="username"><br>
     Password:<br>
     <input type="password" name="password"><br>
     <input type="submit" value="login">
</form>

<?php include 'loginfooter.php'; ?>	





<!-- first put this code in the page you want to protect -->


<!-- end -->