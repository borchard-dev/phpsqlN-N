<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>diceroll-while</title>
  </head>
  <body>
    <?php
      $roll = 0;
      while ($roll != 6) {
        $roll = rand(1, 6);
        echo '<p>You rolled a ' . $roll . '</p>';
      }

      if ($roll == 6) {
        echo '<p>You win!</p>';
      }
      else {
        echo '<p>Sorry, better luck next time.</p>';
      }
     ?>
  </body>
</html>
