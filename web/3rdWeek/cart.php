<html>


<?php
   require 'head.php';
 ?>

<body>

<?php
   require 'nav.php';
 ?>
  <main class="mdl-layout__content" id="store">
      <h3>Just Another Magic Store</h3>
      <div class="grid">
         <?php
         session_start();
         $name = $_POST["name"];
         $cart = $_SESSION["cart"][$name];
         $string = file_get_contents("cards.json");
         $cards = json_decode($string, true);
          $total = 0;
           foreach ($cards as $card) {
             $img = $card["image"];
             $name = (string)$card["name"];

             $price = $card["Price"];
            $price = number_format((float)$card["Price"],2);


             if(array_key_exists($name,$_SESSION['cart']))
             {
              $quantity = $_SESSION["cart"][$name];
              $subTotal = ($price * $quantity);
              $subTotal = number_format((float)$subTotal,2);
              $total+= $subTotal;
              $total = number_format((float)$total,2);

             echo "<div>
                  <form action=\"addToCart.php\" method=\"post\">


                       <h3>$name</h3>
                       <img src=$img onmouseover=$name />
                       <div class=\"nested-small\">
                           <div>
                              Quantity: $quantity
                           </div>
                           <div>
                              Sub: $$subTotal
                           </div>
                       </div>
                           <div>
                           <form class=\"nested-small\" action=\"addToCart.php\" method=\"post\">
                           <button type=\"submit\"
                           formaction=\"addToCart.php\">Add To Cart</button>
                           <button type=\"submit\"
                           formaction=\"removeCart.php\">Remove From Cart</button>
                           <input type=\"hidden\" name=\"name\" value=\"$name\"/>
                           <input type=\"hidden\" name=\"Quantity\" value=\"$quantity\"/>
                           <input type=\"hidden\" name=\"Quantity\" value=\"$price\"/>
                           </form>
                           </div>


                    </form>
                    </div>";
                 }
           };
           echo "
          <div>
             Total: $$total
          </div>";
          echo "

          <form method=\"post\">
         <h4>Enter Your Shipping Address</h4>
          <input type=\"text\" name=\"address\" value=\"\"/>

          <button type=\"submit\"
          formaction=\"Check.php\">Checkout</button>

          </form>"
             ?>
          </div>
          <a class = "mdl-button mdl-js-button
          mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          href="Store.php">Go To Store</a>
          </div>
   </main>
</div>

      <div>

      </div>
  </main>
         <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
           Assignments
         </button>
      </div>
-->

</body>
</html>
