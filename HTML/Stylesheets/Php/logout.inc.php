<?php
include_once('redirect.php');

 if(isset($_POST['submit'])) {
	 session_start();
	 session_unset();
	 session_destroy();
	 safe_redirect("./index.php?logout=success");
	 exit();
 }