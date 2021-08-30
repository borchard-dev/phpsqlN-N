<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Diceroll</title>
  </head>
<!-if (condition){
    conditional code to be executed if condition is true
  } ->
  <body>
    <?php
      $roll1 = rand(1, 6);
      $roll2 = rand(1, 6);
      echo '<p>you rolled a ' . $roll1 . ' and a ' . $roll2 . '.</p>';
      //adding <p> elements around your text much it more user friendly

      if($roll1 == 6 && $roll2 == 6) {
        echo '<p>You win!</p>';    //This line will ony be printed if the roll a 6
      }
      else {
        echo '<p>Sorry, you didn\'t win. Better luck next time.</p>';
      }
      echo '<p>Thanks for playing!</p>';
     ?>
  </body>
</html>
