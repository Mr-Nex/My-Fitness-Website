<link rel="stylesheet" href="userlogin.css">

<?php session_start(); ?>
    
    <div class="body content">
    <div class="welcome">
    
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <span class="user"><img src='<?= $_SESSION['picture'] ?>'</span><br>
    Welcome <span class="user"><?= $_SESSION['fullname'] ?></span>    
        
<?php 
    
  $mysqli = new mysqli('localhost','root','nitinkumar@26','blog');
  $sql = 'SELECT fullname,picture FROM userlogin';
  $result = $mysqli->query($sql);        
    
?>    
        
<div id="registered">
        
        <span>All Users</span>
        <?php    
        while($row = $result->fetch_assoc()){
            echo "<div class='userlist'><span>$row[fullname]</span><br>";
            echo "<img src='$row[picture]'></div>";
        }    
        ?>
        </div>        
     