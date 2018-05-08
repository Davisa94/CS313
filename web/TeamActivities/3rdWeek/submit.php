<?php
// define variables and set to empty values
$name = $email = $major = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  $major = test_input($_POST["major"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



echo $name . "<br />";
echo "<a href='mailto:" . $email . "'>" . $email ."</a> <br />";
echo $major . "<br />";
echo $comment;
?>
