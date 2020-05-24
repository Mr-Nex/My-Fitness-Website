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
<title>YourFitnessBuddies: Complete Fitness Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="fitness, workout, exercise, exercises, running, diet, health, proper diet, healthy diet, lean, bulky, shreded, transformation.">    
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
          <img src="images\home5.jpg" width="100%" height="700px"/> 
       
       </div>    

<div class="container">
    
     
     <div class="row">
           <div class="col-md-3">
               <h3>Tone Up on the Treadmill-</h3>
               <p>"Save time at the gym with this 10-minute cardio/sculpt session: Hop on a treadmill holding a three- to five-pound dumbbell in each hand,<br> 
                   <a href="#read1" data-toggle="modal" class="btn btn-default" >Read More</a>
                   </p>
         </div>
     <div class="col-md-3">
               <h3>Power Up Your Runs-</h3>
               <p>"Adding wall sits to the end of every run will strengthen your quads, hamstrings and glutes, improving your speed and endurance.<a href="#read2" data-toggle="modal"  class="btn btn-default">Read More</a></p>
         </div>
         <div class="col-md-3">
               <h3>Chart Your Progress-</h3>
               <p>"Stay motivated using a fitness report card. Jot down these subjects: Cardio, Muscle Conditioning, Flexibility and Attitude.<br> <a href="#read3" data-toggle="modal" class="btn btn-default">Read More</a></p>
         </div>
         <div class="col-md-3">
               <h3>Work Out During Your Workday-</h3>
               <p>"Sit on a stability ball to strengthen your core, and keep dumbbells or exercise tubing at your desk. Squeeze in 12 to 15 reps of<a href="#read4" data-toggle="modal" class="btn btn-default">Read More</a></p>
         </div>
    </div>
    
    <div class="row">
          <div class="col-md-3">
               <h3>Give Yourself a Break-</h3>
               <p>"You don't have to be a fitness saint to get results. Follow the 80/20 plan: Eighty percent of the year, you'll exercise regularly<a href="#read5" data-toggle="modal" class="btn btn-default">Read More</a></p>
         </div>
          <div class="col-md-3">
               <h3>Get a Jump on Weight Loss-</h3>
               <p>"Add plyometric box jumps to your workout to improve your cardiovascular stamina and leg strength -<br> <a href="#read6" data-toggle="modal" class="btn btn-default">Read More</a></p>
         </div>
          <div class="col-md-3">
               <h3>Don't Skimp on Carbs-</h3>
               <p>"Your body needs them to fuel a workout, so reach for fruit or high-fiber crackers an hour beforehand. If you'e exercising for 90 minutes <a href="#read7" data-toggle="modal" class="btn btn-default">Read More</a></p>
         </div>
          <div class="col-md-3">
               <h3>Make Over Your Running Routine-</h3>
               <p>"Unless you're training for a marathon, skip long, slow, distance running - sprinting builds more muscle.<br><a href="#read8" data-toggle="modal"  class="btn btn-default">Read More</a></p>
         </div>
    </div>
  
			
			<hgroup class="h">
			    <h1>Healthy Diet Tips</h1>
				
		    </hgroup>
			
			
			
			<img src="images/image.jpg" alt="say no to these" id="unhealthy"/><br>
    <p class="p11">How does poor nutrition affect us? <br></p>
             <ul>        <li>being overweight or obese.</li>
                         <li>tooth decay.</li>
                         <li>high blood pressure.</li>
                         <li>high cholesterol.</li>
                         <li>heart disease and stroke.</li>
                         <li>type-2 diabetes.</li>
                         <li>osteoporosis.</li>
                         <li>some cancers.</li>
			  </ul>			 
    
			 <hr />
			 <br />
			 
			 <p class="p12">So after excluding unnecessary elements from your diet, you just need to add all the healthy elements in your diet i.e.,<br />
                            protein, vitamins, fibre, sodium, potassium, calcium, and few more important elements of nutrition.	<br><br>
                 Let's get started...
             </p>
    <div class="btn-group">
        <button type="button" class="btn btn-default"><a href="tips.php">Workout</a></button>
        <button type="button" class="btn btn-default"><a href="diet.php">Diet</a></button>
        <button type="button" class="btn btn-default"><a href="#signup" data-toggle="modal">SignUp</a></button><br><br />
    </div>
        
					
    </div>     <!-- End container -->
    
<div class="index-extra">
<div class="table-responsive">
    
    <table class="table">
          <tr>
              <th><h1>Eat Healthy</h1></th>  
              <td><h3>Gain Weight</h3><a href="veg_wg.htm">Veg diet</a><br><br><a href="nonveg_wg.htm">Nonveg diet</a></td>
              <td><h3>Lose Weight</h3><a href="veg_wl.htm">Veg diet</a><br><br><a href="nonveg_wl.htm">Nonveg diet</a></td>
              <td><h3>Else</h3><a href="lean.htm">Lean</a><br><br><a href="bulky.htm">Bulk</a></td>  
        </tr>
        
        <tr>
            <th><h1>Train Hard</h1></th>
            <td><h3>Upper Body Workout</h3><a href="chest.htm">Chest</a><br><br><a href="back.htm">Back</a><br><br><a href="shoulder.htm">Shoulder</a></td>
            <td><h3>Arm Workout</h3><a href="bicep.htm">Bicep</a><br><br><a href="tricep.htm">Tricep</a><br><br><a href="forearm.htm">Forearms</a></td>
            <td><h3>Lower Body Workout</h3><a href="abs.htm">Abs</a><br><br><a href="legs.htm">Legs</a></td>
        </tr>
        
    </table>
    </div>
    </div>    
    
 <!-- footer -->
    
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
                <p style="color:white">Developed By:   <img src="images/name.png" alt="Nitin Kumar" height="40px" width="300px" /></p>
                
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
    

    <div class="modal fade" id= "read1" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Tone Up on the Treadmill</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Save time at the gym with this 10-minute cardio/sculpt session: Hop on a treadmill holding a three- to five-pound dumbbell in each hand, and set the speed to a brisk walk. Do a one-minute set each of shoulder presses, biceps curls, triceps extensions, side laterals, front laterals and standing triceps kickbacks one after another as you walk. I's an amazing upper-body challenge that also gets your heart pumping. Do this series two or three times each week. As you improve, work up to doing four-minute sets."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read2" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Power Up Your Runs</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Adding wall sits to the end of every run will strengthen your quads, hamstrings and glutes, improving your speed and endurance. Lean against a wall with your feet shoulder-width apart, then squat until your knees are bent at 45 degrees. Hold for 30 to 60 seconds; work up to doing 10 sets. Add a challenge by including heel raises: Lift your left heel, then the right, then lift both together twice."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read3" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Chart Your Progress</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Stay motivated using a fitness report card. Jot down these subjects: Cardio, Muscle Conditioning, Flexibility and Attitude. Set goals (for example, doing 10 "boy" push-ups) and grade yourself A through F at least four times a year. When you see how much you improve, you'll want to stay in great shape."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read4" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Work Out During Your Workday</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Sit on a stability ball to strengthen your core, and keep dumbbells or exercise tubing at your desk. Squeeze in 12 to 15 reps of exercises like dumbbell curls, overhead presses and ab crunches; aim for two or three sets of each. This gives you more free time to fit in fun workouts like biking or tennis."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read5" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Give Yourself a Break</h4>
                 </div>
                 <div class="modal-body">
                     <p>"You don't have to be a fitness saint to get results. Follow the 80/20 plan: Eighty percent of the year, you'll exercise regularly and eat well. Know that you'll slip 20 percent of the time due to holidays and work deadlines. When you accept that fitness isn't an all-or-nothing proposition, you're more likely to stick with it for life."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read6" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Get a Jump on Weight Loss</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Add plyometric box jumps to your workout to improve your cardiovascular stamina and leg strength - you'll really sculpt your hamstrings, quads and glutes. Find a sturdy box that's at least one foot high . Starting from a standing position, explosively jump to the middle of the box, then jump back down. Repeat 20 times."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read7" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Don't Skimp on Carbs</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Your body needs them to fuel a workout, so reach for fruit or high-fiber crackers an hour beforehand. If you'e exercising for 90 minutes or longer, include some protein so that the carbs break down more slowly, giving you longer-lasting energy. Your best bets: low-fat cheese and crackers, trail mix or half of a peanut butter and jelly sandwich."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id= "read8" role="dialog">
        <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                     <h4>Make Over Your Running Routine</h4>
                 </div>
                 <div class="modal-body">
                     <p>"Unless you're training for a marathon, skip long, slow, distance running - sprinting builds more muscle.Add a few 10- to 60-second sprints to your run, slowing down just long enough to catch your breath between them."</p>
                 </div>
                 <div class="modal-footer">
                     <a class="btn btn-primary" data-dismiss = "modal">Close</a>
                 </div>
            </div>
        </div>
    </div>
    
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
    
    
    
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

 </body>
 </html>