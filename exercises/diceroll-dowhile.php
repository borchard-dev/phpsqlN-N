<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Diceroll-Do while</title>
  </head>
  <!-do {
      statement(s) to execute and then repeat if the condtion is true
    } ->
  <body>
    <?php
      do {
        $roll = rand(1, 6);
        echo '<p>You rolled a ' . $roll . '</p>';

        if ($roll == 6) {
          echo '<p>You win!</p>';
        }
        else {
          echo '<p>Sorry, you didn\'t win, better luck next time.</p>';
        }
      }
      while ($roll != 6);
     ?>
  </body>
</html>
