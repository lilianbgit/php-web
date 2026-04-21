<?php 
// démarrer une session
session_start();
// Utilisation de la superglobal $_SESSION 
// Pour manipuler le contenu de la session
print_r($_SESSION);

// Ajouter une info dans la session
$_SESSION['prenom']="Lilian";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script 1</title>
</head>
<body>
    <h1>Script 1</h1>
</body>
</html>