<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset ='utf-8'>
    <title>Diceroll-English-Array</title>
  </head>
  <body>
    <?php
      $english = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six'
      ];
      //writing an array with => is the same as writing
      /*$english = [];
        $english[1] = 'one';
        $english[2] = 'two';
        $english[3] = 'three';
        $english[4] = 'four';
        $english[5] = 'five';
        $english[6] = 'six';*/
      //the first is quicker to type

      echo $english[3]; //prints "three"
      echo $english[5]; //prints "five"

      //a number in an array can be replaced by a variable that contains that same value
      $var1 = 3;
      $var2 = 5;

      echo $english[$var1]; //prints "three'"
      echo $english[$var2]; //prints "five"
      ?>
      <?php
//We can also use "strings" to index arrays
      $birthdays = [
        'Kevin' => '12-04-1978',
        'Stephanie' => '16-05-1980',
        'David' => '09-09-1983'
      ];

      echo '<p>Kevin\'s birthday is ' . $birthdays['Kevin'];
     ?>
  </body>
</html>
