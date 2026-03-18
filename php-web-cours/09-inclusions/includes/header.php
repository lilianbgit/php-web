<?php 
$prenom = "lilian";
$nom = "baud";
$estConnecte = true; 
require_once __DIR__.'/


../lib/fonction.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titrePage ?></title>
</head>

<body>
    <header>Mon super header
        <nav>
            <ul>
                <li>
                    <a href="cours.php">cours</a>
                </li>
                <li>
                    <a href="contact.php">contact</a>
                </li>
            </ul>
        </nav>
    <?php if($estConnecte):?>
        <p><?= getMessageConnextion($prenom,$nom) ?></p>
        <?php endif;?>
    </header>