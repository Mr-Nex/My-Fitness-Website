<?php include 'config.php'; ?>
<?php include 'database.php'; ?>
<?php include 'adminheader.php'; ?> 
<?php include 'helper.php'; ?>

<?php

    
    //create database object

   $db=new Database();

if(isset($_POST['submit'])){
    //assign variables
    $name = mysqli_real_escape_string($db->link,$_POST['name']);
    
    //simple validations
    if($name == ''){
        //set error
        $error = 'Please fill out all the required fields';
        } else{
           $query = "INSERT INTO categories
                      (name)
                       VALUES('$name')";
        
           $update_row = $db->update($query);
    }
}

?>

<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Enter Category">
  </div>
<div> 
  <input name="submit" type="submit" class="btn btn-default" value="submit" />
    <a href="admin.php" class="btn btn-default">Cancel</a>
</div>    
<br>    
</form>

<?php include 'adminfooter.php'; ?> 