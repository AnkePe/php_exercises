<?php
/*
Expand this exercise:
1. Create a variable with the name page, give this variable the value home
2. Use this variable in the title tag:
   This should now show Becode - Home
3. The section beneath the header still needs a header.
   Show the page variable in this header
*/
$title = 'BeCode';
$page = 'Home';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title . ' - ' . $page ;?></title>
  </head>
  <body>
    <?php
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
    <section>
      <?php echo "<header><h2>$page</h2></header>";
      ?>
      <p>Our mission : Enabling tomorrow's digital talents to blossom.</p>
      <p>We believe that education makes anything possible.</p>
      <p>Since 2017, BeCode has been offering free training courses for jobseekers to become web developers in partnership with Simplon.</p>
    </section>
  </body>
</html>
