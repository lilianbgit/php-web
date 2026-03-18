<?php
function appliquerRemise(float $prix, float $remise): float
{
    $remise = $remise / 100;
    $nouveauPrix = $prix * (1 - $remise);
    return $nouveauPrix;
}
$prix = 10;
$remise = 20;
$listePrix = [120.50, 150.00, 99.99];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>appliquerRemise</h2>
    <p>le prix est de <?= $prix ?>€ et la remise de <?= $remise ?>% le nouveau prix est
        <?= appliquerRemise($prix, $remise) ?>€
    </p>
    <h2>liste de prix</h2>
    <p>
    <ul>
        <?php foreach ($listePrix as $prix): ?>
            <li>le nouveauPrix est de <?= appliquerRemise($prix, $remise) ?>€</li>
        <?php endforeach; ?>
    </ul>
    </p>
</body>

</html>