<?php
session_start();

// Simuler la table utilisateur
$utilisateurs = [
    [
        "login" => "alice@test.fr",
        "password" => "azerty123",
        "prenom" => "Alice",
        "nom" => "Dupont"
    ],
    [
        "login" => "bob@test.fr",
        "password" => "secret456",
        "prenom" => "Bob",
        "nom" => "Martin"
    ]
];
// Gérer la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    echo "soumission";
    $login = trim($_POST['login'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // rechercher dans le tableau si un utilisateur existe
    $utilisateurTrouver = null;
    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur['login'] === $login && $utilisateur['password'] === $password) {
            $utilisateurTrouver = $utilisateur;
            break;
        }
    }

    // on test si l'utilisateur a été trouvé
    if ($utilisateurTrouver !== null) {
        // informer php que je suis connecté
        $_SESSION['utilisateur'] = [
            "login" => $utilisateurTrouver['login'],
            "prenom" => $utilisateurTrouver['prenom'],
            "nom" => $utilisateurTrouver['password']
        ];

        // on ne reste jamais sur la page du formulaire lorsque celui-ci a été soumis
        // on redirige l'utilisateur vers une autre Page
        header("Location: index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post">
        <div>
            <label for="login">login</label>
            <input type="text" id="login" name="login">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password">
        </div>
        <button type="submit">Se connecter</button>
    </form>
</body>

</html>