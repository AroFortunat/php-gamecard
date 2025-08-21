<?php 
$servername =  getenv('HOST_MACHINE_SERVER_NAME');
$dbUsername = getenv('MYSQL_QUIZDB_USER');
$dbPassword = getenv('MYSQL_QUIZDB_PASSWORD');
$dbName = getenv('MYSQL_QUIZDB');

echo $servername;
?>