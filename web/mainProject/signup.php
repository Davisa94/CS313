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
          Username: <input type="text"  name="user"/><br />
          Password: <input type="password" name="pass"/>
                    <input type="submit" value="Sign up"/>
        </form>
      </div>
   </div>
  </main>
</div>


</body>
</html>
