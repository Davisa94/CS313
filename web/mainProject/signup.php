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
        <form method="POST" action="addUser.php">
          Username: <input type="text"  /><br />
          Password: <input type="password" />
        </form>
      </div>
   </div>
  </main>
</div>


</body>
</html>
