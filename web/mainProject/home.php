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
      <header>
         <h2> Choose A Character To Start Speaking With </h1>
      </header>

      <div>
        <form method="POST" action="talk.php">

        <?php
            $dbUrl = getenv('DATABASE_URL');
            $dbopts = parse_url($dbUrl);
            $dbHost = $dbopts["host"];
            $dbPort = $dbopts["port"];
            $dbUser = $dbopts["user"];
            $dbPassword = $dbopts["pass"];
            $dbName = ltrim($dbopts["path"],'/');
            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            foreach ($db->query('SELECT id, name FROM "character"') as $row) {
            		echo "<button class = \"mdl-button mdl-js-button
                mdl-button--raised mdl-js-ripple-effect mdl-button--accent\"
                name = \"character\" type=\"submit\" value=\"". $row['id'] . "\" href=\"talk.php\">" .
                $row['name'] . "</button>";
            }
        ?>
        </form>
      </div>
   </div>
  </main>
</div>


</body>
</html>