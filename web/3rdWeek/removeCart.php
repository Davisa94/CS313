<?php
   session_start();
   $name = (string)$_POST["name"];
   $quantity = (string)$_SESSION["cart"][$name];
   $price = $_POST["price"];
   $quantity -= 1;
   $cart = array( $_SESSION["cart"]);

   if(isset($_SESSION["cart"][$name]) && $quantity > 0){
         echo "Removing from your cart!";
      $_SESSION["cart"][$name] = $quantity;
         echo $cart;
   }
   else{
      unset($_SESSION['cart'][$name]);
      echo $cart;
      print_r($_SESSION);
      foreach ($_SESSION as $key => $value) {
         echo $key . $value;
      }
   }
   header("Location: {$_SERVER['HTTP_REFERER']}");
 ?>
