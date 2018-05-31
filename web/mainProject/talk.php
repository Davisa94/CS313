<?php
// TODO: Change this to look up the given dialouge_id
  require 'dbConnect.php';
  $id = htmlspecialchars($_POST['character']);
  $db = get_db();

  $query = "select body, id FROM character_dialouge WHERE character_id = :id";

  $statement = $db->prepare($query);
  $statement->bindValue(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  $row = $statement->fetch();

  echo $row['body'];

  $query = "select id, body, next_dialouge_id, FROM user_response WHERE character_dialouge_id = :id";

  $statement = $db->prepare($query);
  $statement->bindValue(":id", $row['id'], PDO::PARAM_INT);
  $statement->execute();
  $responses = $statement->fetchAll(PDO::FETCH_ASSOC);
  echo "<form action=\"talk.php\" method=\"POST\">";
  foreach ($response in $responses){
    $body = $response['body'];
    $next_id = $response['next_dialouge_id'];
    echo "<button type=\"submit\" name=\"$next_id\">$body</span>";
  };
  echo "</form>";
?>
