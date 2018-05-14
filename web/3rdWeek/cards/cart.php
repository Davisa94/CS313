<?php
   $cart = $_SESSION["cart"];
   foreach ($cart as $name => $value) {
      echo "You have $value $name 's'";
   }


?>
