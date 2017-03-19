<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/filters.php -->
<?php
  //Check for posted DOMCdataSection
  if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
  }else{
    echo 'No Data';
  }

  echo '<br><br><br>';

  if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    //Remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){//to work correct with sanitize check
    echo 'Email is Valid';
    }else{
      echo 'Email is NOT Valid';
    }
  }
  //Other filters
  #FILTER_VALIDATE_BOOLEAN
  #FILTER_VALIDATE_EMAIL
  #FILTER_VALIDATE_FLOAT
  #FILTER_VALIDATE_INT
  #FILTER_VALIDATE_IP
  #FILTER_VALIDATE_REGEXP
  #FILTER_VALIDATE_URL

  //Other sanitizers
  #FILTER_SANITIZE_EMAIL
  #FILTER_SANITIZE_ENCODED
  #FILTER_SANITIZE_NUMBER_FLOAT
  #FILTER_SANITIZE_NUMBER_INT
  #FILTER_SANITIZE_SPECIAL_CHARS
  #FILTER_SANITIZE_STRING
  #FILTER_SANITIZE_URL

  echo '<br><br><br>';

  $var = 23;

  if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var. ' is a number';
  }else{
    echo $var. ' is NOT a number';
  }

  echo '<br><br><br>';

  $var1 = '3434fasdf98fa8698';
  var_dump(filter_var($var1, FILTER_SANITIZE_NUMBER_INT));

  echo '<br><br><br>';

  $var2 = '<script>alert(1)</script>';
  echo(filter_var($var2, FILTER_SANITIZE_SPECIAL_CHARS));//prevent runing scripts in the input

  echo '<br><br><br>';

  $filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100,
      )
    )
  );

  print_r(filter_input_array(INPUT_POST, $filters));

  echo '<br><br><br>';

  $arr =array(
    "name" => "Michail GIS",
    "age" => "36",
    "email" => "hello@world.io"
  );

  $filters2 = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" =>FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" =>120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );
print_r(filter_var_array($arr, $filters2));
?>
<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> -->
<form action="http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/filters.php" method="post">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>
