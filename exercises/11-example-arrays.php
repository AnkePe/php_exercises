<?php
$items = array();
$items[] = 'home';
$items[] = 'about';
$items[] = 'contact';
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
    echo '<pre>';
    print_r($items);
    echo '</pre>';
    ?>
    </ul>
  </body>
</html>
