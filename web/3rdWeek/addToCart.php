<?php
   session_start();
   $name = (string)$_POST["name"];
   $quantity = (string)$_SESSION["cart"][$name];
   $price = $_POST["price"];
   $quantity += 1;
   $cart = array( $_SESSION["cart"]);

   if (isset($_SESSION["cart"])){
         echo "Adding to your cart!";
      $_SESSION["cart"][$name] = $quantity;
         echo $cart;
   }
   else{
      $_SESSION['cart'][$name] = $quantity;
      echo $cart;
      print_r($_SESSION);
      foreach ($_SESSION as $key => $value) {
         echo $key . $value;
      }
   }
   header("Location: {$_SERVER['HTTP_REFERER']}");
 ?>
