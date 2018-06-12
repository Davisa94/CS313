<?php

 require 'dbConnect.php';
// TODO:  get user id from db
// TODO: get users relationship data from DB
//TODO: Store relationship data in an array sorted by character id
 $query = "select * FROM user_relationship WHERE user_id = :user_id ORDER BY character_id";
 $statement = $db->prepare($query);
 $statement->bindValue(":user_name", $user, PDO::PARAM_STR);
 $statement->execute();
 $relationships = $statement->fetch();
?>
