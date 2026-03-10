<?php 
$estConnecte = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if($estConnecte == true) :?>
        <p><a href="#">Deconnexion</a></p>
    <?php else : ?>
        <p><a href="#">Connexion</a></p>
    <?php endif ; ?>
</body>
</html>