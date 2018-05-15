<?php
   session_start();
   $name = (string)$_POST["name"];
   $quantity = (string)$_SESSION["cart"][$name];
   $quantity += 1;
   $cart = array( $_SESSION["cart"]);

   if (isset($_SESSION["cart"])){
         echo "Adding to your cart!";
      $_SESSION[$name] = $quantity;
         echo $cart;
   }
   else{
      $_SESSION[$name] = $quantity;
      echo $cart;
      print_r($_SESSION);
      foreach ($_SESSION as $key => $value) {
         echo $key . $value;
      }
   }
 ?>
 <html>
   <head>

   </head>
   <body>
      <h1><?php echo "Your Cart: ".$_SESSION["cart"][$_POST["name"]]; ?>   </h1>
      <?php
      $name = $_POST["name"];
      $cart = $_SESSION["cart"][$name];
      echo $cart;
      echo $_SESSION["cart"];
      print_r($_SESSION);


       ?>
   </body>
 </html>
