<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/logout.php -->
<?php
session_start();
session_destroy();
header("Location: indexMB.php");
?>
