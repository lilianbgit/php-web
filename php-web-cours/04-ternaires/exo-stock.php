<?php 
$quantite = 8;
$estCrtique = $quantite < 5 ;
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
    <div >
        Quantité : <?= $quantite?> (<span class="<?= ($estCrtique) ? 'insuffisant' : 'suffisant' ?>">
            <?=  ($estCrtique) ? "Stock critique" : "Stock suffisant" ?></span>)
            <?php if($estCrtique) : ?>
                <p><a class="button" href="#">Commander</a></p>
            <?php endif ; ?>
        </div>
</body>
</html>