<html>
<?php
   require 'head.php';
 ?>

<body>

      <div class="mdl-layout mdl-js-layout">
<?php
   require 'nav.php';
 ?>
  <main class="mdl-layout__content" id="main">
    <div>
      <form>
        Book: <input type = "text" name="book"/> <br />
        Chapter: <input type = "text" name ="chapter" /><br />
        Verse: <input type = "text" name="verse" /><br />
        Content: <textarea name="content"></textarea> <br />
      </form>
    </div>
