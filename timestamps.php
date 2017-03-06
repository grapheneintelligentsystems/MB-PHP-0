<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/timestamps.php -->
<?php
  echo date('d'); //Day
  echo date('m'); //Month
  echo '<br>';
  echo date('Y/m/d');
  echo '<br>';
  echo date('d-m-Y');
  echo '<br>';
  //Set Time Zone
  //date_default_timezone_set('Europe/Copenhagen');
  echo date('h:i:sa');
  echo '<br>';
  $timezoneMB = date_default_timezone_get();
  echo $timezoneMB;

  echo '<br>';
  $timestamp = mktime(23, 58, 00, 11, 9, 1980);
  echo $timestamp;
  echo '<br>';
  echo date('Y/m/d h:i:sa', $timestamp);

  echo '<br>';
  $timestamp2 = strtotime('7:00pm March 03 2017');
  echo $timestamp2;

  echo '<br>';
  echo date('Y/m/d h:i:sa', $timestamp2);
?>
