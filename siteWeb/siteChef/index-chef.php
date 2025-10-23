<?php

require_once(__DIR__ . '/../../config.php'); 
require_once(__DIR__ . '/../../db.php');     

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Team jardin (Chef d'entreprise)</title>

    <!-- CSS -->
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/header/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteChef/css/landing/position.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/charte-graphique.css" rel="stylesheet">


</head>
    <body>

        <?php
            require_once(__DIR__ . '/php/landing/header.php');
            require_once(__DIR__ . '/php/landing/main.php');
        ?>

    </body>
</html>

