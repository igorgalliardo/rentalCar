<?php
//here we are defining the timezone and also the details for connection like DBname, server, user and pass
//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

$host = 'localhost';
$db = 'rentalcar';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE               =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>false,
];
?>