<?php
$loggedin = $_SESSION['username'];
$active = "";
if(!$loggedin)
{
   echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../mainProject/login.php\">Login</a>";
}
else{
  
}
 ?>
