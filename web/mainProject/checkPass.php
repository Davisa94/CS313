<?php
require 'dbConnect.php';
session_start();
#Get values from post:
$user = htmlspecialchars($_POST['user']);
$pass = $_POST['pass'];
$pass = (string)$pass;

#query for password using given username if its found
function checkPasss($pass, $hashedPass){

}

#TODO:
#0) Use try catch to check if the username is already taken
#1) insert into user_data
#2) get last insert ID
#3) use that id to insert into user_id in user_credentials, plus user_name, plus password
#TODO:
#how it works:
#1) query the db to see if the name exists
#   a)create select statment store in query;
#   b) prepare select statment
#   c)bind values
#   d)execute stmt
#   e)statmnt now has the result
#


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
  $query = "select password FROM user_credentials WHERE user_name = :user_name";

  $statement = $db->prepare($query);
  $statement->bindValue(":user_name", $user, PDO::PARAM_STR);
  $statement->execute();
  $row = $statement->fetch();
  $hashedPass = $row['password'];
  $hashedPass = (string)$hashedPass;
  $right = false;
  echo "\nhashed: " . $hashedPass . "\n";
  echo "\npass: " . $pass . "\n";
  $oghash = password_hash('C', PASSWORD_DEFAULT);
    if(password_verify('C', $oghash)){
      echo "OG Hash Works";
      echo "OG: " . $oghash;
    }
echo "\nRAW PASSWORD VERIFY: " . password_verify($pass, '$2y$10$kx5lDzs8iePqdA/q4flcnOr5fCfPMrrHpxe0VbJC4L1nW3x.eKDGu') . "\n";
  $pwdverify = password_verify($pass, $hashedPass);
  if ($pwdverify)
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
          echo "Info: " . password_get_info($hashedPass);
      }
      if (password_verify('B', '$2y$10$YvY4KO7t/fPZPwesuZyzs.9xdquGYITgHe5thB.8Nim5r1A7hcVRC')){
        echo "it should Work";
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
