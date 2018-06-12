<?php
$query = "insert into user_relationship (relationship) WHERE (user_id = user_id = :user_id AND character_id = :character_id)
  values (:relationship)";
$statement = $db->prepare($query);
$statement->bindValue(":user_id", $id, PDO::PARAM_STR);
$statement->execute();


header("Location: talk.php");
die();

?>
