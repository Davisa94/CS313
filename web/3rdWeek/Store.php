<html>
<?php
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
             echo "<div>
                       <h3>$name</h3>
                       <img src=$img onmouseover=$name />
                       <div id=\"options\" nested-center gold-gradient>

                       </div>
                    </div>";

           };
          ?>
          <div>
             <h3>Religious Presentation: Ten Truths of The Restoration</h3>
             <div class="nested-center gold-gradient">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/LuTGWsTRmH8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
             </div>
          </div>
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
