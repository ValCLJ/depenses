<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Dépenses</title>
    <link href="style.css" rel="stylesheet">
    
    <script src="main.js" defer></script>
    <script src="variables.js"defer></script>
    <script src="fontions.js"defer></script>
    <script src="console.log.js"defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <a class="header_links" href="acceuil.php">Acceuil</a>
        <a class="header_links"href="depenses.php"> Mes dépenses</a>
        <a class="header_links"href="simulations.php">Simulations</a>
        <a class="header_links"href="epargnes.php">Epargnes</a>
        <a class="header_links" href="parametres.php">Paramètres</a>
    </header>
   
    <h1>
        Retours (bêta)
    </h1>
    <?php 
    $retour_image = $_POST['retour_image'];
    $retour_texte = $_POST['retour_texte'];
    ?>
</body>