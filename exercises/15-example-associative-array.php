<?php
$items = array();
$items['home'] = 'Home Page';
$items['about'] = 'About Us';
$items['contact'] = 'Contact';
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
    echo '<li>' . $items['home'] . '</li>';
    echo '<li>' . $items['about'] . '</li>';
    echo '<li>' . $items['contact'] . '</li>';
    ?>
    </ul>
  </body>
</html>
