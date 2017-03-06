<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/functions.php -->
<?php
  #FUNCTION -Block of code that can be repeatedly called
  /*
    Camel case - myFunction()
    Lower case - my_function()
    Pascal case - MyFunction()
  */

  //Create Simple Function
  function simpleFunction(){
    echo 'Hello world<br>';
  }

  //Run Simple Function
  simpleFunction();

  // Function With Parameters
  function sayHello($name  = 'World'){
    echo "Hello $name<br>";
  }

  sayHello('Nik');

  //Return Value
  function addNumber($num1, $num2){
    return $num1 + $num2; // it only returen the values not dispaling them
  }

  echo addNumber(5,6); //need to do somthing with the return values, for exaplme echo
  echo "<br>";

  //By Reference
  $myNum = 10;

  function addFive($num){
    $num +=5;
  }

  function addTen(&$num){ //to pass the external variable in the fucntion for manupulation use "&"
    $num +=10;
  }
  addFive($myNum);
  echo "Value: $myNum<br>";

  addTen($myNum);
  echo "Value: $myNum<br>";


?>
