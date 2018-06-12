<?php
require 'dbConnect.php';

#Get values from post:
$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$user = htmlspecialchars($_POST['user']);
$pass = $_POST['pass'];
$pass = (string)$pass;

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
$statement->bindValue(":fname", $fname, PDO::PARAM_STR);
$statement->bindValue(":lname", $lname, PDO::PARAM_STR);
$statement->execute();
$user_id = $db->lastInsertId();
echo $user_id;

#Hash the Password:
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
$pwdverify = password_verify($pass, $hashedPass);
echo "PASSWORD VERIFY: " . $pwdverify;
echo "\nRAW: " . password_verify('H', '$2y$10$iEuYyP/jvhdLUO1OIuhNMe0J8TKiCRoOihBfcicdZWSHshGMWHPci');
$query = "insert into user_credentials (user_id, user_name, password)
  values (:user_id, :user, :pass)";

$statement = $db->prepare($query);
$statement->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$statement->bindValue(":user", $user, PDO::PARAM_STR);
$statement->bindValue(":pass", $hashedPassword);
$statement->execute();

?>
