<?php

echo'<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action="" method="POST">
            <fieldset>
                <legend>Coordonnées</legend>
                    <div class="champ">
                        <label for="nom">Nom</label>
                        <div></div>
                        <input type="text name="nom" id="nom" required><div class="image"></div><div id="erreurNom"></div>
                    </div>
                    <div class="espaceHor"></div>
                    <div class="champ">
                        <label for="DDN">DDN</label>
                        <input type="date" mane="DDN" id="DDN" required><div></div><div id="erreurDate"></div>
                    </div>
                    <div class="espaceHor"></div>
                    <div class="champ">
                        <label for="codePostal">Code postal</label>
                        <div></div>
                        <input type="number" name="codePostal" title="5 chiffres attendus" id="codePostal" maxlength="5"><div></div><div id="erreurCode"></div>
                    </div>
                    <div class="espaceHor"></div>
                    <div class="btn"><input type="submit"></div>
                    <div class="espaceHor"></div>
                    <div id="erreur"></div>
            </fieldset>
        </form>
        

<script src="script.js"></script>
</body>';
