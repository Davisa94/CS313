<html>
   <?php require 'head.php'; ?>

   <body>
      <div class="mdl-layout mdl-js-layout">
         <?php require 'nav.php'; ?>
         <main class="mdl-layout__content" id="other">
            <!-- This div is for the SBS content -->
            <h3>A Little More About Me</h3>
            <div class="grid">
               <div>
                  <h3>Academic Accomplishments</h3>
                  <div class="nested">
                        <span>
                           Here is a link to a website created for a web
                           engineering course: <a href=https://davisa94.github.io/public_html/>Assignments</a>
                        </span>
                  </div>
               </div>
               <div>
                  <h3>Religious Presentation: Ten Truths of The Restoration</h3>
                  <div class="nested gold-gradient">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/LuTGWsTRmH8?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
               </div>
               <div>
                  <h3>3D Modeling/Animation: Crystal</h3>
                  <div class="nested gold-gradient">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/OMVwMctDZqg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
               </div>
               <div>
                  <h3>3D Animation/Art: #1</h3>
                  <div class="nested gold-gradient">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/EkeyQe35TDE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
               </div>
               <div>
                  <h3>3D Animation: Mapped object to music</h3>
                  <div class="nested gold-gradient">
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/xzsCBf8zpXY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
               </div>
               <div>
                  <h3>Known Programming Languages</h3>
                  <div class="mdl-list nested skyBlue">
                     <ul class="mdl-list">
                        <div class="steel">
                           <li class="mdl-list__item">
                                 C++
                                 <?php
                                 #define days, years etc.

                                    $started = strtotime('2016-9-25 9:00:00');

                                       $tokens = array (
                                          31536000 => 'year',
                                          2592000 => 'month',
                                          604800 => 'week',
                                          86400 => 'day',
                                          3600 => 'hour',
                                          60 => 'minute',
                                          1 => 'second'
                                          );
                                       $CurrentTime = time();
                                       $startedC = $started;
                                       $timeSince = $CurrentTime - $startedC;
                                       foreach ($tokens as $unit => $text) {
                                          if ($timeSince < $unit) continue;
                                          $numberOfUnits = floor($timeSince / $unit);
                                          echo $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');

                                   ?>
                           </li>
                        </div>
                        <div class="blue">
                           <li class="mdl-list__item">
                                 Python: 4 Years
                           </li>
                        </div>
                        <div class="blue">
                           <li class="mdl-list__item">
                                 Html: 2 Years
                           </li>
                        </div>
                        <div class="blue">
                           JavaScript: 2 Years
                        </div>
                        <div class="blue">
                           Bash: 3 Years
                        </div>

                     </ul>
                  </div>
               </div>
         </main>
      </div>
   </body>

</html>
