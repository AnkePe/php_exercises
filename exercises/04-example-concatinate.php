<?php
$title = 'BeCode';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
  </head>
  <body>
    <?php
      //met het puntje plak je stukken tekst aan elkaar
      echo '<header><h1>' . $title . '</h1></header>';
    ?>
    <nav>
      <header><h2>Navigation</h2></header>
      <ul>
      <?php
      echo '<li><a href="#">home</a></li>';
      echo '<li><a href="#">about</a></li>';
      echo '<li><a href="#">contact</a></li>';
      ?>
      </ul>
    </nav>
  </body>
</html>
