<?php
require 'dbConnect.php';
#Get values from post:
$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
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
#First query that inserts into
$query = "insert into user_data (first_name, last_name)
  values (:fname, :lname)";

$statement = $db->prepare($query);
$statement->bindValue(":fname", $fname, PDO::PARAM_INT);
$statement->bindValue(":lname", $lname, PDO::PARAM_INT);
$statement->execute();
$user_id = $db->lastInsertId();

#Hash the Password:
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
?>
