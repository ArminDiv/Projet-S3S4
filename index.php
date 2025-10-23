<?php
define('BASE_URL', '/Projet-S3S4'); // définir une seule fois
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Team jardin</title>

    <!-- CSS -->
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/header/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/header/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/accueil/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/accueil/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/avis/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/avis/position.css" rel="stylesheet">
</head>
<body>

<?php
require_once(__DIR__ . '/siteWeb/siteVitrine/php/vitrine/header.php');
require_once(__DIR__ . '/siteWeb/siteVitrine/php/vitrine/main_accueil.php');
require_once(__DIR__ . '/siteWeb/siteVitrine/php/vitrine/main_avis.php');
require_once(__DIR__ . '/siteWeb/siteVitrine/php/vitrine/footer.php');
?>

</body>
</html>
