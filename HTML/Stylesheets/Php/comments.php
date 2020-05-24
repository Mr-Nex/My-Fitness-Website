<?php

include_once 'head.php';
include_once 'db.php';
include_once 'comments.inc.php';
date_default_timezone_set('Asia/Kolkata');
?>
    
<?php
    
if(isset($_SESSION['u_uid'])){    
   echo "<form class='form' method='POST' action='".setcomments($conn)."' enctype='multipart/form-data' autocompete='off'>
       <input type='hidden' name='uid' value='".$_SESSION['u_id']."'>
       <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
       <textarea class='form-control' rows='5' id='comment' name='message' placeholder='Write your queries'></textarea><br />
       <button class='btn btn-default' type='submit' name='commentsubmit'>Submit</button>
    </form><br><br><br>";

getcomments($conn);
}else{
    echo "<div class='alert alert-danger'>Get Lost!!! and Login First.</div>";
}
    ?>
</div>    
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
                            <td><center><a href="#" title="web page counters"><img src="https://counter10.fcs.ovh/private/freecounterstat.php?c=b6s6cfs1j5k53l87zbj6dewzzn7sn45h" border="0" title="web page counters" alt="web page counter"></a></center></td>
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
    
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

 </body>
 </html>