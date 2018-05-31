<?php
  require 'dbConnect.php';
  $id = htmlspecialchars($_POST['character']);
  $db = get_db();

  $query = "select body, id FROM character_dialouge WHERE character_id = :id";

  $statement = $db->prepare($query);
  $statement->bindValue(":id", $id, PDO::PARAM_INT);
  $statement->execute();
  $row = $statement->fetch();

  echo $row['body'];
?>
