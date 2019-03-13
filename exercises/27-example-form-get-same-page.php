<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <header><h1>Hello,
    <?php
      if (!empty($_GET['name'])) {
        echo $_GET['name'];
      } else {
        echo 'Unknown person';
      }
    ?>
    </h1></header>
    <form method="get" action="27-example-form-get-same-page.php">
      <input type="text" name="name" placeholder="your name" />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
