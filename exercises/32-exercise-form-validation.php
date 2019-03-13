<?php
/*
  Op één van de velden (naam) zit eenvoudige validatie.
  Kijk om ook validatie toe te voegen op de andere velden (behalve de vakken)
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
    <style>.error { color: red; }</style>
  </head>
  <body>
    <form method="post" action="32-exercise-form-validation.php">
      <fieldset>
        <legend>persoonlijke gegevens</legend>
        <div>
          <input type="text" name="naam" placeholder="vul je naam in" value="<?php
          if (!empty($_POST['naam'])) {
            echo $_POST['naam'];
          }
          ?>" />
          <?php
          if (!empty($_POST) && empty($_POST['naam'])) {
            echo '<span class="error">gelieve een naam in te vullen</span>';
          }
          ?>
        </div>
        <div>
          <select name="functie">
            <option value="">-- maak een keuze --</option>
            <option value="front" <?php
              if (!empty($_POST['functie']) && $_POST['functie'] == 'front') {
                echo 'selected';
              }
            ?>>ik ben een front-end developer</option>
            <option value="back" <?php
              if (!empty($_POST['functie']) && $_POST['functie'] == 'back') {
                echo 'selected';
              }
            ?>>ik ben een back-end developer</option>
          </select>
        </div>
        <div>
          <input type="radio" name="opleidingsonderdeel" value="1-vallei" id="rbtDeel1"<?php
            if (!empty($_POST['opleidingsonderdeel']) && $_POST['opleidingsonderdeel'] == '1-vallei') {
              echo 'checked';
            }
          ?>><label for="rbtDeel1">De vallei</label>
          <input type="radio" name="opleidingsonderdeel" value="2-helling" id="rbtDeel2"<?php
            if (!empty($_POST['opleidingsonderdeel']) && $_POST['opleidingsonderdeel'] == '2-helling') {
              echo 'checked';
            }
          ?>><label for="rbtDeel2">De helling</label>
          <input type="radio" name="opleidingsonderdeel" value="3-berg" id="rbtDeel3"<?php
            if (!empty($_POST['opleidingsonderdeel']) && $_POST['opleidingsonderdeel'] == '3-berg') {
              echo 'checked';
            }
          ?>><label for="rbtDeel3">De berg</label>
        </div>
      </fieldset>
      <fieldset>
        <legend>skills</legend>
        <div>
          <input type="checkbox" name="skills[]" value="html" id="chkHtml" <?php
          if (!empty($_POST['skills']) && in_array('html', $_POST['skills'])) {
            echo 'checked';
          }
          ?>><label for="chkHtml">html</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="css" id="chkCss" <?php
          if (!empty($_POST['skills']) && in_array('css', $_POST['skills'])) {
            echo 'checked';
          }
          ?>><label for="chkCss">css</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="js" id="chkJs" <?php
          if (!empty($_POST['skills']) && in_array('js', $_POST['skills'])) {
            echo 'checked';
          }
          ?>><label for="chkJs">Javascript</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="php" id="chkPhp" <?php
          if (!empty($_POST['skills']) && in_array('php', $_POST['skills'])) {
            echo 'checked';
          }
          ?>><label for="chkPhp">PHP</label>
        </div>
      </fieldset>
      <div>
        <input type="checkbox" name="algemeneVoorwaarden" value="1" id="algemeneVoorwaarden" <?php
          if(!empty($_POST['algemeneVoorwaarden'])) {
            echo 'checked';
          }
        ?>><label for="algemeneVoorwaarden">Ik ga akkoord met de algemene voorwaarden</label>
      </div>
      <button type="submit">Versturen</button>
    </form>
  </body>
</html>
