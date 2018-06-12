<html>
<!--TODO:Change layout to use a list, maybe change button to divs with color and styling with an href, do similiar to talk page  -->

<?php
   require 'head.php';
 ?>

<body>

      <div class="mdl-layout mdl-js-layout">
<?php
   require 'nav.php';
 ?>
  <main class="mdl-layout__content" id="main-jerusalem">
    <div>
      <header>
         <h2> Choose A Character To Start Speaking With </h1>
      </header>

      <div>
        <form method="POST" action="talk_init.php">

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
              $query = "SELECT DISTINCT ON(id) id FROM character_dialogue WHERE id = :id ORDER BY id";
              $start_id = $row['id'];
              $statement = $db->prepare($query);
              $statement->bindValue(":id", $start_id, PDO::PARAM_INT);
              $statement->execute();
              $dialogue = $statement->fetch();
            		echo "<button class = \"mdl-button mdl-js-button
                mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-text title\"
                name = \"character\" type=\"submit\" value=\"". $dialogue['id'] . "\" href=\"talk_init.php\">" .
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
