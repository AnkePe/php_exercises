<?php
$items = array();
$items['home'] = 'Home Page';
$items['about'] = 'About Us';
$items['contact'] = 'Contact';

$currentPage = 'home';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <ul>
    <?php
    foreach ($items as $index => $item) {
      echo '<li>';
      if ($index == $currentPage) {
        echo '<strong>';
      }
      echo $item;
      if ($index == $currentPage) {
        echo '</strong>';
      }
      echo '</li>';
    }
    ?>
    </ul>
  </body>
</html>
