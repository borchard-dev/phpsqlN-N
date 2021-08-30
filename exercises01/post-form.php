<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  echo 'Welcome to our website, ' .
    htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
    htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
 ?>
