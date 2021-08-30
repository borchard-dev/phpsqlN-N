<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Variables</title>
  <body>
    <?php
      $var1 = 'PHP';        //assigns a value of 'PHP' to $var1
      $var2 = 5;            //assigns a value of 5 to $var2
      $var3 = $var2 + 1;    //assigns a value of 6 to $var3
      $var4 = rand(1, 12);  //assigns a value to $var4 using the rand() function

      echo $var1;           //outputs 'PHP'
      echo $var2;           //outputs 'php'
      echo $var3;           //outputs '6'
      echo $var4;           //outputs a random number
      echo $var1 . ' rules!'; //outputs 'PHP rules!'
      echo '$var1 rules!';    //outputs '$var1 rules!'
      echo "$var1 rules";     //outputs 'PHP rules!'
    ?>
  </body>
