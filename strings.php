<!-- http://localhost/wpdevmate/wpdm-websites/gis.com.dev/wp-content/themes/MB-child/strings.php -->
<?php
  #substr()
  #return a potion of a simplexml_load_string
  $output = substr('Hello',1,3); //The second and third paramenter is the character where the substring starts and ends!
  $output = substr('Hello',-2);// with negative numbers in second parameter you start from the pacj of the word
  echo $output;

  echo "<br><br><br>";

  #strlen()
  #Return the length of a substring

  $output1 = strlen('Hello world');
  echo $output1;

  echo "<br><br><br>";

  #strpos()
  #find the position of the first occurence of a sub substring
  $output2 = strpos('Hello world','o');
  echo $output2;

  echo "<br><br><br>";

  #strrpos()
  #find the position of the last occurence of a sub substring
  $output3 = strrpos('Hello world','o');
  echo $output3;

  echo "<br><br><br>";

  #trim()
  #Strips whitespace
  $text = 'Hello World           ';
  var_dump($text);

  echo "<br><br><br>";

  $strimmed = trim($text);
  var_dump($strimmed);

  echo "<br><br><br>";

  #strtoupper()
  #Makes everything uppercase

  $output4 = strtoupper('Hello Michael');
  echo $output4;

  echo "<br><br><br>";

  #strtolower()
  #Makes everything lowercase

  $output5 = strtolower('Hello Michael');
  echo $output5;

  echo "<br><br><br>";

  #ucwords()
  #Capitalize every word meaning makin gcapital the first letter
  $output5 = ucwords('hello michael');
  echo $output5;

  echo "<br><br><br>";

  #str_replace()
  #Replace all occurences of a search string with a replacement
  $text1 = 'hello michael';
  $output6 = str_replace('World','Everyone',$text);
  echo $output6;

  echo "<br><br><br>";

  #is_string()
  #Check if string
  $val1 = '45';
  $output7 = is_string($val1);
  echo $output7;

  echo "<br><br><br>";

  $values = array(true, false, null, 'abc',33,'33',22.4,'22.4','',' ',0, '0');

  foreach ($values as $value) {
    if(is_string($value)){
      echo "{$value} is a string<br>";
    }
  }
  echo "<br><br><br>";

  #gzcompress()
  #Compress a string

  $string4="2. Just (protector words)

The word “just” diminishes the content that follows this word. It is a “protector” word, a word that softens what you want to achieve. When you say, “I’m just following-up on my below e-mail…,” you are downplaying the importance of your e-mail and why you are reaching out. You are softening your request for a response.

If you are taking the time and energy to follow-up on an unanswered e-mail, it is important. Do not make it look unimportant when it is important to you. This can come across as passive aggressive, which can create resentment and lessen your authority.";

  $compressed = gzcompress($string4);
  echo $compressed;
  echo "<br><br><br>";

  #uncompress
  $original = gzuncompress($compressed);
  echo $original;
  echo "<br><br><br>";








?>
