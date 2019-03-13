<?php
$items = array();
$items[0] = 'home';
$items[1] = 'about';
$items[2] = 'contact';
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
