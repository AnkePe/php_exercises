<?php
/*
Create an associative array with the skills you learned during BeCode as key, and the a short description as value:
  HTML - sexy semantically correct HTML5 code
  CSS - Flexbox, Grid, animations, you name it!
  Responsive webdesign - My websites dipslay correct on your device
  Javascript - I can make everything interactive with the latest Javascript 
  NodeJS - My Javascript powers aren't limited to the client side
  PHP - And now I'm adding PHP to my skillset!

Toon in de body tag een tabel met vakken.
Deze tabel heeft 2 kolommen.
In de eerste kolom toon je de afkorting, in de tweede kolom toon je de vaknaam.

Display a table with all your skills in the body tag.
This table has 2 columns: 
First column displays the skill, second column displays the description
*/
$skills = array(
  "HTML" =>  "sexy semantically correct HTML5 code",
  "CSS" =>  "Flexbox, Grid, animations, you name it!",
  "Responsive webdesign" =>  "My websites dipslay correct on your device",
  "Javascript" =>  "I can make everything interactive with the latest Javascript", 
  "NodeJS" =>  "My Javascript powers aren't limited to the client side",
  "PHP" =>  "And now I'm adding PHP to my skillset!"
);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Devine</title>
  </head>
  <body>
    <table>
      <tr>
        <th>programma</th>
        <th>omschrijving</th>
      </tr>
      <?php
      foreach($skills as $index => $skill) {
        echo "<tr>";
        echo "<td> $index </td>";
        echo "<td> $skill </td>";
        echo "</tr>";
      }
      
      ?>
    </table>
  </body>
</html>
