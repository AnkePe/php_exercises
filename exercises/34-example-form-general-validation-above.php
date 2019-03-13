<?php
/*
  In dit voorbeeld tonen we hoe je mbv een associatieve array efficienter kan valideren

  We controleren de velden nog voor we de html renderen
  We checken of we het formulier moeten tonen:
    is het formulier nog niet verstuurd?
    of
    zijn er fouten?
  In het formulier tonen we de fouten uit de $errors array op de juiste plaats
*/

$errors = array();
if (!empty($_POST)) {
  if (empty($_POST['naam'])) {
    $errors['naam'] = 'Gelieve je naam in te vullen';
  }
  if (empty($_POST['functie'])) {
    $errors['functie'] = 'Gelieve je functie aan te duiden';
  }
  if (empty($_POST['opleidingsonderdeel'])) {
    $errors['jaar'] = 'Gelieve je opleidingsonderdeel aan te duiden';
  }
  if (empty($_POST['algemeneVoorwaarden'])) {
    $errors['algemeneVoorwaarden'] = 'Gelieve akkoord te gaan met de algemene voorwaarden';
  }
}
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
    //zijn er fouten bij het versturen?
    if (!empty($_POST) && !empty($errors)) {
      echo '<div class="error">Gelieve de verplichte velden in te vullen</div>';
    }
    /*
    We checken of we het formulier moeten tonen:
      is het formulier nog niet verstuurd?
      of
      zijn er fouten?
    */
    if (empty($_POST) || !empty($errors)) {
    ?>
    <form method="post" action="34-example-form-general-validation-above.php">
      <fieldset>
        <legend>persoonlijke gegevens</legend>
        <div>
          <input type="text" name="naam" placeholder="vul je naam in" value="<?php
          if (!empty($_POST['naam'])) {
            echo $_POST['naam'];
          }
          ?>" />
          <?php
          // is er een error voor dit veld?
          if (!empty($errors['naam'])) {
            echo '<span class="error">' . $errors['naam'] . '</span>';
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
          // is er een error voor dit veld?
          if (!empty($errors['functie'])) {
            echo '<span class="error">' . $errors['functie'] . '</span>';
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
          if (!empty($errors['opleidingsonderdeel'])) {
            echo '<span class="error">' . $errors['opleidingsonderdeel'] . '</span>';
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
        if (!empty($errors['algemeneVoorwaarden'])) {
          echo '<span class="error">' . $errors['algemeneVoorwaarden'] . '</span>';
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
