<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/login-website/indexMB.php -->
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

  </body>
</html>
