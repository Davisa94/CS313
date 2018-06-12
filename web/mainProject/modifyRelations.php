<?php
#TODO query the table to see if the row already exists if not do the following:
$query = "SELECT * FROM user_relationship() WHERE (user_id = user_id = :user_id AND character_id = :character_id)";
$statement = $db->prepare($query);
$statement->bindValue(":user_id", $id, PDO::PARAM_STR);
$statement->execute();

$query = "INSERT into user_relationship (user_id, character_id, relationship) WHERE (user_id = user_id = :user_id AND character_id = :character_id)
  values (:relationship)";
$statement = $db->prepare($query);
$statement->bindValue(":user_id", $id, PDO::PARAM_STR);
$statement->execute();


header("Location: talk.php");
die();

?>
