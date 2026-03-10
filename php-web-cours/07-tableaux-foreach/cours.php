<?php 
$categories = ["Informatique","Audio","Photo"];
$produit = [
    "marque" => "Apple",
    "modele" => "iPhone 15"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux-foreach</title>
</head>
<body>
    <h1>Boucles-foreach</h1>
    <h2>Version classique</h2>
    <?php 
    foreach($categories as $rayon){?>
        <p>Rayon : <?= $rayon ?></p>
    <?php } ?>
    <h2>Version alternative</h2>
    <?php foreach($categories as $rayon): ?>
        <p>Rayon : <?= $rayon ?></p>
    <?php endforeach; ?>

    <!-- affichage produit -->
    <h2>Affichage d'un produit</h2>
    <ul><?php foreach ($produit as $key => $value) :?>
        <li><?= "$key : $value" ?></li>
    <?php endforeach; ?></ul>
</body>
</html>