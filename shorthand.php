<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/shorthand.php -->
<?php
  $loggedIn = true;
  $arr = [1,2,3,4,5];
  /*
  if ($loggedIn){
    echo 'You are logged in';
  }else {
    echo 'You are NOT logged in';
  }
  */

  //shorthand operation
  echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

  echo '<br><br><br>';

  $isRegistered = ($loggedIn == true) ? true : false;
  echo $isRegistered;

  echo '<br><br><br>';

  $age = 2;
  $score =15;

  //nesting example
  echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));

  echo '<br><br><br>';
?>

<div>
  <?php if($loggedIn) { ?>
    <h1>Welcome User</h1>
  <?php } else { ?>
    <h1>Welcome Guest</h1>
  <?php } ?>
</div>

<div>
  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>

<div>
  <?php foreach($arr as $val): ?>
    <?php echo $val; ?>
  <?php endforeach; ?>
</div>

<div class="#">
  <?php for($i=0;$i<10;$i++): ?>
    <li><?php echo $i; ?></li>
  <?php endfor; ?>
</div>
