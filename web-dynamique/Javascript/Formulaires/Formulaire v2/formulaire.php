<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="" method="POST">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" title="commence par une majuscule" id="nom" class="checkValidity" pattern="[A-Z]{1}[a-z]+" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" title="commence par une majuscule" id="prenom" class="checkValidity" pattern="[A-Z]{1}[a-z]+\-" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="ddn">Date de Naissance</label>
                    <input type="text" name="ddn" id="ddn" class="checkValidity" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="codePostal">Code postal</label>
                    <input type="text" name="codePostal" title="5 chiffres attendus" id="code" class="checkValidity" pattern="\d{5}" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville" class="checkValidity" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <div class="champ">
                    <label for="mdp">Mot de passe</label>
                    <input type="text" name="mdp" id="mdp" class="checkValidity" required>
                    <div class="image"><img src="pt_interro.png" alt="infobulle" class="info"></div>
                    <div class="erreur"></div>
                </div>
                <div class="espaceHor"></div>
                <button>Valider</button>
            </fieldset>
        </form>
        <script src="script.js"></script>
    </body>
</html>