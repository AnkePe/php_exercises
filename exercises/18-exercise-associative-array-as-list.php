<?php
/*
Create an associative array with the skills you learned during BeCode as key, and the a short description as value:
  HTML -  sexy semantically correct HTML5 code
  CSS -  Flexbox, Grid, animations, you name it!
  Responsive webdesign -  My websites dipslay correct on your device
  Javascript -  I can make everything interactive with the latest Javascript 
  NodeJS -  My Javascript powers aren't limited to the client side
  PHP -  And now I'm adding PHP to my skillset!

Display a list of your skills + description in the body tag.
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
    <title>BeCode</title>
  </head>
  <body>
  <?php
  foreach($skills as $index => $skill) {
    echo "<li> $index - $skill </li>";
  };

  ?>
  </body>
</html>
