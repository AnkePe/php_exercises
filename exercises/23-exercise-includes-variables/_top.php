<?php
/*
Pas het menu aan zodat:

1. Deze opgebouwd wordt op basis van een associatieve array,
    De key van de array wordt gebruikt voor het href attribuut
    De value wordt gebruikt als tekst voor de link
2. Bekijk het css bestand. Je ziet dat er een css klasse active-menu-item
    gedefinieerd is, die tekst vet zet.
3. Maak in de paginas (home.php, about.php en contact.php) een variabele
    $currentPage aan. Geef deze respectivelijk de waarde home, about of contact.
4. Zorg ervoor dat op basis van deze $currentPage variabele de css klasse
    active-menu-item aan het juiste element gekoppeld wordt.


Adjust the menu:

1. Make it so its built basod on an associative array,
     The key of the array will be the href attribute
     The value will be used as the text for the link
2. Inspect the css file, notice the class active-menu-item
3. Create a $currentPage variable on the page home, about and contact with the name of the current page.
4. Make it so the class active-menu-item is linked to the right element based on the $currentPage variable you created.
*/

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode - <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <header><h1>BeCode</h1></header>
    <nav>
      <header><h2>Menu</h2></header>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>

