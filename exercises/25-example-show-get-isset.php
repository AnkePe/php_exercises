<?php
/*
  Inspect the page without querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php)

  Inspect the page with a different querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php?skill=html)

  Inspect the page with a set querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=BeCode)

  Inspect the page with multiple querystring parameters
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=Devine&skill=html)

  Inspect the page with a querystring parameter, but an empty string
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=)

*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <header><h1>Hello,
    <?php
      if (isset($_GET['name'])) {
        echo $_GET['name'];
      } else {
        echo 'Unknown person';
      }
    ?>
    </h1></header>
  </body>
</html>
