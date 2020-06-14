<?php
// Informations d'identification
define('DB_HOST', '192.168.64.2');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'pwroot');
define('DB_NAME', 'harrypotter');
$db_username = 'root';
$db_password = 'pwroot';
$db_name     = 'harrypotter';
$db_host     = '192.168.64.2';
$conn = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

// Connexion à la base de données MySQL
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
