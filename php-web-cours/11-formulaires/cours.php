<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires</title>
</head>

<body>
    <h1>formulaires</h1>

    <form action="traitement.php" method="post">
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
        </div>
        <div>
            <label for="password">MDP : </label>
            <input type="password" id="password" name="password" placeholder="MDP">
        </div>
        <div>
            <label for="email">email : </label>
            <input type="email" id="email" name="email" placeholder="email">
        </div>
        <h2>Liste déroulante</h2>
        <select name="pays" id="pays">
            <option value="">Saisir un pays</option>
            <option value="Fr">France</option>
            <option value="Be">Belgique</option>
            <option value="Sw">Suisse</option>
            <option value="En">Roosbef</option>
        </select>

        <h2>Boutons radio(choix unique)</h2>
        <label>
            <input type="radio" name="civilite" value="M" checked>Monsieur
        </label>
        <label>
            <input type="radio" name="civilite" value="Mme">Madame
        </label>
        <div>
            <h2>Case à cocher(choix multiple)</h2>
            <label>
                <input type="checkbox" name="sport" value="foot">Football
            </label>
            <label>
                <input type="checkbox" name="musique" value="guitare">guitare
            </label>
        </div>
        <div>
            <h2>Autre types de champs</h2>
            <textarea name="description" rows="6" cols="6" placeholder="votre description"></textarea>
            <input type="number" name="age" min="0" max="120">
            <input type="date" name="anniversaire" >
        </div>
        <!-- bouton de soumission -->
        <button type="submit">
            Envoyer
        </button>
    </form>
</body>

</html>