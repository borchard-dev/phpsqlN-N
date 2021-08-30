<?php
  $name = $_GET['name'];
  echo '<p>Welcome to our website, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '!';
 ?>
