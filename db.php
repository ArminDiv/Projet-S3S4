<?php
require_once(__DIR__ . '/config.php'); // chemin vers config.php

// Connexion à la base de données
$host = 'localhost';
$db   = 'teamjardin';
$user = 'root';
$pass = ''; // mot de passe par défaut WAMP
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
