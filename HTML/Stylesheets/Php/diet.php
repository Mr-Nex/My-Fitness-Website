<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
<script>
<!-- AD BLOCK -->   
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3869691498815256",
    enable_page_level_ads: true
  });
</script> 
    
<!--AD-->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3869691498815256",
    enable_page_level_ads: true
  });
</script>     
    
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
<title>Workout Diet - Live Healthy</title>

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
<meta name="keywords" content="fitness, workout, exercise, exercises, running, diet, health, proper diet, healthy diet, lean, bulky, shreded, transformation.">
<meta name="description" content="Get everything about Proper Diet, Diet to Gain Weight, Diet For Muscular Body, Diet To Lose Weight.">    
    
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
    
<style>
    body{
        font-family: 'Permanent Marker', cursive;
    }    
    .sidenav{
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #292c2f;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        text-align: center;
    }
    .sidenav a{
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: white;
        display: block;
        transition: 0.3s;
    }
    .sidenav a:hover{
        color: gray;
    }
    .sidenav .closebtn{
        position: absolute;
        top: 45px;
        right: 23px;
        font-size: 36px;margin-left: 50px;
    }
    @media screen and (max-height: 450px){
        .sidenav{padding-top: 15px;}
        .sidenav a{font-size:18px;}
    }
</style>    
    
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
          <img src="images\diet.jpg" width="100%" height="700px"/> 
       
       </div>    
<div class="container">

<div class="row"> 

 <div class="col-xs-2">   
<div id="guidenav" class="sidenav">
    
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
       
  <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Vegetarian Diet Plan<span class="caret"></span></a>
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="veg_wl.htm">Weight Loss</a></li>
    <li><a href="veg_wg.htm">Weight Gain</a></li>
      </ul></div>      
      
  <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Non-Vegetarian Diet Plan<span class="caret"></span></a>
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="nonveg_wl.htm">Weight Loss</a></li>
    <li><a href="nonveg_wg.htm">Weight Gain</a></li>
      </ul></div>
    
  <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gym Specific Diet Plan<span class="caret"></span></a>
  <ul class="dropdown-menu dropdown-menu-right">
    <li><a href="lean.htm">Lean Muscles</a></li>
    <li><a href="bulky.htm">Bulk Muscles</a></li> 
      </ul></div>
        
        
       <a href="diet.htm"><img src="images/foodbar.png" height="80px" width="80px" /></a> 
</div>  

<span style="font-size:30px;cursor:pointer" onclick="openNav()">Food Guide<img src="images/foodbar.png" height="150px" width="150px"/></span>

<script>
    
     function openNav(){
         document.getElementById("guidenav").style.width="100%";
     }    
     function closeNav(){
         document.getElementById("guidenav").style.width="0";
     }
    
</script>    
    </div>  
   
<div class="col-xs-10">     
	
<section id="weightloss">	
	
    <h2>Lose Weight</h2>	

    <p><strong>1. <u>Cut Back on Sugar and Starch</u></strong><br />

The most important part is to cut back on sugar and starch (carbs).

These are the foods that stimulate secretion of insulin the most. If you didn't know already, insulin is the main fat storage hormone in the body.

When insulin goes down, fat has an easier time getting out of the fat stores and the body starts burning fats instead of carbs.<br />

Another benefit of lowering insulin is that your kidneys shed excess sodium and water out of your body, which reduces bloat and unnecessary water weight .

It is not uncommon to lose up to 10 pounds (sometimes more) in the first week of eating this way, both body fat and water weight.<br />

This is a graph from a study comparing low-carb and low-fat diets in overweight/obese women .<br /><br />

<img src="images\lose.jpg" height="250px" width="250px"/><br /><br />



The low-carb group is eating until fullness, while the low-fat group is calorie restricted and hungry.

Cut the carbs, lower your insulin and you will start to eat less calories automatically and without hunger .

        Put simply, lowering your insulin puts fat loss on "autopilot."<br /><br /></p>


     <strong>2. <u>Eat Protein, Fat and Vegetables</u></strong><br />

    <p>Each one of your meals should include a protein source, a fat source and low-carb vegetables. Constructing your meals in this way will automatically bring your carb intake into the recommended range of 20-50 grams per day.</p>

<br /><br />

<strong><u>Protein Sources</u>:-</strong>
<ul>
<li>Meat - Beef, chicken, pork, lamb, bacon, etc.</li>
<li>Fish and Seafood - Salmon, trout, shrimps, lobsters, etc.</li>
<li>Eggs - Omega-3 enriched or pastured eggs are best.</li>
</ul><br /><br />
The importance of eating plenty of protein can not be overstated.<br />

This has been shown to boost metabolism by 80 to 100 calories per day .<br /><br />

High protein diets can also reduce obsessive thoughts about food by 60%, reduce desire for late-night snacking by half, and make you so full that you automatically eat 441 fewer calories per day... just by adding protein to your diet (8, 9).

When it comes to losing weight, protein is the king of nutrients. Period.<br /><br />

<strong><u>Low-Carb Vegetables</u>:-</strong><br />

<ul>
<li>Broccoli</li>
<li>Cauliflower</li>
<li>Spinach</li>
<li>Kale</li>
<li>Brussels Sprouts</li>
<li>Cabbage</li>
<li>Swiss Chard</li>
<li>Lettuce</li>
<li>Cucumber</li>
<li>Celery</li>
</ul><br />
Don't be afraid to load your plate with these low-carb vegetables. You can eat massive amounts of them without going over 20-50 net carbs per day.

A diet based on meat and vegetables contains all the fiber, vitamins and minerals you need to be healthy. There is no physiological need for grains in the diet.<br /><br />


<strong><u>Fat Sources</u>:-</strong><br />
<ul>
<li>Olive oil</li>
<li>Coconut oil</li>
<li>Avocado oil</li>
<li>Butter</li>
    <li>Tallow</li>
</ul>
Eat 2-3 meals per day. If you find yourself hungry in the afternoon, add a 4th meal.<br /><br />

Don't be afraid of eating fat, trying to do both low-carb AND low-fat at the same time is a recipe for failure. It will make you feel miserable and abandon the plan.

The best cooking fat to use is coconut oil. It is rich in fats called Medium Chain Triglycerides (MCTs). These fats are more fulfilling than others and can boost metabolism slightly .

There is no reason to fear these natural fats, new studies show that saturated fat doesn't raise your heart disease risk at all .

To see how you can assemble your meals, check out this low carb meal plan and this list of low carb recipes.<br /><br />

   <strong> 3.<u> Lift Weights 3 Times Per Week</u></strong><br />


You don't need to exercise to lose weight on this plan, but it is recommended.

The best option is to go to the gym 3-4 times a week. Do a warm up, lift weights, then stretch.<br />

If you're new to the gym, ask a trainer for some advice.

By lifting weights, you will burn a few calories and prevent your metabolism from slowing down, which is a common side effect of losing weight .<br /><br />

Studies on low-carb diets show that you can even gain a bit of muscle while losing significant amounts of body fat .

If lifting weights is not an option for you, then doing some easier cardio workouts like running, jogging, swimming or walking will suffice.
	
</section>

<section id="weightgain">

     <h2>Gain Weight</h2>
	 
	 <p>
	     <strong>1. <u>Track Calories</u></strong><br /> Skinny guys often overestimate what they eat. Read the labels, use a food scale and track your daily caloric intake. You need at least your body-weight in lbs x 20kcal daily to gain weight.

         A rule of thumb is at least 1kg for each cm above 1m (use this converter). Anything less you'll always look skinny. There's no upper limit, if you want to weigh more go for it. Examples of minimum goal weights:</p>
<ul>
<li>1m70/5'7" at least 70kg/154lbs</li>
<li>1m75/5'9" at least 75kg/165lbs</li> 
<li>1m80/5'11" at least 80kg/176lbs</li>
<li>1m85/6'1" at least 85kg/187lbs</li>
<li>1m90/6'3" at least 90kg/200lbs</li>
</ul>


          <strong>2. <u>Eat Every 3 Hours</u></strong><br /> You need at least your body-weight in lbs x 20 kcal to gain weight. That's 2700kcal/day if you're 135lbs. If you have a physical job or move a lot, you'll need even more. Eat every 3 hours.<br /><br />
<ul>
<li><b>Breakfast:</b> Get calories from the first hour. Read how to build the habit of eating breakfast.</li><br />
<li><b>Lunch & Diner: </b>Prepare double portions while making breakfast. 1 portion for work/school, 1 portion when you get back.</li><br />
<li><b>Snacks:</b> Mixed nuts, fruits, dried fruits, yogurt, cottage cheese, eggs, sandwiches, milk, protein shakes, etc.</li><br />
<li><b>Post Workout:</b> Physical activities burn calories. Eat post workout to get that energy back.</li><br />
</ul>
 
 
            <strong>3. <u>Eat Calorie Rich Foods</u></strong><br /> 100g raw rice is 380kcals. 100g raw spinach is only 25kcals. Getting your daily calorie intake is easier if you eat foods high in calories. Your best options:-<br /><br />
<ul>
<li><b>Pasta:</b> 100g pasta is 380kcal and easier to ingest than 100g rice. Whole grain pasta is healthier, but takes longer to digest. Eat white pasta.<br /><br />
<li><b>Whole Milk:</b> If you don't bother gaining some fat, drink 1 gallon whole milk per day on top of your current food intake. I've seen guys gaining 60lbs/year drinking 1 gallon per milk per day while Squatting 3x/week.<br /><br />
<li><b>Nuts:</b> Mixed nuts and natural peanut butter have +500kcal/100g, about 50% healthy fats and 25% protein. Use mixed nuts as snack and throw peanut butter on sandwiches for work/school.<br /><br />
<li><b>Olive Oil:</b> Protects against heart diseases and cancer. Sip it like vodka (it's not that bad, really) or use it for tomato pasta sauce. 1tbsp is 100kcal.<br /><br />
</ul>

            <strong>4. <u>Get Stronger</u></strong><br /> You want to go from skinny to muscular, not from skinny to chubby. Get into strength training. More strength is more muscle. If you don't know where to start.<br /><br />
<ul>
<li><b>Free Weights:</b> Force you to stabilize the weight and allow for natural motions. Start light, focus on technique and add weight progressively.</li><br />
<li><b>Compound Exercises:</b> Do exercises that work your whole body. Squats, Deadlifts, Overhead Press, Bench Press, Pull-ups, Dips, Barbell Row, etc.</li><br />
<li><b>Squats:</b> Leg exercise stressing your whole body. When you can Squat 1.5x your body-weight for 1 rep, you'll no longer be skinny.</li><br />
<li><b>Rest:</b> Muscle grow when you rest, not when you workout. Don't train daily. Sleep, drink 1 gallon water daily and eat fruits/veggies.</li><br />
</ul>

             <strong>5. <u>Plan in Advance</u></strong><br /> Failing to plan is planning to fail. You don't have time to cook 3x/day, and the food at work/school is often low quality/more expensive. Prepare your food in advance and take it with you.<br /><br />
<ul>
<li><b>Do The Grocery:</b> Avoid skipped meals because you don't have food available. List everything you need for 1 week and go buy it.</li><br />
<li><b>Cook in Advance:</b> Prepare all your meals once per day: while preparing breakfast or while preparing dinner. It takes about 40mins.</li><br />
<li><b>Keep it Simple:</b> Make double portions, take leftovers with you, use cans of tuna & mixed nuts, 1 gallon milk per day.</li><br />
<li><b>Take Food with You:</b> Food containers for work/school, mixed nuts at the movies, eat before going to town, take protein shakes to the gym.</li><br />
</ul>

             <strong>6. <u>Track Progress</u></strong><br /> Success breeds success. Knowing that you're losing your skinny look will keep you motivated. Track everything.<br /><br />

<li><b>Track Calories:</b> Continue tracking your daily caloric intake using FitDay so you get a confirmation of how many calories you're eating.</li><br />
<li><b>Weigh Yourself Weekly:</b> Gaining weight? Don't change anything. Not gaining weight? Increase your daily caloric intake by 500kcal.</li><br />
<li><b>Take Pictures:</b> The mirror is subjective. Pictures don't lie. Shoot pictures bi-monthly so you have objective measurements of your progress.</li><br />
<li><b>Track Strength Gains:</b> When you can Squat 1.5x your body-weight for 1 rep, you'll no more be skinny.</li><br />

 
              <strong>7. <u>Special Weight Gain Diet</u></strong><br /> 3500+kcal example diet for a skinny guy who wants to weigh 180lbs/81kg. This can be too much at once if you're only 135lbs/61kg or not enough if you're very active. Individualize the diet based on your needs.<br /><br />
<ul>
<li><b>Breakfast:</b> 100g oats, 50g raisins, 1scoop whey</li><br />
<li><b>Snack:</b> 100g mixed nuts or 1 liter milk or tuna sandwich</li><br />
<li><b>Lunch:</b> 200g white pasta, bolognese sause, parmesan cheese</li><br />
<li><b>Snack:</b> 100g mixed nuts or 1 liter milk or tuna sandwich</li><br />
<li><b>Post workout shake:</b> 1.5scoops whey, 60g oats, milk, banana</li><br />
<li><b>Dinner:</b> 200g white pasta, bolognese sause, parmesan cheese</li><br />
<li><b>Pre bed:</b> cottage cheese, berries, flax seed, fish oil</li><br />
</ul>
	  
</section>	 

<section id="fatloss">

             <h2>Lose Body Fat/Shredded</h2>
	<p>
	
        When you go on a "program" to lose body fat, you may set yourself up for failure. A program implies an endpoint, which is when most people return to their previous habits. If you want to lose fat and keep it off, make changes that you can live with indefinitely. Don't over-restrict calories, and find an exercise program that adequately challenges you, provides progression and offers sufficient variety so that you can maintain it for years to come.<br /><br /></p>
        
			 
			 <strong><u>Natural Ways To Lose Body Fat</u>-</strong><br /><br />
			 1. DRINK MORE WATER<br /><br />
			 2. CONSUME FEWER CALORIES THAN YOU BURN<br /><br />
			 3. REDUCE STARCHY CARBS<br /><br />
			 4. EAT A FULL, BALANCED BREAKFAST<br /><br />
			 5. LIMIT SUGAR CONSUMPTION<br /><br />
			 6. ROTATE YOUR CARBS<br /><br />
			 7. DRINK BLACK COFFEE BEFORE WORKING OUT<br /><br />
			 8. AVOID DRASTIC CALORIE REDUCTIONS<br /><br />
			 9. EAT 5-6 MEALS A DAY<br /><br />
			 10. INCREASE VEGETABLE CONSUMPTION<br /><br />
			 11. DON'T OVER-RELY ON FAT BURNERS<br /><br />
			 12. CONSUME 25-35 GRAMS OF FIBER A DAY<br /><br />
			 13. ELIMINATE 18. EAT THE PROPER AMOUNT OF PROTEINJUNK FOOD<br /><br />
			 
			 <strong><u>Special Diet Plan To Get Ripped</u>-</strong><br /><br />
	
	         <strong>MEAL 1</strong><br />
- 6 egg whites<br />
-1/2 cup oatmeal<br /><br />

<strong>TOTALS:</strong><br />
Calories: 266<br />
Protein: 30g<br />
Carbs: 32g<br />
Fat: 4g<br /><br />

<strong>MEAL 2</strong><br />
- 6 oz nonfat or<br />
- 1% greek yogurt<br />
- 1 banana<br /><br />

<strong>TOTALS:</strong><br />
Calories: 258<br />
Protein: 17g<br />
Carbs: 44g<br />
Fat: 0 g<br /><br />

<strong>MEAL 3</strong><br />
- 6 oz chicken breast<br />
- 4 oz sweet potato<br />
- 1 cup broccoli<br /><br />

<strong>TOTALS:</strong><br />
Calories: 406<br />
Protein: 60g<br />
Carbs: 30g<br />
Fat: 0g<br /><br />

<strong>MEAL 4</strong><br />
- post-workout shake with 35g whey protein<br /><br />

<strong>TOTALS:</strong><br />
Calories: 120<br />
Protein: 35g<br />
Carbs: 4g<br />
Fat: 1g<br /><br />

<strong>MEAL 5</strong><br />
- 6 oz salmon<br />
- 1/4 cup brown rice<br />
- 4 oz asparagus<br /><br />

<strong>TOTALS:</strong><br />
Calories: 315<br />
Protein: 24g<br />
Carbs: 16g<br />
Fat: 19g<br /><br />

<strong>MEAL 6</strong><br />
- 6 oz cottage cheese<br />
- 10 almonds<br /><br />

<strong>TOTALS:</strong><br />
Calories: 205<br />
Protein: 21g<br />
Carbs: 9g<br />
Fat: 8g<br /><br />

<strong>TOTALS FOR THE DAY:</strong><br />
Calories: 1,557<br />
Protein: 176g<br />
Carbs: 135g<br />
Fat: 37g<br /><br />
	
	
</section>
    </div>
</div>   <!-- end row-->
    </div> <!-- end container-->  

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
