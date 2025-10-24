<?php
require_once(__DIR__ . '/config.php'); // adapter le chemin si nécessaire
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Team jardin</title>

    <!-- CSS -->
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/charte-graphique.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/header/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/header/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/accueil/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/accueil/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/avis/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/main/avis/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/login/style.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/footer/style.css" rel="stylesheet">

</head>
    <body>

        <?php
        require_once(__DIR__ . '/siteWeb/siteVitrine/php/header.php');
        require_once(__DIR__ . '/siteWeb/siteVitrine/php/main_accueil.php');
        require_once(__DIR__ . '/siteWeb/siteVitrine/php/main_avis.php');
        require_once(__DIR__ . '/siteWeb/siteVitrine/php/footer.php');
        ?>

    </body>
</html>
