<?php
require 'dbConnect.php';
session_start();
#Get values from post:
$user = htmlspecialchars($_POST['user']);
$pass = $_POST['pass'];
$pass = (string)$pass;
function dbFailed($num){
  echo "failed" . $num;
}

#query for password using given username if its found
function checkPasss($pass, $hashedPass){

}

#TODO:
#0) Use try catch to check if the username is already taken
#1) insert into user_data
#2) get last insert ID
#3) use that id to insert into user_id in user_credentials, plus user_name, plus password
'dbConnect.php';

$db = get_db();
#First query checks if username exists
$query = "select user_name FROM user_credentials WHERE user_name = :user_name";

$statement = $db->prepare($query);
$statement->bindValue(":user_name", $user, PDO::PARAM_STR);

$statement->execute();
#check if name is in db
if($statement->rowCount() <= 0){
  echo "No name here";
}
#if name is in db check for password match
else{
  $query = "select password FROM user_credentials WHERE user_id = :user_name";

  $statement = $db->prepare($query);
  $statement->bindValue(":user_name", $user, PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch();
  $hashedPass = $row['password'];
  $right = false;
  echo "\nhashed: " . $hashedPass . "\n";
  echo "\npass: " . $pass . "\n";

  if (password_verify($pass, $hashedPass))
      {
        echo "\nhashed: " . $hashedPass . "\n";
        echo "\npass: " . $pass . "\n";
        $right = true;
        return $right;
        $_SESSION['username'] = $username;
        #header("Location: home.php");
        #die();
      }
      else{
          echo "Wrong Password!";
      }

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
