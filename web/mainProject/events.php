<?php
session_start();
#Characters:
$NEPHI = 1;
$LEHI = 2;
$SARIAH = 3;
$LEMUEL = 5;
$LAMAN = 6;
$LABAN = 4;
require 'getCharacterRelation.php';
if ($id == $LABAN){
  if($relationships[$LABAN] < -4){
         $dialouge_id = 9 //Laban is getting Angry
         $query = "select body, id FROM character_dialogue WHERE id = :id";
         $statement = $db->prepare($query);
         $statement->bindValue(":id", $dialouge_id, PDO::PARAM_INT);
         $statement->execute();
         $row = $statement->fetch();
  }

}
?>
