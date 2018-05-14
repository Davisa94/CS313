<?php
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$active = "";
if(strpos($url, 'store') == false)
{
   echo "<a class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\" href=\"../3rdWeek/Store.php\">Store</a>";
}
 ?>
