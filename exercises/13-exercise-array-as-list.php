<?php
/*
Create an array with the skills you learned during BeCode:
  HTML
  CSS
  Responsive webdesign
  Javascript
  NodeJS
  PHP

Display a list with these skills in the body tag
*/
$skills = ['HTML', 'CSS', 'Responsive webdesign', 'Javascript', 'NodeJS', 'PHP'];
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
  foreach ($skills as $skill) {
    echo "<li> $skill </li>";
  };
  ?>
  </ul>

  </body>
</html>
