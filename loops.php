<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/loops.php -->
<?php
#LOOPS -execute code set number of times

// For
// while
// Do..While
// Foreach
for($i =0;$i <= 10;$i++){
  echo $i;
  echo '<br>';
}

$y = 0;
while ($y < 10) {
  # code...
  echo $y;
  echo '<br>';
  $y++;
}

#For each loop for arrays
$people = array('Brad','Jose','William');
foreach ($people as $person) {
  # code...
  echo $person;
  echo '<br>';
}

#For each loop for Associative arrays
$people = array('Brad'=>'bd@gm.com','Jose'=>'jo@gm.com',
'William'=>'wil@gm.com');
foreach ($people as $person => $email) {
  # code...
  echo $person.': '.$email;
  echo '<br>';
}

?>
