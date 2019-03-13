<?php
/*
  Open this page and  provide a GET parameter in the url
  for example http://localhost:8888/24-example-show-get.php?name=BeCode

  Test some parameters and notice the diference.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <header><h1>Hello, <?php echo $_GET['name'];?></h1></header>
  </body>
</html>
