<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Diceroll-English-If-TwoDice</title>
  </head>
  <body>
    <?php
//long way
      $roll1 = rand(1, 6);
      $roll2 = rand(1, 6);
//roll1
      if($roll1 == 1) {
        $english1 = 'one';
      }
      else if($roll1 == 2) {
        $english1 = 'two';
      }
      else if($roll1 == 3) {
        $english1 = 'three';
      }
      else if($roll1 == 4) {
        $english1 = 'four';
      }
      else if($roll1 == 5) {
        $english1 = 'five';
      }
      else if($roll1 == 6) {
        $english1 = 'six';
      }
//roll2
      if($roll2 == 1) {
        $english2 = 'one';
      }
      else if($roll2 == 2) {
        $english2 = 'two';
      }
      else if($roll2 == 3) {
        $english2 = 'three';
      }
      else if($roll2 == 4) {
        $english2 = 'four';
      }
      else if($roll2 == 5) {
        $english2 = 'five';
      }
      else if($roll2 == 6) {
        $english2 = 'five';
      }

      echo '<p>You rolled a ' . $english1 . ' and a ' . $english2 . '</p>';
     ?>

     <?php
//short way
      $english = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six'
      ];
      $roll1 = rand(1, 6);
      $roll2 = rand(1, 6);

      echo '<p>You rolled a ' . $english[$roll2] . ' and a ' . $english[$roll2] . '</p>';
//they both do the same thing, but the first takes waaaay longer to type
      ?>

  </body>
</html>
