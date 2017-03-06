<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/login.php -->
<?php
session_start();
include '../dph.php';
$uidMB=$_POST['uid'];
$pwdMB=$_POST['pwd'];

// echo $firstMB."<br>";
// echo $lastMB."<br>";
// echo $uidMB."<br>";
// echo $pwdMB."<br>";

$sql = "SELECT * FROM user WHERE uid='$uidMB' AND pwd='$pwdMB'";

$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
  echo "Your username or password is incorrect!";
} else {
  // echo "You are logged in!";
  $_SESSION['id'] = $row['id'];
}

// header("Location: arrays.php");
header("Location: ../indexMB.php");

?>
