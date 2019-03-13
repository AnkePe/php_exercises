<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <header><h1>Hello,
    <?php
      if (!empty($_POST['name'])) {
        echo $_POST['name'];
      } else {
        echo 'Unknown person';
      }
    ?>
    </h1></header>
    <form method="post" action="28-example-form-post-same-page.php">
      <input type="text" name="name" placeholder="your name" />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
