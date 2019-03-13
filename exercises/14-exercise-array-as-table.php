<?php
/*
Create an array with the skills you learned during BeCode:
  HTML
  CSS
  Responsive webdesign
  Javascript
  NodeJS
  PHP

Display the skills & their positiion in the array in the table.
Show the position in the array in the first column, show the skill in the second column.
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
    <table>
      <tr>
        <th>nr</th>
        <th>skill</th>
      </tr>
      <?php
      
      foreach ($skills as $index => $skill) {
        echo "<tr>";
        echo "<td> $index </td>";
        echo "<td> $skill </td>";
        echo "</tr>";
      }
      ?>
    </table>
  </body>
</html>
