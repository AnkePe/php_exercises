<?php
/*
  In dit voorbeeld tonen we hoe je een boodschap kan tonen boven het formulier, wanneer er een veld niet valid is.
  Wanneer het formulier volledig ingevuld is, dan tonen we een bedankt boodschap

  In een volgend voorbeeld zien we hoe we dit beter kunnen aanpakken
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
    <?php
    $showForm = true;
    if (!empty($_POST)) {
      if (empty($_POST['naam']) || empty($_POST['functie']) || empty($_POST['opleidingsonderdeel']) || empty($_POST['algemeneVoorwaarden'])) {
        echo '<div class="error">Gelieve de verplichte velden in te vullen</div>';
      } else {
        $showForm = false;
      }
    }
    if ($showForm) {
    ?>
    <form method="post" action="33-example-form-general-validation-inline.php">
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
          <?php
          if (!empty($_POST) && empty($_POST['functie'])) {
            echo '<span class="error">gelieve een functie te selecteren</span>';
          }
          ?>
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
          <?php
          if (!empty($_POST) && empty($_POST['opleidingsonderdeel'])) {
            echo '<span class="error">gelieve een opleidingsonderdeel te selecteren</span>';
          }
          ?>
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
        <?php
        if (!empty($_POST) && empty($_POST['algemeneVoorwaarden'])) {
          echo '<span class="error">gelieve akkoord te gaan met de algemene voorwaarden/span>';
        }
        ?>
      </div>
      <button type="submit">Versturen</button>
    </form>
    <?php
    } else {
      echo '<p>Bedankt voor jouw input!</p>';
    }
    ?>
  </body>
</html>
