<?php
require 'dbConnect.php';

#Get values from post:
$user = htmlspecialchars($_POST['user']);
$pass = htmlspecialchars($_POST['pass']);

#TODO:
#0) Use try catch to check if the username is already taken
#1) insert into user_data
#2) get last insert ID
#3) use that id to insert into user_id in user_credentials, plus user_name, plus password
'dbConnect.php';
$id = htmlspecialchars($_POST['character']);
$db = get_db();
#First query checks if username exists
$query = "select user_name FROM user_credentials WHERE user_name = :user_name";

$statement = $db->prepare($query);
$statement->bindValue(":user_name", $user, PDO::PARAM_INT);
try{
  $statement->execute();
}
catch( PDOException $Exception ){
  echo "it failed";
}
//
//
// $user_id = $db->lastInsertId();
// echo $user_id;
//
// #Hash the Password:
// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//
// $query = "insert into user_credentials (user_id, user_name, password)
//   values (:user_id, :user, :pass)";
//
// $statement = $db->prepare($query);
// $statement->bindValue(":user_id", $user_id, PDO::PARAM_INT);
// $statement->bindValue(":user", $user, PDO::PARAM_STR);
// $statement->bindValue(":pass", $hashedPassword, PDO::PARAM_STR);
// $statement->execute();

?>
