<html>


<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if(session_id() == '') {
//     session_start();
// }
   #USE SESSION:



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
         $string = file_get_contents("cards.json");
         $cards = json_decode($string, true);
           foreach ($cards as $card) {
             $img = $card["image"];
             $name = $card["name"];
             // $quantity = $card["Quantity"]; Not yet implimented
             $price = $card["Price"];
             echo "<div>
                  <form action=\"addToCart.php\" method=\"post\">


                       <h3>$name</h3>
                       <img src=$img onmouseover=$name />
                       <div class=\"nested-small\">
                           <div>
                              Quantity: $quantity
                           </div>
                           <div>
                              Price: $price
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

           };
          ?>

          </div>
          <a class = "mdl-button mdl-js-button
          mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          href="cart.php">Go To Cart</a>
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
