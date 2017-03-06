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

<header>
  <nav>
    <ul>
      <li><a href="indexMB.php">Home</a></li>
      <?php
        if(isset($_SESSION['id'])){
          echo "<form action='inc/logout.inc.php'>
                  <button>LOG OUT</button>
                </form>";
        }else{
          // To change html code in php you need to change the "" to '' and echoed
          echo "<form action='inc/login.inc.php' method='post'>
                  <input type='text' name='uid' placeholder='Username'>
                  <input type='password' name='pwd' placeholder='Password'>
                  <button type='sumbit' name='button'>LOG IN</button>
                </form>";
        }
      ?>
      <li><a href="register.php">REGISTER</a></li>
    </ul>
  </nav>
</header>
