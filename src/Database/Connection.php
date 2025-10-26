<?php
use Dotenv\Dotenv;

function getPDO(): PDO {
    require_once __DIR__ . '/../../vendor/autoload.php';

    // Charger les variables d'environnement
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../..');
    $dotenv->load();

    try {
        $pdo = new PDO(
            "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8",
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }
}
