<?php include 'config.php'; ?>
<?php include 'database.php'; ?>
<?php include 'adminheader.php'; ?> 
<?php include 'helper.php'; ?>

<?php 
//create database object
$db= new Database;
//create query
$query = "SELECT posts.*, categories.name FROM posts
           INNER JOIN categories
           ON posts.category = categories.id
           ORDER BY posts.title ";
//run query
$posts = $db->select($query);

//create query
$query = "SELECT * FROM categories";

//run query
$categories = $db->select($query);

?>

            
            
<table class="table table-striped">
  <tr>
      <th>Post ID#</th>
      <th>Post Title</th>
      <th>Category</th>
      <th>Author</th>
      <th>Date</th>
    
    </tr>
    
      <?php while($row = $posts->fetch_assoc()) : ?>
        <tr>
         <td><?php echo $row['id']; ?></td>
        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['author']; ?></td>
        <td><?php echo formatDate($row['date']); ?></td>
         </tr>    
      <?php endwhile; ?>
    
   
    
</table>


<table class="table table-striped">
  <tr>
      <th>Category ID#</th>
      <th>Category Name</th>
        
    </tr>
     <?php while($row = $categories->fetch_assoc()) : ?>
        <tr>
         <td><?php echo $row['id']; ?></td>
        <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
        
         </tr>    
      <?php endwhile; ?>
    
</table>
            

 </div><!-- /.blog-main -->


    </div><!-- /.container -->


    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Your<span>fitness</span>Buddies</h3>

				<p class="footer-links">
					<a href="index.php">Home</a>
					·
					<a href="about.htm">About</a>
					·
					<a href="tips.htm">Workout</a>
					·
					<a href="diet.htm">Diet</a>
					·
					<a href="#signup">Get Personal Coach</a>
					·
					<a href="contact.htm">Contact</a>
				</p>

				<p class="footer-company-name">Your Fitness Buddies &copy; 2017</p><br>
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

					<a href="contact.htm"><i class="fa fa-facebook"></i></a>
                    <a href="contact.htm"><i class="fa fa-google"></i></a>
                    <a href="contact.htm"><i class="fa fa-youtube"></i></a>
                    <a href="contact.htm"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>
 
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
  <script src="bootstrap.js"></script>  



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


     </body>
</html>            			       