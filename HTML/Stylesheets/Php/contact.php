<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98258790-1', 'auto');
  ga('send', 'pageview');

</script>    
    
<!-- hit counter-->
<script type="text/javascript" src="https://counter10.fcs.ovh/private/counter.js?c=b6s6cfs1j5k53l87zbj6dewzzn7sn45h"></script>
<noscript><a href="#" title="web page counters"><img src="https://counter10.fcs.ovh/private/freecounterstat.php?c=b6s6cfs1j5k53l87zbj6dewzzn7sn45h" border="0" title="web page counters" alt="web page counter"></a></noscript>     
    
<link rel="shortcut icon" href="images/g1.png">    
<title>Contact Info</title>

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
<meta name="keywords" content="fitness, workout, exercise, exercises, running, diet, health, proper diet, healthy diet, lean, bulky, shreded, transformation.">     
<meta name="description" content="Contact us to join our fitness mission. Want to lose/gain weight, build bigger muscles, etc., we'll help you.">    
    
<link href="bootstrap.css" rel="stylesheet">      
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
 

 <?php 
    if(isset($_SESSION['u_id'])){
        ?>
        
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
      <div class="container">
              <a href="#" class="navbar-brand"><img src="images/gr.png" width="100px" height="40px"/></a>
             
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
        <div class="collapse navbar-collapse navbar-collapse" >    
             <ul class="nav navbar-nav">
       <li class="active"><a href="index.php">Home</a></li>
       <li><a href="about.php">About Us</a></li>
	   <li><a href="tips.php">Workout Tips</a></li>
	   <li><a href="diet.php">Workout Diet</a></li>
	   <li><a href="contact.php">Contact Us</a></li>
       <li><a href="blog.php">Bloggers Arena</a></li>
       <li><a href="comments.php">Help</a></li></ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user" aria-hidden="true"></span>     Logout<span class="caret"></span></a>
        
        <ul class="dropdown-menu dropdown-menu-right">
               <li><form action="logout.inc.php" method="POST">
                      <input type="text" name="uid" placeholder="Username/Email" disabled/>
			         <input type="password" name="pwd" placeholder="Password" disabled/>
			         
		              <button class="btn btn-default" type="submit" name="submit">Logout</button>
		              </form>
					 </li>
           </ul>
        
        </li>
    </ul>
          
        </div>       
      </div>
    
    </div>
    <?php } 
    
    else{
        
        ?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
      <div class="container">
              <a href="#" class="navbar-brand"><img src="images/gr.png" width="50px" height="50px"/></a>
             
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
        <div class="collapse navbar-collapse navbar-collapse" >    
             <ul class="nav navbar-nav">
       <li class="active"><a href="index.php">Home</a></li>
       <li><a href="about.php">About Us</a></li>
	   <li><a href="tips.php">Workout Tips</a></li>
	   <li><a href="diet.php">Workout Diet</a></li>
	   <li><a href="contact.php">Contact Us</a></li>
       <li><a href="blog.php">Bloggers Arena</a></li></ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i>     Login/Sign Up<span class="caret"></span></a>
        
        <ul class="dropdown-menu dropdown-menu-right">
               <li><form class="form" method="POST" action="login.inc.php" enctype="multipart/form-data" autocompete="off">
		             <input type="text" name="uid" placeholder="Username/Email" />
			         <input type="password" name="pwd" placeholder="Password" />
			         <button class="btn btn-default" type="submit" name="submit">Login</button>  <a href="#signup" data-toggle="modal" class="btn btn-default">Sign up</a>
		             </form>
					 </li>
           </ul>
        
        </li>
      
    </ul>
          
        </div>       
      </div>
    
    </div>
    <?php
    }
    ?>
    
    <?php
    
      if(isset($_SESSION['u_id'])){
          echo "You are logged in.";
      }
    
    ?>

        <div class="jumbotron">
          <img src="images\contact.jpg" width="100%" height="700px"/> 
       
       </div>    
<div class="container">
<div class="contactpagefonts">        
<div class="table-responsive">
 <table class="table table-bordered">
<thead>     
<tr>
    <th>You Can Contact Us Here-</th>
    </tr></thead>
  <tbody>                     
                           <tr>
                            <td><a href="https://www.facebook.com"><i class="fa fa-facebook"></i>coolknitin.96@gmail.com</a><br><hr /><br /></td>
                           </tr>
                           <tr>
                               <td><a href="https://www.instagram.com"><i class="fa fa-instagram"></i>nk_rexx(NiTin KuMar)</a><br><hr /><br /></td>
                           </tr>
                           <tr>
                               <td><a href="#"><i class="fa fa-youtube"></i>Page Under Construction!</a><br><hr /><br /></td>
                           </tr>
                           <tr>    
                               <td><a href="https://www.gmail.com"><i class="fa fa-google"></i>rexxgen@gmail.com</a><br><hr /><br /></td>
                           </tr>
                           <tr>
                               <td><i class="fa fa-whatsapp"></i>Mail us for more contact info<br><hr /><br /></td>
                           </tr>
                           <tr>    
                               <td><i class="fa fa-phone"></i>Mail us for more contact info<br><hr /><br /></td>
                           </tr>       
     </tbody>                  
            </table>
               </div>
        
    </div>
</div>
   
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Your<span>fitness</span>Buddies</h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="about.php">About</a>
					·
					<a href="tips.php">Workout</a>
					·
					<a href="diet.php">Diet</a>
					·
					<a href="#signup" data-toggle="modal">Get Personal Coach</a>
					·
					<a href="contact.php">Contact</a>
				</p>

				<p class="footer-company-name">Your Fitness Buddies &copy; 2017-2018</p><br>
                <p style="color:white">Developed By:   <img src="images/name.png" height="40px" width="300px" /></p>
                
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Your Fitness Buddies Association</span> India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:rexxgen@gmail.com">rexxgen@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About YFB</span>
                    This is my website to help you about all your fitness, workout and diet related problems and queries.<br> Here at <b>yourfitnessbuddies.com</b>, we help you to reach your fitness goals easily.
				</p>

				<div class="footer-icons">

					<a href="contact.php"><i class="fa fa-facebook"></i></a>
                    <a href="contact.php"><i class="fa fa-google"></i></a>
                    <a href="contact.php"><i class="fa fa-youtube"></i></a>
                    <a href="contact.php"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>
    
    <!-- sign up modal -->
    
        <div class="modal fade" id= "signup" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4><span class="fa fa-user-plus" aria-hidden="true"></span>     Sign Up Here</h4>
                 </div>
                 <div class="modal-body">
                     <form class="supform" action="signup.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">
		   <div class="form-group">

           <label for="fn">First Name:</label>    
		   <input class="form-control" type="text" name="fname" id="fn" placeholder="First Name" required/><br />
               
            <label for="ln">Last Name:</label>   
		   <input class="form-control" type="text" name="lname" id="ln" placeholder="Last Name"required /><br />
               
            <label for="email">Email :</label>   
		   <input class="form-control" type="text" name="email" id="email" placeholder="Email" required/><br />
            
            <label for="un">Username:</label>   
		   <input class="form-control" type="text" name="uid" id="un" placeholder="Username" required/><br />
               
            <label for="pwd">Password:</label>   
		   <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Password" required/><br />
            
            <div class="picture"><label>Select Your Picture: </label>
            <input type="file" name="picture_path" accept="images/*" required /></div>   
               
               <button class="btn btn-default" type="submit" name="submit">Sign up</button>	</div>	   
		   </form>                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
  <script src="bootstrap.js"></script>     
    
</body>
</html>