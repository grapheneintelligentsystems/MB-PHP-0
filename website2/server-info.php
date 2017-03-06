<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/website2/server-info.php -->
<?php
  # $_SERVER SUPERGLOBAL

  // Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
  ];

  echo '***Server Array*** <br>';
  echo $server['Host Server Name'];
  echo '<br>';
  echo $server['Server Software'];
  echo '<br>';
  print_r($server);
  echo '<br>';

  // Create Client Array
  $client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
  ];

  echo '<br>';
  echo '***Client Array*** <br>';
  print_r($client);
  echo '<br>';
?>
