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
    // hieronder geef je elk key-value paar op ipv gewoon elk element uit de array
    foreach($items as $index => $item) {
      //echo '<li>' . $index . ' - ' . $item . '</li>';
      echo "<li> $index - $item </li>";
    }
    ?>
    </ul>
  </body>
</html>
