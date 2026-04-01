<?php
$statuts = ["Etudiant", "Enseignant", "Administratif"]
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="page">
        <div class="content">
            <h1 class="titre">Créer un profil</h1>
            <form action="" method="post">



                <div class="selectionner">
                    <label for="pseudo">Pseudo <span class="rouge">*</span> :</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Ex: FL39" minlength="3" required class="champs">
                    <p class="">3 caractères minimum</p>
                </div>
                <div class="selectionner">
                    <label for="email">Email <span class="rouge">*</span> :</label>
                    <input type="email" name="email" id="email" placeholder="votre@email.fr" required class="champs">
                </div>
                <div class="selectionner">
                    <label for="statut">Statut <span class="rouge">*</span> :</label>
                    <select name="statut" id="statut" class="champs">
                        <option value="">--Sélectionnez un statut--</option>
                        <?php foreach ($statuts as $statut): ?>
                            <option value="<?= $statut ?>"><?= $statut ?></option>
                        <?php endforeach; ?>
                    </select>


                    <p class="italic">Le caractère <span class="rouge">*</span> indique un champ obligatoire</p>
                </div>
                <button type="submit">
                    Créer un profil
                </button>
        </div>
    </div>
    </form>
</body>

</html>