<?php

echo '<form method="POST" action="index.php?c=actionConnexion">
    <div class="contenu">
    <div class="espace"></div>
            <div class="titreDescriptif centre">
                Pseudo Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="pseudo"/>
                <div class="espace"></div>
                </div>
            </div>
            <div class="titreDescriptif centre">
                Mot de passe Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="password" name="motDePasse"/>
                <div class="espace"></div>
            </div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter size" name="submit" value="Valider"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';