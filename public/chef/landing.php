<?php

require_once(__DIR__ . '/../../config/config.php'); 
require_once(__DIR__ . '/../../config/db.php');     

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Team jardin (Chef d'entreprise)</title>

    <!-- CSS -->
    <link href="<?= BASE_URL ?>/public/assets/chef/css/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/public/assets/shared/header/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/public/assets/shared/header/position.css" rel="stylesheet">

    <link href="<?= BASE_URL ?>/public/assets/shared/charte-graphique.css" rel="stylesheet">


</head>
    <body>

        <?php
            $nav = ["Tableau de bord", "Facturation", "Planning"];
            $bouton = "Déconnexion";
            $redirection = BASE_URL . "/public/index.php";


            require_once (__DIR__ . '/../shared/header.php');
            require_once(__DIR__ . '/dashboard/main.php');
        ?>

    </body>
</html>

