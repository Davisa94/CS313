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
      <h3>A Little More About Me</h3>
      <div class="grid">
         <?php
         $string = file_get_contents("cards.json");
         $cards = json_decode($string, true);
           foreach ($cards as $card) {
             $img = $card["image"];
             $name = $card["name"];
             $quantity = $card["Quantity"];
             $price = $card["Price"];
             echo "<div>
                  <form action=\"addToCart.php\" method=\"post\">


                       <h3>$name</h3>
                       <img src=$img onmouseover=$name />
                       <div class=\"nested-center \">
                           <div>
                              Quantity: $quantity
                           </div>
                           <div>
                              Price: $price
                           </div>
                           <div>
                           <form action=\"addToCart.php\" method=\"post\">
                           <input type=\"submit\">Add To Cart
                           <input type=\"hidden\" name=\"name\" value=\"$name\"/>
                           <input type=\"hidden\" name=\"Quantity\" value=\"$quantity\"/>
                           </form>
                           </div>
                           <div>
                              Remove from Cart
                           </div>
                       </div>
                    </form>
                    </div>";

           };
          ?>

          </div>
          <div>
             <h3>Religious Presentation: Ten Truths of The Restoration</h3>
             <div class="nested-center gold-gradient">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LuTGWsTRmH8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             </div>
          </div>
          <a href="cart.php">Go To Cart</a>
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
