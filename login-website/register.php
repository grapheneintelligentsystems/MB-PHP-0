<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/login-website/register.php -->
<?php
  include 'header.php';
?>

    <?php
    if(isset($_SESSION['id'])){
      echo $_SESSION['id'];
    }else{
      echo "You are not logged in!";
    }
    ?>

    <br><br><br>

    <?php
    if(isset($_SESSION['id'])){
      echo "You are already logged in!";
    }else{
      echo "<form action='inc/signup.inc.php' method='POST'>
              <input type='text' name='first' placeholder='Firstname'><br>
              <input type='text' name='last' placeholder='Lastname'><br>
              <input type='text' name='uid' placeholder='Username'><br>
              <input type='password' name='pwd' placeholder='Password'><br>
              <button type='sumbit' name='button'>SIGN UP</button>
            </form>";
    }
    ?>

  </body>
</html>
