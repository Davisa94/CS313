
<form action="submit.php" method="post">
   Name: <input type="text" name="name">
   <br />
   E-mail: <input type="text" name="email">
   <br/>
   Comment:
   <br />
   <textarea name="comment" rows="5" cols="40"></textarea>
   <br />
   Major:
   <?php
   $majors = ["CS" => "Comnputer Science", "WDD" => "Web Design", "CIT" => "Computer Information", "CE" => "Computer Engineering"];
   //$majors = ["CS", "WDD", "CIT", "CE"];
      foreach ($majors as $key => $value) {
         echo "<input type=\"radio\" name=\"major\" value=\"" . $key . "\"/>" . $value;
      }
    ?>
   <br />
   <!-- <input type="radio" name="major" value="CS">Computer Science
   <br />
   <input type="radio" name="major" value="WDD">WDD
   <br />
   <input type="radio" name="major" value="CIT">CIT
   <br />
   <input type="radio" name="major" value="CE">CE
   <br /> -->

   <input type="checkbox" name="NA" value="NA">North America
   <br />
   <input type="checkbox" name="SA" value="SA">South America
   <br />
   <input type="checkbox" name="EU" value="EU">Europe
   <br />
   <input type="checkbox" name="AS" value="AS">Asia
   <br />
   <input type="checkbox" name="AU" value="AU">Australia
   <br />
   <input type="checkbox" name="AF" value="AF">Africa
   <br />
   <input type="checkbox" name="AN" value="AN">Antartica
   <br />
   <br />
   <input type="submit" name="submit" value="submit">

</form>
