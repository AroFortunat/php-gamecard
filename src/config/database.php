<?php 

require('../../vendor/autoload.php');

$rootPath = dirname(__DIR__, 2); // Remonte de 2 niveaux

// Charge le fichier .env à la racine du projet
$dotenv = Dotenv\Dotenv::createImmutable($rootPath);
$dotenv->load();

$servername =  $_ENV['HOST_MACHINE_SERVER_NAME'];
$dbUsername = $_ENV['MYSQL_QUIZDB_USER'];
$dbPassword = $_ENV['MYSQL_QUIZDB_PASSWORD'];
$dbName = $_ENV['MYSQL_QUIZDB'];

$connex = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if (!$connex) {
    die("Connection failed: " . mysqli_connect_error());
}

?>