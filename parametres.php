<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>
    <link href="style.css" rel="stylesheet">
    
    <script src="main.js"defer></script>
    <script src="variables.js"defer></script>
    <script src="fontions.js"defer></script>
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
        <a class="header_deconexion" href="index.php">Se déconnecter</a>
    </header>
    </body>
    <h1>
        Mes Paramètres
    </h1>
    <h2>Des bugs ? Partagez le nous !</h2>
    <div>
        <div>
            <form action="retours.php" method="POST" enctype="multipart/form-data">
                <label for="retour">Des screenshots ?</label>
                <input type="file" name="retour_image" id="retour_image">
        </div>
        <div>
                <label for="retour_texte">Un retour ?</label>
                <input type="textarea" name="retour_texte" id="retour texte">
        </div>
        <div>
        <button type="submit" class="github_button" id="submit_retours">Valider</button>
        </div>
            </form>
  >  </div>