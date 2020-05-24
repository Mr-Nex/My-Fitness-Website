<?php
session_start();
?>

<!DOCTYPE Html>
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
<title>User Area</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fitness, Workout, Exercise">    
<meta name="description" content="Achieve your Fitness Goals with us, get to know Everything about Workout/Exercises, Diet & get your dream physique. Because we are Your Fitness Buddies.">
    
    
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
 

 <?php 
    if(isset($_SESSION['u_id'])){
        
echo '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
      <div class="container">
              <a href="#" class="navbar-brand"><img src="images/gr.png" width="50px" height="50px"/></a>
             
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
        <div class="collapse navbar-collapse navbar-collapse" >    
             <ul class="nav navbar-nav">
       <li><a href="index.php">Home</a></li>
       </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-out"></span>Logout<span class="caret"></span></a>
        
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
    
    </div>'; }
    
    else{
        
        echo '<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
      <div class="container">
              <a href="#" class="navbar-brand"><img src="images/gr.png" width="50px" height="50px"/></a>
             
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
             </button>
        <div class="collapse navbar-collapse navbar-collapse" >    
             <ul class="nav navbar-nav">
       <li class="active"><a href="index.php">Home</a></li></ul>
       
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>Login First<span class="caret"></span></a>
        
        <ul class="dropdown-menu dropdown-menu-right">
               <li><form class="form" method="POST" action="login.inc.php" enctype="multipart/form-data" autocompete="off">
		             <input type="text" name="uid" placeholder="Username/Email" />
			         <input type="password" name="pwd" placeholder="Password" />
			         <button class="btn btn-default" type="submit" name="submit">Login</button>
		             </form>
					 </li>
           </ul>
        
        </li>
      
    </ul>
          
        </div>       
      </div>
    
    </div>';
    }
    ?>
    
    <?php
    
      if(isset($_SESSION['u_id'])){
          echo "You are logged in.";
      }
    
    ?>


    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/gym.jpg" alt="Gym" width="100%">
    </div>

    <div class="item">
      <img src="images/gym2.jpg" alt="Fitness Factory" width="100%">
    </div>

    <div class="item">
      <img src="images/gym4.jpg" alt="Fitness Factory Gym" width="100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
<div class="container">    