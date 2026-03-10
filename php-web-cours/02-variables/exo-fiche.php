<?php
$nomProduit = "iPhone 15";
$categorie = "téléphone";
$prixHT = 1199.9;
$tva = 0.20;
$prixTTC = $prixHT * (1+$tva);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-fiche</title>
</head>
<body>
    <h1>Affichage du produit</h1>
    <h2><?= $nomProduit ?></h2>
    <p>Categorie : <?= $categorie ?></p>
    <p>Le Prix : <strong><?= $prixTTC ?>€ </strong>
    </p>
</body>
</html>