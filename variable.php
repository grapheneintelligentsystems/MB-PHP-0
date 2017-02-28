<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/variable.php -->
<h1><?php
//Variable in PHP
// -prefix $
// -start with a letter or an underscore
// -only latters, numbers and underscores
// -case sensitive

$output = 'Hello word!';
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 =' :hello';
$string2 = 'world';
$greeting = $string1 .' '. $string2; //for concatination using .
$greeting2 = "$string1 $string2"; // or use double quotes for concatination

$string3 = ' :They\' re Here'; //use back slash \ to escape the meaning of character in php

$float1 = 4.5;
$bool1 = true;

define('GREETING', ' :Hello Everyone'); //For creating constants first is the consntant and has to be capital

echo $output;
echo $sum;
echo $greeting;
echo $greeting2;
echo $string3;
echo GREETING;
?></h1>
