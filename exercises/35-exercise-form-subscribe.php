<?php
/*
Maak een inschrijvingsformulier voor Becode:
  - voorzie de nodige validatie op de verplichte velden
  - zorg dat de formuliervelden onthouden worden
  - toon een boodschap "bedankt voor je inschrijving" bij het volledig invullen van het formulier
  - toon een samenvatting van de ingevulde gegevens onder de "bedankt" boodschap

Velden:

Voornaam (tekstveld, verplicht)
Familienaam (tekstveld, verplicht)
Email (tekstveld, verplicht)
Adres = straat en nr (tekstveld, verplicht)
Postcode (tekstveld, verplicht)
Gemeente (tekstveld, verplicht)
Algemene voorwaarden (checkbox, verplicht)

  - bonus: bouw de selectie voor de opleiding op basis van een array met studenten

*/
$invoervelden = ['voornaam', 'achternaam', 'email', 'adres', 'postcode', 'gemeente'];
$errors = array(); //lege array
//als het formulier niet leeg is
if (!empty($_POST)) {
  //als het veld leeg is
  foreach($invoervelden as $veld) {
    if (empty($_POST[$veld])) {       //opgepast: geen''rond $veld achter de $_POST!!! dan heb je string ipv de variabele
      $errors[$veld] = 'Gelieve dit veld in te vullen';
    }
  }
  //als de alg vwdn niet aangevinkt zijn
  if (empty($_POST['algvwdn'])) {
    $errors['algvwdn'] = 'Gelieve akkoord te gaan met de algemene voorwaarden';
  }
};
//POST array controleren en errors array controleren

// var_dump($_POST);
// echo '<br>';
// var_dump($errors);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Devine</title>
    <!-- css voor de foutmeldingen -->
    <style>.error { color: red; }</style>
  </head>
  <body>
  <header>
  <h2>BeCode inschrijving</h2>
  </header>
  <?php
  // als het formulier niet leeg is en er zijn velden niet ingevuld dan
  if (!empty($_POST) && !empty($errors)) {
    echo "<div class='error'>Gelieve alle velden in te vullen</div>";
  }
  //zolang het formulier niet verzonden is of er fouten zijn dan laten we het formulier zien
  if (empty($_POST) || !empty($errors)) {
  ?>
  <!-- straks ftie terug sluiten in php -->
  
  <form action="35-exercise-form-subscribe.php" method="post">
  <fieldset>
  <legend>vul het formulier in</legend>
  <?php
  // lus voor het aanmaken van de velden
  foreach ($invoervelden as $veld) {
    ?>
    <div>
    <label for='<?php echo $veld?>'><?php echo $veld?>:</label><br>
    <input type='text' name='<?php echo $veld?>' id='<?php echo $veld?>' <?php
      if (!empty($_POST[$veld])) {
        echo "value = {$_POST[$veld]}";   //ik heb de hele value binnen php in de if gezet anders ging het niet
      }?>
      >
      <?php
      // als er een error is voor dit veld dan
      if (!empty($errors[$veld])) {
        echo "<span class='error'> {$errors[$veld]} </span>";
      };
      ?>
    </div>
  <?php
  }
  ?>  
  </fieldset>
  <!-- algemene voorwaarden -->
  <br>
  <div>
    <input type="checkbox" name="algvwdn" value="1" id="algvwdn" <?php
    if(!empty($_POST['algvwdn'])) {
      echo 'checked';      
    };
    ?>>
    <label for="algvwdn">Ik ga akkoord met de algemene voorwaarden</label>
    
    <?php //als niet aangevinkt dan
    if (!empty($errors['algvwdn'])) {
      echo "<span class='error'> {$errors['algvwdn']} </span>";
    }
    ?>
  </div>
  <!-- submit button -->
  <br>
  <div>    
    <button type="submit">Verzenden</button>
  </div>
  </form>
  <!-- ftie terug sluiten in php -->
  <?php
  } else {
  //als het formulier deftig verzonden is, laten we zien wat er ingevuld werd
  echo '<p> Bedankt voor je inschrijving! </p>';
  echo '<p> Hieronder vind je een overzicht van je gegevens:</p>';
  echo '<table>';
  foreach ($invoervelden as $veld) {
    echo "<tr> <td> $veld :</td> <td> {$_POST[$veld]} </td> </tr>";   //opgepast: geen''rond $veld achter de $_POST!!! dan heb je lege string ipv de variabele
  }
  echo '</table>';
  }
  ?>

  </body>
</html>
