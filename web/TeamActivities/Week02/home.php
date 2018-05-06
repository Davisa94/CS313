<?php
echo "<html>
   <head>

   </head>
   <body>";
   $sample_url = "/header.php";
   $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
   echo $url;
   $active = ""
   if(strpos($url, 'about_us') !== false)
   {
      $active = "about_us"
   }
   if(strpos($url, 'home') !== false)
   {
      $active = "home"
   }
   if(strpos($url, 'login') !== false)
   {
      highlight header
   }
   echo "
   </body>
</html>";
?>
