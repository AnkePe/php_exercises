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
    foreach($items as $item) {
      echo '<li>' . $item . '</li>';
    }
    ?>
    </ul>
  </body>
</html>
