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
                        <input type="text name="nom" id="nom" required><span></span>
                    </div>
                    <div class="espaceHor"></div>
                    <div class="champ">
                        <label for="DDN">DDN</label>
                        <div></div>
                        <input type="date" mane="DDN" id="DDN" required><span></span>
                    </div>
                    <div class="espaceHor"></div>
                    <div class="champ">
                        <label for="codePostal">Code postal</label>
                        <div></div>
                        <input type="number" name="codePostal" id="codePostal"><span></span>
                    </div>
                    <div class="espaceHor"></div>
                    <input type="submit">
            </fieldset>
        </form>
        <div id="erreur"></div>

<script src="script.js"></script>
</body>';
