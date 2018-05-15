<?php
session_start();
   $cart = $_SESSION["cart"];
   echo $cart;
   foreach ($_SESSION as $key => $value) {
      echo $key . $value;
   }
   print_r($_SESSION);

?>
<html>
  <head>

  </head>
  <body>
     <h1><?php echo "Your Cart: ".$_SESSION["cart"][$_POST["name"]]; ?>   </h1>
     <?php
     foreach ($_SESSION['cart'] as $key => $value) {
        echo $key . $value;
     }
     $name = $_POST["name"];
     $cart = $_SESSION["cart"][$name];
     echo $cart;
     echo $_SESSION["cart"];
     print_r($_SESSION);


      ?>
  </body>
</html>
