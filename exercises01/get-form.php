<?php
  $firstName = $_GET['firstName'];
  $lastName = $_GET['lastName'];
  echo 'Welcome to our website ' .
    htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
    htmlspecialchars($lastName, ENT_QUOTES, 'utf-8') . '!';
 ?>
