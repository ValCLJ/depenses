<?php require_once(__DIR__ . '/dir/_session.php'); ?>
<?php 
//connection BDD mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";   // IP publique du serveur MySQL
$user = "valentin";        // utilisateur MySQL
$pass = "root";            // mot de passe MySQL
$db   = "vxlog";         // nom de la base
//$port = 60000;              // port MySQL

$mysqli = new mysqli($host, $user, $pass, $db) or die("Erreur de connexion  ");
$mysqli->set_charset("utf8mb4");

if (empty( $_POST["email"]) || empty( $_POST["password"])) {

    header('Location: login.php');
    die();
}
//recuperation de la table users 
$sql_users = "SELECT COUNT(*) as num FROM users WHERE email ='". $_POST["email"]."' and password='".$_POST["password"]."' ";
$users_statement = $mysqli->prepare($sql_users);
$users_statement->execute();
$result = $users_statement->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);


if ($users[0]["num"] == 0){
    header('Location: login.php');
    die();
}else{
    //recuperation des donées de l'utilisateur connecté
$sql_user = "SELECT `name`, email, id FROM users WHERE email ='". $_POST["email"]."' and password='".$_POST["password"]."' ";
$user_statement = $mysqli->prepare($sql_user);
$user_statement->execute();
$user_result = $user_statement->get_result();
$user = $user_result->fetch_all(MYSQLI_ASSOC);

//mise en session des infos de l'utilisateur connécté
$_SESSION['user_name'] = $user[0]['name'];
$_SESSION['user_email'] = $user[0]["email"];
$_SESSION['user_id'] = $user[0]['id'];

//redirection vers index.php et arrêt du script
header('Location: index.php');
die();
}

?>