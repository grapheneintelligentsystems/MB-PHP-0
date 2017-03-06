<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/login-website/indexMB.php -->
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My login PHP page</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <form action="inc/login.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username"><br>
      <input type="password" name="pwd" placeholder="Password"><br>
      <button type="sumbit" name="button">LOG IN</button>
    </form>

    <?php
    if(isset($_SESSION['id'])){
      echo $_SESSION['id'];
    }else{
      echo "You are not logged in!";
    }
    ?>

    <br><br><br>

    <form action="inc/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="Firstname"><br>
      <input type="text" name="last" placeholder="Lastname"><br>
      <input type="text" name="uid" placeholder="Username"><br>
      <input type="password" name="pwd" placeholder="Password"><br>
      <button type="sumbit" name="button">SIGN UP</button>
    </form>

    <br><br><br>

    <form action="inc/logout.inc.php">
      <button>LOG OUT</button>
    </form>

  </body>
</html>
