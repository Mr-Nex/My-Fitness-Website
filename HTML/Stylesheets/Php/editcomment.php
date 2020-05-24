<?php
   date_default_timezone_set('Asia/Kolkata');
include 'db.php';
   include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
    
<title>Edit Comments</title>
<link rel="stylesheet" type="text/css" href="StyleSheet.css"> 
    
<link href="bootstrap.min.css" rel="stylesheet">   

<link href="https://fonts.googleapis.com/css?family=Concert+One|Cookie|Courgette|Kaushan+Script|Permanent+Marker|Satisfy" rel="stylesheet">    
    

</head>

<body>
<?php
    
$cid = $_POST['cid'];    
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = mysqli_real_escape_string($conn, $_POST['message']);
    
   echo "<form class='form' method='POST' action='".editcomments($conn)."' enctype='multipart/form-data' autocompete='off'>
       <input type='hidden' name='cid' value='".$cid."'>
       <input type='hidden' name='uid' value='".$uid."'>
       <input type='hidden' name='date' value='".$date."'>
       <textarea class='form-control' rows='5' name='message' placeholder='Write your queries'>".$message."</textarea><br />
       <button class='btn btn-default' type='submit' name='commentsubmit'>Edit</button>
    </form>";
    
    ?>
    
    
<div class="modal fade" id= "edit" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Sign Up Here</h4>
                 </div>
                 <div class="modal-body">
       <form class="form" method="POST" action="editcomment.php" enctype="multipart/form-data" autocompete="off">
       <input type="hidden" name="cid" value='".$cid."'>
       <input type="hidden" name="uid" value='".$uid."'>
       <input type="hidden" name="date" value='".$date."'>
       <textarea class="form-control" name="message" placeholder="Write your queries">".$message."</textarea><br />
       <button class="btn btn-default" type="submit" name="commentsubmit">Edit</button>
       </form>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>    
    
  
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>
    
    
</body>    
    
</html>