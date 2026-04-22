<?php
session_start();
// verifier que l'utilisateur est connecter
// S'il ne l'est pas on le redirige vers la page connexion

if (!isset($_SESSION['utilisateur'])) {
    header("Location: connexion.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
</head>

<body>
    <h1>Mon profil</h1>
    <p>vous êtes connecté avec le compte</p>
    <ul>
        <li>Login : <?= $_SESSION['utilisateur']['login'] ?></li>
        <li>Prenom : <?= $_SESSION['utilisateur']['prenom'] ?></li>
        <li>Nom : <?= $_SESSION['utilisateur']['nom'] ?></li>
    </ul>
    <p><a href="index.php">retour a l'accueil</a></p>
</body>

</html>