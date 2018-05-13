<?php
$name = 'color';
$value = 'blue';

   #start session:
   session_start();
   #USE SESSION:
   if (isset($_SESSION["timesVisited"]))
   {
         $_SESSION["timesVisited"] += 1;
   }
   else
      $_SESSION["timesVisited"] = 0;
heroku logs
htmlspecialchars

?>
<html>

Important code for homework:
{
   <html>
         <h2>Book</h2>
         <form class="" action="add.php" method="post">
               <input type="button" name="Book"  onclick="addItem('book');"/>
         </form>

         <h2>ANother Book</h2>
   </html>
}
 <?php
   $_POST{"Book"}
  ?>
</html>
<body>
 cookie Set!
</body>

<!-- ##get cookie-->
<?php

$color = $_COOKIE["color"]
 ?>
