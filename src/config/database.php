<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$rootPath = dirname(__DIR__, 2); // Remonte de 2 niveaux

// Charge le fichier .env à la racine du projet
$dotenv = Dotenv\Dotenv::createImmutable($rootPath);
$dotenv->load();

$servername = $_ENV['HOST_MACHINE_SERVER_NAME'];
$dbUsername = $_ENV['MYSQL_QUIZDB_USER'];
$dbPassword = $_ENV['MYSQL_QUIZDB_PASSWORD'];
$dbName = $_ENV['MYSQL_QUIZDB'];


try {
    $connex = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

} catch (\Throwable $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}



// if (!$connex) {
//     die("Connection failed: " . mysqli_connect_error());
// }