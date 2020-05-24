<?php include 'config.php'; ?>
<?php include 'database.php'; ?>
<?php include 'header.php'; ?>
<?php include 'helper.php'; ?>

<?php 
        
    //create database object

   $db=new Database();


    //check URL for category
  if (isset ($_GET['category'])){
    $category = $_GET['category'];
    //create query
    $query = "SELECT * FROM posts WHERE category = ".$category." ORDER BY id DESC";

    //run query
    $posts = $db->select($query);
    
}else{
    //create query
    $query = "SELECT * FROM posts ORDER BY id DESC";

    //run query
    $posts = $db->select($query);
}



//create query
$query = "SELECT * FROM categories";

//run query
$categories = $db->select($query);

?>

<?php if($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) : ?>

<div class="blog-post">
            <h3 class="blog-post-title"><?php echo $row['title']; ?></h3>
            <p class="blog-post-meta"><img src="images/date.png" height="25px" width="25px" /><?php echo formatdate($row['date']); ?> | <img src="images/author.png" height="25px" width="25px" />Author:  <a href="#"><?php echo $row['author']; ?></a></p>

			<?php echo shortentext($row['body']); ?>
    <br>
    			<a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>" ><img src="images/read.png" height="25px" width="25px" />Read More<img src="images/read.png" height="25px" width="25px" /></a>
			
			</div><!-- /.blog-post -->
<?php endwhile; ?>

          
<?php else : ?>
                 <p><br /><br /><br /><b>There are no posts yet!!!</b></p>
<?php endif; ?>


			       			        </div><!-- /.blog-main -->
</div>

<div class="col-xs-3">
   <section id="right">

          <div id="categories1">
            <h3><center><b>Categories</b></center></h3>
              
              <?php if ($categories) : ?>
            <ul style="list-style-type:square;">
            <?php while($row = $categories->fetch_assoc()) : ?>
                   <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
            <?php endwhile; ?>
              
             
            </ul>
              <?php else : ?>
                       <p>There are no categories</p>
              <?php endif; ?>
          </div>

</section>
</div>
</div>
    </div><!-- /.container -->



    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<div class="navbar navbar-default navbar-sticky-bottom">
      <div class="contaner">
                          <ul class="nav nav-pills nav-stacked">
  <li><a href="index.html">Home</a></li>
  <li><a href="about.htm">ABout Us</a></li>
  <li><a href="contact.htm">Contact Us</a></li>
  <li><a href="blog.php">Check our blog</a></li>
</ul>
          <table class="table table-hover">
              <tbody>
                        <tr>
                            <td><a href="#"><img src="images\gr2.png" height="45px" width="70px" alt="home"></a>&nbsp;&copy:2017</td>
                            <td><!-- like button --><div class="fb-like" data-href="http://yourfitnessbuddies.com" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</td>
							<td><a href="contact.htm"><img src="images\fb.png" height="35px" width="35px" alt="follow me on facebook"></a></td>
                            <td><a href="contact.htm"><img src="images\yt.png" height="35px" width="35px" alt="follow me on youtube"></a></td>
                            <td><a href="contact.htm"><img src="images\insta.png" height="35px" width="35px" alt="follow me on instagram"></a></td>
                            <td><a href="contact.htm"><img src="images\gmail.png" height="35px" width="35px" alt="follow me on gmail"></a></td>
                            <!--<td><p class="navbar-text pull-right">Developer: Nitin Kumar</p></td>-->
                         </tr>
                  <tr>
                      <td><p class="navbar-text pull-right">Developer: Nitin Kumar</p></td>
                  </tr>
                  </tbody>
                
                        
                       </table>

    </div>
    
    </div>  
    
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
  <script src="bootstrap.js"></script> 

     </body>
</html>



