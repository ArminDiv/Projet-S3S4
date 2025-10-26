<?php
require_once(__DIR__ . '/../config/config.php');

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Team jardin</title>

    <!-- CSS -->

    <link href="assets/shared/charte-graphique.css" rel="stylesheet"> 

    <link href="assets/shared/header/position.css" rel="stylesheet">
    <link href="assets/shared/header/style.css" rel="stylesheet">

    <link href="assets/shared/footer/style.css" rel="stylesheet">

    <link href="assets/vitrine/css/accueil/style.css" rel="stylesheet">
    <link href="assets/vitrine/css/accueil/position.css" rel="stylesheet">

    <link href="assets/vitrine/css/avis/style.css" rel="stylesheet">
    <link href="assets/vitrine/css/avis/position.css" rel="stylesheet">

</head>
    <body>

        <?php
        require_once(__DIR__ . '/shared/header.php');
        require_once(__DIR__ . '/vitrine/accueil.php');
        require_once(__DIR__ . '/vitrine/avis.php');
        require_once(__DIR__ . '/shared/footer.php');
        ?>

    </body>
</html>
