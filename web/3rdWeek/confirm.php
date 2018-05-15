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
      <h3>Thank you for shopping with us</h3>
      <div class="grid-center">

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
