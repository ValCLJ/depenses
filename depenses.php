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
        <a class="header_deconexion" href="index.php">Se déconnecter</a>
    </header>
    <h1>
        Mes Dépenses
    </h1>
    <div id="depenses_persistantes">
       <div class="tout_input_depenses_persistantes"> <p>Salaire: </p> <input class="input_depenses_persistantes" id="input_salaire"type="text" placeholder="Salaire Mensuel"></div>
       <div class="tout_input_depenses_persistantes"> <p>Prélevé: </p> <input  class="input_depenses_persistantes"id="input_preleve" type="text" placeholder="Argent prélevé mensuellement"><div class="tout_input_depenses_persistantes"></div>
        <div class="tout_input_depenses_persistantes"><p>Epargnes: </p> <p id="argent_mensuel_cagnotte"> </p></div>
        </div> <br>
    <!-- Boutton --> 
<button class="button" id="button_go">
  <div class="bgContainer">
    <span>Go!</span>
    <span>Go!</span>
  </div>
  <div class="arrowContainer">
    <svg
      width="25"
      height="25"
      viewBox="0 0 45 38"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M43.7678 20.7678C44.7441 19.7915 44.7441 18.2085 43.7678 17.2322L27.8579 1.32233C26.8816 0.34602 25.2986 0.34602 24.3223 1.32233C23.346 2.29864 23.346 3.88155 24.3223 4.85786L38.4645 19L24.3223 33.1421C23.346 34.1184 23.346 35.7014 24.3223 36.6777C25.2986 37.654 26.8816 37.654 27.8579 36.6777L43.7678 20.7678ZM0 21.5L42 21.5V16.5L0 16.5L0 21.5Z"
        fill="black"
      ></path>
    </svg>
</button>
</div>  
<!--Fin du boutton-->
  <div id="div_depenses">
        <div id="d_depense">
            <p class="d_paragraphes">Argent Dépensé :</p>
            <p id="d_argent_depense"></p>
        </div>
        <div id="d_restant">
            <p class="d_paragraphes" >Argent Réstant :</p>
            <p id="d_argent_restant"></p>
        </div>
        <div id="d_depense_1" class="d_depenses">
            <p id="d_titre_depense_1" class="d_paragraphes">Alimentaire</p>
            <p id="montant_depense_1"></p>
            <!-- From Uiverse.io by OnCloud125252 --> 
<a href="popup_depense_1.php">             
<div tabindex="0" class="plusButton_1">
  <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
    <g mask="url(#mask0_21_345)">
      <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
    </g>
  </svg>
</div>
</a>
        </div>
        <div id="d_depense_2" class="d_depenses">
            <p id="d_titre_depense_2" class="d_paragraphes">Santé</p>
            <p id="montant_depense_2"></p>
            <!-- From Uiverse.io by OnCloud125252 --> 
<a href="popup_depense_2.php">            
<div tabindex="0" class="plusButton_2">
  <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
    <g mask="url(#mask0_21_345)">
      <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
    </g>
  </svg>
</div>
</a>
        </div>
        <div id="d_depense_3" class="d_depenses">
            <p id="d_titre_depense_3" class="d_paragraphes">Divertissement</p>
            <p id="montant_depense_3"></p>
            <!-- From Uiverse.io by OnCloud125252 --> 
<a href="popup_depense_1.php">
<div tabindex="0" class="plusButton_3">
  <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
    <g mask="url(#mask0_21_345)">
      <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
    </g>
  </svg>
</div>
</a>
        </div>
        </div>
        <div>
          <button id="button_console_log">
            Console.log
          </button>
        </div>
 </body>