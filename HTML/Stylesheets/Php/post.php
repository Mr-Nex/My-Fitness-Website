<?php include 'config.php'; ?>
<?php include 'database.php'; ?>
<?php include 'header.php'; ?>
<?php include 'helper.php'; ?>

<?php 

    $id = $_GET['id'];

    //create database object

   $db=new Database();

//create query
$query = "SELECT * FROM posts WHERE id = ".$id;

//run query
$post = $db->select($query)->fetch_assoc();

//create query
$query = "SELECT * FROM categories";

//run query
$categories = $db->select($query);

?>
<div class="blog-post">
            <h3 class="blog-post-title"><?php echo $post['title']; ?></h3>
            <p class="blog-post-meta"><img src="images/date.png" height="25px" width="25px" /><?php echo formatdate($post['date']); ?> | <img src="images/author.png" height="25px" width="25px" />Author:  <a href="#"><?php echo $post['author']; ?></a></p>

			<?php echo ($post['body']); ?>
    
<br>
    			</div><!-- /.blog-post -->

    
			       			        </div><!-- /.blog-main -->


    </div><!-- /.container -->

  </div><!--  frame end -->


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

