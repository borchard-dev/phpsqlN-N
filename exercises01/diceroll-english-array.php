<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Diceroll-English-Array</title>
  </head>
  <body>
    <?php
//initialize array with stored values
    $english = [
      1 => 'one',
      2 => 'two',
      3 => 'three',
      4 => 'four',
      5 => 'five',
      6 => 'six'
    ];
//initialize $roll and set value to rand(1, 6)
    $roll = rand(1, 6);

    echo '<p>You rolled a ' . $english[$roll] . '</p>';
//If you roll a 6, you win
    if($roll == 6) {
      echo '<p>You win!</p>';
    }
//else, you don't
    else {
      echo '<p>Sorry, you didn\'t win, better luck next time.</p>';
    }
     ?>
  </body>
</html>
