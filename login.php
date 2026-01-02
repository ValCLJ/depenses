<?php session_start() ?>
<?php
$users = [
    [
        'email' => 'valentin.cljost@gmail.com',
        'password' => '123',
    ],
    [
        'email' => 'monique.jost.77@gmail.com',
        'password' => '456',
    ],
    [
        'email' => 'cedric.cohen.lemberg@gmail.com',
        'password' => '789',
    ],
    [
        'email' => 'lola.cljost@gmail.com',
        'password' => '222'
    ],
        ] 
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
</body>

<?php
 $login_infos = $_POST;

 //verifier si les infos de connection existent 
 if(isset($login_infos['login_email']) && 
 isset($login_infos['login_password'])) {
    if(!filter_var($login_infos['login_email'], FILTER_VALIDATE_EMAIL)){
?>
<div>
    <h2>Email invalide</h2>
</div>
<div>
    <a href="index.php"><button class="github_button">Réessayer</button></a>
</div>
<?php
    exit;    
    } else {
        foreach ($users as $user){
            if(
                $user['email'] === $login_infos['login_email'] &&
                $user['password'] === $login_infos['login_password']
            ) {
                $_SESSION['logged_user'] = [
                    'email' => $user['email'],
                 'password' => $user['password']
                ];
                header('Location: acceuil.php');
                exit;
            }
        } 
    }
 }
 ?>
<?php if(!isset($logged_user)): ?>
    <h2 class="erreur">Informations incorrectes</h2>
    <div>
    <a href="index.php"><button class="github_button">Réessayer</button></a>
</div>
<?php endif; ?>            
        
