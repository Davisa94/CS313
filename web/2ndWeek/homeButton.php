<?php
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$active = ""
if(strpos($url, 'home') !== false)
{
   $active = "true"
}
else {
   echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../2ndWeek/home.php\">Home</a>";
}
 ?>
