<!DOCTYPE html>

<?php
//page authentication

$username = 'admin';
$password = 'nitinkumar@26';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER']!= $username) || ($_SERVER['PHP_AUTH_PW']!= $password))
{
    // the uername / password are incorrect so send the authentication headers
    header('HTTP/1.1 401 Unauthorized');
    header('www-Authenticate: Basic realm="Your Fitness Buddies"');
    exit('<h2>Your Fitness Buddies</h2>Sorry, you must enter a valid username and password to access this page.');
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="shortcut icon" href="images/g1.png">  
    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admincustom.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
<link href="bootstrap.min.css" rel="stylesheet">   

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Concert+One|Cookie|Courgette|Kaushan+Script|Caveat|Righteous|Sedgwick+Ave|Sriracha" rel="stylesheet">    
    
<!-- footer -->
    <link rel="stylesheet" href="footer-dimensions.css">
	<link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
<!-- social media icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
<style>

.fa-facebook {
  color: white;
  
}
.fa-facebook:hover {
  color: #3B5998;
}

.fa-google {
  color: white;
}
.fa-google:hover {
  color: #dd4b39;
}

.fa-youtube {
  color: white;
}
.fa-youtube:hover {
  color: #dd4b39;
}


.fa-instagram {
  color: white;
}
.fa-instagram:hover {
  color: #fc1e7a;
}

</style>
      
      
</head>
<body>
 

 
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
      <div class="container">
              <a href="#" class="navbar-brand"><img src="images/gr.png" width="50px" height="50px"/></a>
             
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
        <div class="collapse navbar-collapse navbar-collapse" >    
             <ul class="nav navbar-nav navbar-right">
       <li class="active"><a href="admin.php">Admin</a></li>
       <li><a href="add_post.php">Add Posts</a></li>
       <li><a href="add_category.php">Add Category</a></li>
       <li><a href="blog.php">Back to Blog</a></li>             
       
	        </ul>
        </div>       
      </div>
    
    </div>

        <div class="jumbotron">
          <img src="images\add1.jpg" width="100%" height="700px"/> 
       
       </div>    
<div class="container">


        <div class="col-sm-12 blog-main">

<?php if(isset ($_GET['msg'])) : ?>
            <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>    
            
<?php endif; ?>           