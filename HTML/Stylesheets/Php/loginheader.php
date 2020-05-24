<?php include 'config.php'; ?>
<?php include 'database.php'; ?>
<?php include 'helper.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="images/g1.png">    
    <title>Login</title>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
<link href="bootstrap.min.css" rel="stylesheet">   

<link href="https://fonts.googleapis.com/css?family=Concert+One|Cookie|Courgette|Kaushan+Script|Permanent+Marker|Satisfy" rel="stylesheet">    
    
<link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admincustom.css" rel="stylesheet">
      
    <link href="custom.css" rel="stylesheet">  

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
       <li><a href="index.html">Home</a></li>
       <li class="active"><a href="login.php">Login</a></li>
	   <li><a href="blog.php">Bloggers Arena</a></li>
	         </ul>
        </div>       
      </div>
    
    </div>
    
     
     <div class="container">

     <div id="top2">
    <img src="images\login2.png" height="100px" width="300px" />
   </div>  
        <div id="blog-main">

<?php if(isset ($_GET['msg'])) : ?>
            <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>    
            
<?php endif; ?>           