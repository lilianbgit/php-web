<?php 
$montantAchat = 101;
$remise = 0.10;
if ($montantAchat>100) {
    $montantAchat = $montantAchat * (1-$remise);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>le montant a payer est de <?= $montantAchat ?>€</p>
</body>
</html>