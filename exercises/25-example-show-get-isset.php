<?php
/*
  Inspect the page without querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php) => Hello, Unknown

  Inspect the page with a different querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php?skill=html) => Hello, Unknown


  Inspect the page with a set querystring parameter
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=BeCode) => Hello, BeCode

  Inspect the page with multiple querystring parameters
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=Devine&skill=html) => Hello, Devine

  Inspect the page with a querystring parameter, but an empty string
  (bvb http://localhost:8888/25-example-show-get-isset.php?name=)   => Hello,

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
      if (isset($_GET['name'])) {   //kijkt hier alleen of ?name aanwezig is in de url
        echo $_GET['name'];         //en geeft dan name weer
      } else {
        echo 'Unknown person';
      }
      // isset determines if a value is set and is not null
    ?>
    </h1></header>
  </body>
</html>
