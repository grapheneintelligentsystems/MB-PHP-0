<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/website3/index.php -->
<!-- To run correct and send the email you need to run it in a server which has email server setup like godaddy in local it will not run becaus not email server -->
<?php
  //Messadge variables
  $msg = '';
  $msgClass= '';

  //Check for Submit
  if(filter_has_var(INPUT_POST, 'submit')){
    //Get form Data in variables
    // echo 'Submitted';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Check required Fields
    if(!empty($name) && !empty($email) && !empty($message)){
      //Passed
      //Check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
        //Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        //Passed
        // echo 'PASSED';
        //Recipient Email
        $toEmail = 'hello@yahoo.com';
        $subject = 'Contact Request From' .$name;
        $body ='
        <h2>Contact Request</h2>
        <h4>Name</h4><p>'.$name.'</p>
        <h4>Email</h4><p>'.$email.'</p>
        <h4>Message</h4><p>'.$message.'</p>
        ';

        //Email Headers .= appedes text to variable somthing like +=
        $header = "MIME-Version: 1.0"."\r\n";
        $header .="Content-Type:text/html;charset=UTF-8"."\r\n";

        //Additional Headers
        $header .="From: " .$name. "<".$email.">"."\r\n";
        if(mail($toEmail, $subject, $body, $header)){
          //Email Sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        }else{
          //Failed
          $msg = 'Your email not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      //Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">MB My Website3</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
      <?php endif; ?>
      <!-- <form method="post" action="index.php"> -->
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control"
          value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control"
          value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea name="message" class="form-control">
            <?php echo isset($_POST['message']) ? $message : ''; ?>
          </textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </body>
</html>
