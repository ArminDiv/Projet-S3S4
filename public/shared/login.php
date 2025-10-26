<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../src/Database/Connection.php'; 
require_once __DIR__ . '/../../src/Models/UserRepository.php'; 

$pdo = getPDO(); 
$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = login($pdo, $username, $password);

    if ($user) {
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'admin') {
            header('Location: ' . BASE_URL . '/public/chef/landing.php');
        } else {
            header('Location: ' . BASE_URL . '/public/client/landing.php');
        }
        exit;
    } else {
        $erreur = 'Identifiant ou mot de passe incorrect';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login - Team Jardin</title>
    <link href="<?= BASE_URL ?>/public/assets/shared/login/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/public/assets/shared/charte-graphique.css" rel="stylesheet">
</head>
<body class="page-login">
    <div class="form-container">
        <img id="logo_login" src="<?= BASE_URL ?>/public/assets/shared/img/logoTeamJardin.png" alt="Logo Team Jardin">
        <?php if ($erreur) : ?>
            <div class="erreur"><?= $erreur ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <input class="input" type="text" name="username" placeholder="email@univ-lyon1.fr" required>
            <input class="input" type="password" name="password" placeholder="Mot de passe" required>
            <button class="btn_connexion" type="submit">Connexion</button>

            <a href="newAcc.php">Nouveau ? Créer un compte !</a>

        </form>
    </div>

</body>
</html>
