<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/signup.php -->
<?php
session_start();
include '../dph.php';
$firstMB=$_POST['first'];
$lastMB=$_POST['last'];
$uidMB=$_POST['uid'];
$pwdMB=$_POST['pwd'];

// echo $firstMB."<br>";
// echo $lastMB."<br>";
// echo $uidMB."<br>";
// echo $pwdMB."<br>";

$sql = "INSERT INTO user (first, last, uid, pwd)
VALUES ('$firstMB', '$lastMB', '$uidMB', '$pwdMB')";

$result = $conn->query($sql);

// header("Location: arrays.php");
header("Location: ../indexMB.php");

?>
