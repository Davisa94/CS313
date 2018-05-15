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
         $address = $_POST['address'];
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
              $total += 5;
              $total = number_format((float)$total,2);

             echo "<div>
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


                    </form>
                    </div>";
                 }
           };
           echo "
          <div class=\"nested-small\">
             <div>
               Your Total cost with shipping is : $$total
             </div>
             <div>
                          Your Shipping cost is: $5.00;
             </div>
             <div>
                          Your address is: $address
             </div>
             </div>
           <a class = \"mdl-button mdl-js-button
           mdl-button--raised mdl-js-ripple-effect mdl-button--accent\"
           href=\"confirm.php\">Confirm and pay</a>
           </div>

          </div>";
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
