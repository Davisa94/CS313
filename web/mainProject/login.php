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
         <h2> Login</h2>
      </header>

      <div>
        <form method="POST" action="checkPass.php">
          Username: <input type="text"  name="user"/><br />
          Password: <input type="password" name="pass"/><br />
                    <input type="submit" value="Sign In"/>
        </form>
      </div>
   </div>
  </main>
</div>


</body>
</html>
