<?php
session_start();
$id = $_POST['char_id'];
$user_name = $_SESSION['username'];
#TODO query the table to see if the row already exists if not do the following:
$query = "SELECT * FROM user_relationship WHERE (user_id = (SELECT user_id from user_relationship WHERE user_name = ':user_name') AND character_id = :character_id)";
$statement = $db->prepare($query);
$statement->bindValue(":user_name", $user_name, PDO::PARAM_STR);
$statement->bindValue(":user_id", $id, PDO::PARAM_STR);
$statement->bindValue(":character_id", $id, PDO::PARAM_STR);
$statement->execute();
if($statement->rowCount() <= 0){
  $query = "INSERT into user_relationship (relationship) WHERE (user_id = :user_id AND character_id = :character_id)
    values (:relationship)";
  $statement = $db->prepare($query);
  $statement->bindValue(":user_id", $id, PDO::PARAM_STR);
  $statement->bindValue(":character_id", $id, PDO::PARAM_STR);
  $statement->execute();

}
else{
  $query = "INSERT into user_relationship (user_id, character_id, relationship) WHERE (user_id = user_id = :user_id AND character_id = :character_id)
    values (:relationship)";
  $statement = $db->prepare($query);
  $statement->bindValue(":user_id", $id, PDO::PARAM_STR);
  $statement->execute();

}


header("Location: talk.php");
die();

?>
