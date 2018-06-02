<?php
// TODO: Add the sourounding html Tags and the header info and such
// https://github.com/sburton42/cs313-php-18s/tree/master/web/week06_notes
// Create the db object
  require 'dbConnect.php';
  $id = htmlspecialchars($_POST['character']);
  $db = get_db();
//create the query to pull the character_dialouge's body where the id = the given id
  $query = "select body, id FROM character_dialouge WHERE id = :id";

  $statement = $db->prepare($query);
  $statement->bindValue(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  $row = $statement->fetch();
//display the body TODO: Make this look fancier, maybe centered with a picture of the character
  echo $row['body'];
//This builds a query to select the info from user_response that corresponds to the given dialouge ID
  $query = "select id, body, next_dialouge_id FROM user_response WHERE character_dialouge_id = :id";
  $start_id = $row['id'];
  $statement = $db->prepare($query);
  $statement->bindValue(":id", $start_id, PDO::PARAM_INT);
  $statement->execute();
  $responses = $statement->fetchAll(PDO::FETCH_ASSOC);
//This displays each availiable response TODO: Make this look fancier
  echo "<form action=\"talk.php\" method=\"POST\">";
  foreach ($responses as $response){
    $body = $response['body'];
    $next_id = $response['next_dialouge_id'];
    echo "<button type=\"submit\" name=\"character\" value=\"$next_id\">$body</button>";
  };
  echo "<button href='home.php'>Bye!</button>";
  echo "</form>";
?>
