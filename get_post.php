<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/get_post.php -->
<?php
  if(isset($_GET['name'])){
    $name = htmlentities($_GET['name']); //SUPER SOS use the htmlentities to prevent harfull code executed in input tags
    echo $name;
    // print_r($_GET);
  }
  // if(isset($_POST['name'])){
  //   $name = htmlentities($_POST['name']); //SUPER SOS use the htmlentities to prevent harfull code executed in input tags
  //   echo $name;
  //   // print_r($_POST);
  // }
  // if(isset($_REQUEST['name'])){//it can be used with both get and post submit to retrive data
  //   $name = htmlentities($_POST['name']); //SUPER SOS use the htmlentities to prevent harfull code executed in input tags
  //   echo $name;
  //   // print_r($_POST);
  // }
  // echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MB post get php website</title>
  </head>
  <body>
    <!-- <form action="get_post.php" method="GET"> -->
    <form action="get_post.php" method="GET">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label><br>
        <input type="text" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
    <ul>
      <li>
        <a href="get_post.php?name=brad">Brad</a>
      </li>
      <li>
        <a href="get_post.php?name=Steve">Steve</a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
  </body>
</html>
