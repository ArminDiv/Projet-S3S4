<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../Database/db.php'; 
require_once __DIR__ . '/../Database/userRepository.php'; 

class DashboardController {
    
    public function handleRequest() {
        $nav = ["Tableau de bord", "Facturation", "Planning"];
        $bouton = "Déconnexion";
        $redirection = BASE_URL . "/public/index.php?page=logout";

        require_once __DIR__ . '/../Views/shared/header.php';
        require __DIR__ . '/../Views/chef/dashboard/dashboard.php';
    }
}
