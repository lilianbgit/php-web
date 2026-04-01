<?php
// tableaux des statuts
$statutOptions = [
    '' => "--Sélectionner un statut--",
    "etudiant" => "Etudiant",
    "enseignant" => "Enseignant",
    "administratif" => "Administratif"
];
// Définir une variable par champs du formulaire
$pseudo = '';
$email = '';
$statut = '';
$erreurs = [];//tableau associatif pour les erreurs
$succes = false;
// Detecter une soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // le formulaire est soumis
    // Récupérer chaque champs
    $pseudo = trim($_POST['pseudo'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $statut = trim($_POST['statut'] ?? '');

    // validation du pseudo
    if ($pseudo === '') {
        // le pseudo n'a pas été saisi
        $erreurs['pseudo'] = "Le pseudo est obligatoire";
    } elseif (mb_strlen($pseudo) < 3) {
        // le pseudo est trop petit
        $erreurs['pseudo'] = "Le pseudo doit comporter 3 caractères";
    }
    // validation de l'email
    if ($email === '') {
        $erreurs['email'] = "L'email est obligatoire";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email'] = "L'email est invalide";
    }
    // validation du statut
    if ($statut===''){
        $erreurs['statut'] = "Le statut est obligatoire";
    }elseif(!array_key_exists($statut,$statutOptions)){
        $erreurs['statut'] = "Le statut selectionné n'est pas valide";
    }
    // traitement des données saisies
    // uniquement dans le cas ou il n'y a aucun erreur de validation
    if (empty($erreurs)) {
        $succes = true;
        // reinitialiser les variables avec la chaine vide
        $pseudo = '';
        $email = '';
        $statut = '';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un profil</title>
    <link rel="stylesheet" href="css/style-base.css">
</head>

<body>

    <div class="card">

        <header class="card-header">
            <h1>Créer un profil</h1>
            <hr>
        </header>
        <!-- message de succes de la soumission et du traitement des données -->
        <?php if ($succes): ?>
            <div class="succes-message">Le profil a été créé avec succès !</div>
        <?php endif; ?>
        <form action="" method="POST" autocomplete="off" novalidate>

            <!-- PSEUDO -->
            <div class="form-group">
                <label for="pseudo">Pseudo <span class="required">*</span> :</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Ex: FL39" value="<?= $pseudo ?>" required
                    minlength="3">
                <!-- afficher l'erreur si il y en a une ! -->
                <?php if (isset($erreurs['pseudo'])): ?>
                    <div class="erreur-message"><?= $erreurs['pseudo'] ?></div>
                <?php endif; ?>
                <div class="hint">3 caractères minimum</div>
            </div>

            <!-- EMAIL -->
            <div class="form-group">
                <label for="email">Email <span class="required">*</span> :</label>
                <input type="email" id="email" name="email" placeholder="votre@email.fr" value="<?= $email ?>" required>
                <?php if(isset($erreurs['email'])): ?>
                    <div class="erreur-message"><?= $erreurs['email'] ?></div>
                <?php endif; ?>
            </div>

            <!-- STATUT -->
            <div class="form-group">
                <label for="statut">Statut <span class="required">*</span> :</label>
                <select id="statut" name="statut" value="<?= $statut ?>" required >
                    <!-- remplissage dynamique des options -->
                    <?php foreach ($statutOptions as $valeur => $libelle): ?>
                        <option value="<?= $valeur ?>" <?= $statut === $valeur ? 'selected' : ''?>>
                            <?= $libelle ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="erreur-message"><?= $erreurs['statut'] ?></div>
            </div>

            <p class="legend">Le caractère <span class="required">*</span> indique un champ obligatoire.</p>

            <button type="submit" class="btn-submit">
                Créer profil
            </button>

        </form>

    </div>

</body>

</html>