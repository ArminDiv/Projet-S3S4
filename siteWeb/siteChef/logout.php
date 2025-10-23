<?php





session_start();          
require_once(__DIR__ . '/../../config.php'); 
require_once(__DIR__ . '/../../db.php');     
$_SESSION = array();      
session_destroy();        

// Rediriger vers la page de login ou accueil
header("Location: " . BASE_URL ."");
exit();
