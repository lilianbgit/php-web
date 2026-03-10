<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01-Introduction</title>
    <style> p span{ 
        color: blue;
        font-weight: bold;
        font-size: 20px;
        text-decoration: underline;}</style>
</head>
<body>
    <p>Introduction cours PHP-WEB</p>
    <!-- code php  -->
    <?php
        //on est en php 
        echo "<p> Introduction cours PHP-WEB </p>";
        echo "<h2>BTS SIO 1</h2>";
    ?>

    <?= "<p>Introduction cours PHP-WEB</p> "?>
    <!-- Afficher la date du jour au format d/m/y dans une balise <p> -->
        <?= "<p>Nous somme le ".date('D d/m/Y')."</p>" ?>
        <p>Nous somme le <span><?= date('d/m/Y') ?></span></p>
</body>
</html>