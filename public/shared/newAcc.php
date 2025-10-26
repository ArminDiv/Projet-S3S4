<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../src/Database/Connection.php'; 
require_once __DIR__ . '/../../src/Models/UserRepository.php'; 

$pdo = getPDO();  
$roles = getRoles($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    $user = CreerUtilisateur($pdo, $username, $password, $role);

    if (!$username || !$password) {
    echo "Veuillez remplir tous les champs.";
    exit;
}
    if ($user) {

        header('Location: ' . BASE_URL . '/public/shared/login.php');
        exit;

    }else{
        echo "Impossible de créer le compte";
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
        <form method="POST" action="">
            <input class="input" type="text" name="username" placeholder="email@univ-lyon1.fr" required>
            <input class="input" type="password" name="password" placeholder="Mot de passe" required>
            <select class="dropdown" name="role" id="role">
                <?php foreach ($roles as $role) : ?>
                    <option value="<?= htmlspecialchars($role) ?>"><?= htmlspecialchars($role) ?></option>
                <?php endforeach; ?>
            </select>

            <button class="btn_connexion" type="submit">Créer le compte</button>

        </form>
    </div>

</body>
</html>