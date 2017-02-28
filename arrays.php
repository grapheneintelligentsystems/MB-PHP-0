<?php
#http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/arrays.php
#Array - varible that holds multiple values
// -Indexed
// -Associative
// -Multi-dimesional

//Indexed
$pepole = array('Kelvin', 'Mike', 'Nik');
$ids = array(23, 55, 12);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy'; //add into the spesified index
$cars[] = 'BMW'; // add to the last on

//echo count($cars);//counts to total number of items in array
//print_r($cars); // dispalys the items of array and theor index
var_dump($cars); // tells all info about array

//echo $pepole[2];
//echo $ids[2];
//echo $cars[0];


#Associative Array (use key and a number)
$pepole2 =array('Brad'=>35, 'Jose'=>32, 'William'=>37);
echo $pepole2['Brad'];// to display value use key
$pepole2['Niki']=39; // for adding at the end an item
//print_r($pepole2);
var_dump($pepole2);

#Multi-Dimetnional
$cars2 = array(
  array('Honda', 20, 100),
  array('Toyota', 30, 20),
  array('Vauxal', 50, 39),
);
echo '<h1>The number of cars is: '.$cars2[2][0].'</h1>';

?>
