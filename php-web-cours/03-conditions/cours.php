<?php
$stock  = 5 ;
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Structure conditionnel if...else</h1>
    <h2>Version classique</h2>
    <?php if($stock > 0){ ?>
        <p>Produit disponible</p>
    <?php }else{ ?>
        <p>Produire en rupture de stock</p>
    <?php } ?>

    <h2>Version alternative</h2>
    <?php if($stock >0 ) : ?>
        <p>Produit disponible</p>
    <?php else : ?>
        <p>Produit en rupture de stock</p>
    <?php endif ; ?>
</body>
</html>