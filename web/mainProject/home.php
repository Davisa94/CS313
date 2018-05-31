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

            foreach ($db->query('SELECT id, name FROM character') as $row) {
            		echo '<span style="font-weight: bold;">';
            		echo $row['name'] . '</span>';
            		echo '<br/>';
            }
        ?>
      </div>
   </div>
  </main>
</div>


</body>
</html>
