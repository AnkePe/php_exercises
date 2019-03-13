<?php
/*
  in dit formulier worden verschillende types gegevens doorgestuurd
  de $_POST array wordt getoond mbv de functie var_dump

  bekijk de formulier elementen & het resultaat van de var_dump functie
  - wat wordt doorgestuurd bij een select box? (waar in de html vind je de definitie van de WAARDE die doorgestuurd wordt?)
  - wat wordt doorgestuurd bij een radiobutton? (waar in de html vind je de definitie van de WAARDE die doorgestuurd wordt?)
  - wat merk je op bij de checkboxen voor de vakken tov de checkbox algemene voorwaarden?
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <?php
    //je kan perfect een if-structuur onderbreken
    //zolang je maar de haakjes correct afsluit in een volgende php tag
    if (!empty($_POST)) {
    ?>
    <p>Je verstuurde het formulier, dit zijn de ingevulde waarden:</p>
    <dl>
      <dt>naam:</dt>
      <dd><?php
        if (!empty($_POST['naam'])) {
          echo $_POST['naam'];
        } else {
          echo 'Je vulde geen naam in';
        }
      ?></dd>
      <dt>functie:</dt>
      <dd><?php
        if (!empty($_POST['functie'])) {
          echo $_POST['functie'];
        } else {
          echo 'Je vulde geen functie in';
        }
      ?></dd>
      <dt>opleidingsonderdeel:</dt>
      <dd><?php
        if (!empty($_POST['opleidingsonderdeel'])) {
          echo $_POST['opleidingsonderdeel'];
        } else {
          echo 'Je vulde geen opleidingsonderdeel in';
        }
      ?></dd>
      <dt>skills:</dt>
      <dd><?php
        if (!empty($_POST['skills'])) {
          echo '<ul>';
          foreach ($_POST['skills'] as $skill) {
            echo '<li>' . $skill . '</li>';
          }
          echo '</ul>';
        } else {
          echo 'Je vulde geen skill in';
        }
      ?></dd>
      <dt>algemene voorwaarden:</dt>
      <dd><?php
        if (!empty($_POST['algemeneVoorwaarden'])) {
          echo 'Je ging akkoord';
        } else {
          echo 'Je ging niet akkoord';
        }
      ?></dd>
    </dl>
    <?php
    } //dit haakje sluit het haakje van if (!empty($_POST)) { af
    ?>
    <form method="post" action="30-example-form-echo-results.php">
    <fieldset>
        <legend>persoonlijke gegevens</legend>
        <div>
          <input type="text" name="naam" placeholder="vul je naam in" />
        </div>
        <div>
          <select name="functie">
            <option value="">-- maak een keuze --</option>
            <option value="front" selected>ik ben een front-end developer</option>
            <option value="back">ik ben een back-end developer</option>
          </select>
        </div>
        <div>
          <input type="radio" name="opleidingsonderdeel" value="1-vallei" id="rbtDeel1" checked><label for="rbtDeel1">De vallei</label>
          <input type="radio" name="opleidingsonderdeel" value="2-helling"  id="rbtDeel2"><label for="rbtDeel2">De helling</label>
          <input type="radio" name="opleidingsonderdeel" value="3-berg" id="rbtDeel3"><label for="rbtDeel3">De berg</label>
        </div>
      </fieldset>
      <fieldset>
        <legend>Skills</legend>
        <div>
          <input type="checkbox" name="skills[]" value="html" id="chkHtml"><label for="chkHtml">HTML</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="css" id="chkCss"><label for="chkCss">CSS</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="js" id="chkJs"><label for="chkJs">JavaScript</label>
        </div>
        <div>
          <input type="checkbox" name="skills[]" value="php" id="chkPhp"><label for="chkPhp">PHP</label>
        </div>
      </fieldset>
      <div>
        <input type="checkbox" name="algemeneVoorwaarden" value="1" id="algemeneVoorwaarden"><label for="algemeneVoorwaarden">Ik ga akkoord met de algemene voorwaarden</label>
      </div>
      <button type="submit">Versturen</button>
    </form>
  </body>
</html>
