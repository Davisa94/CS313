<?php
session_start();
$loggedin = isset($_SESSION['username']);
$active = "";
if($loggedin)
{
   echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../mainProject/logout.php\">Logout</a>";
}
else if(strpos($url, 'login') == false){
  echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../mainProject/login.php\">Login</a>";
  echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../mainProject/signup.php\">Signup</a>";
}
 ?>
