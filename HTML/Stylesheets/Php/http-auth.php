<?php
//page authentication

$username = 'admin';
$password = 'nitinkumar@26';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER']!= $username) || ($_SERVER['PHP_AUTH_PW']!= $password))
{
    // the uername / password are incorrect so send the authentication headers
    header('HTTP/1.1 401 Unauthorized');
    header('www-Authenticate: Basic realm="Your Fitness Buddies"');
    exit('<h2>Your Fitness Buddies</h2>Sorry, you must enter a valid username and password to access this page.');
}
?>