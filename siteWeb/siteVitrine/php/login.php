<?php
require_once(__DIR__ . '/../../../config.php');
require_once(__DIR__ . '/../../../db.php'); // connexion à la base

$erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Préparer la requête
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute([
        'username' => $username,
        'password' => md5($password)
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Stocker l'utilisateur et son rôle dans la session
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];


        // Redirection selon le rôle
        if ($user['role'] === 'admin') {
            
            header('Location: ' . BASE_URL . '/siteWeb/siteChef/index-chef.php');
        } else {
            header('Location: ' . BASE_URL . '/siteWeb/siteClient/index-client.php');
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
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/login/style.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/siteWeb/siteVitrine/css/charte-graphique.css" rel="stylesheet">
</head>
<body class="page-login">
    <div class="form-container">
        <img id="logo_login" src="<?= BASE_URL ?>/siteWeb/img/logoTeamJardin.png" alt="Logo Team Jardin">
        <?php if ($erreur) : ?>
            <div class="erreur"><?= $erreur ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <input class="input" type="text" name="username" placeholder="email@univ-lyon1.fr" required>
            <input class="input" type="password" name="password" placeholder="Mot de passe" required>
            <button class="btn_connexion" type="submit">Connexion</button>

            <a href="pageCreationCompte.html">Nouveau ? Créer un compte !</a>

        </form>
    </div>

</body>
</html>
