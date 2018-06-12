<html>
<?php
   require 'head.php';
 ?>
 <body>
   <div class = "grid">


      <?php

   // TODO: Add the sourounding html Tags and the header info and such
   // https://github.com/sburton42/cs313-php-18s/tree/master/web/week06_notes
   // Create the db object
     require 'dbConnect.php';
     $id = htmlspecialchars($_POST['character']);
     $db = get_db();
     require 'events.php';
     if($event == false){
       //create the query to pull the character_dialogue's body where the id = the given id
         $query = "select body, id FROM character_dialogue WHERE character_id = :id";

         $statement = $db->prepare($query);
         $statement->bindValue(":id", $id, PDO::PARAM_INT);
         $statement->execute();
         $row = $statement->fetch();

     }
     //fetch character Name
     $query = "select character_id FROM character_dialogue WHERE id = :id";

     $statement = $db->prepare($query);
     $statement->bindValue(":id", $id, PDO::PARAM_INT);
     $statement->execute();
     $row2 = $statement->fetch();
     $character_id = $row2['character_id'];
    //We have the character ID, now lets get the name attached to that;
    $query = "select name FROM character WHERE id = :id";

    $statement = $db->prepare($query);
    $statement->bindValue(":id", $character_id, PDO::PARAM_INT);
    $statement->execute();
    $row2 = $statement->fetch();
    $name = $row2['name'];

     echo "<div class=\"-left\">
       <h2>Speaking To:</h2>
       <p>$name</p>
     </div>";
   //display the body TODO: Make this look fancier, maybe centered with a picture of the character
    echo "<div class=\"-center\">";
    // if isset($row['body']){
     echo $row['body'];

//     }
// else{
    // echo "Hello, Nothing to see here.";
//}
    echo "</div>";
   //This builds a query to select the info from user_response that corresponds to the given dialogue ID
     $query = "SELECT id, body, next_dialogue_id FROM user_response WHERE character_dialogue_id = :id";
     $start_id = $row['id'];
     $statement = $db->prepare($query);
     $statement->bindValue(":id", $start_id, PDO::PARAM_INT);
     $statement->execute();
     $responses = $statement->fetchAll(PDO::FETCH_ASSOC);

   //This displays each availiable response TODO: Make this look fancier
echo "<div \"-right\">";

     echo "<form action=\"talk.php\" method=\"POST\">";
     foreach ($responses as $response){
       $body = $response['body'];
       $next_id = $response['next_dialogue_id'];
       echo "<button class = \"mdl-button mdl-js-button
       mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-text title\"
       type=\"submit\" name=\"character\" value=\"$next_id\" >$body</button>";
       echo "<br />";
     };
     echo "</form>";
     echo "<a class = \"mdl-button mdl-js-button
     mdl-button--raised mdl-js-ripple-effect mdl-button--accent\"
     href=\"home.php\">Bye!</a>";

   echo "</div>";
   ?>
      </div>
 </body>

</html>
