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
 <h1>
        Connexion
    </h1>
    <?php echo $_SESSION['logged_user']['email']; ?>
    <div class="formulaire">
        <div class="form">
        <form action="login.php" method="post">
            <label for="email"> Votre email: </label><br>
            <input class="form_input" type="email" name="login_email" placeholder="Email"></textarea>
        </div>
        <div class="form">
            <label for="Mot de passe"> Votre mot de passe:</label><br>
            <input class="form_input" type="password" placeholder="Mot de passe" name="login_password"></textarea>
        </div>
        <div>
            <button type="submit" class="github_button" id="login_button">Valider</button>
        </div>
</form>
    </div>

</body>
