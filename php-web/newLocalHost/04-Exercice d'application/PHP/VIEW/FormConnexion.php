<?php

echo '<form method="POST" action="index.php?code=actionConnexion">
    <div class="contenu colonne">
        <div class="colonne marginLight">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">';
                echo texte("Pseudo Utilisateur");
            echo'</div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="pseudo" placeholder='; echo texte("Pseudo Utilisateur"); echo'/>
                <div class="espace"></div>
                </div>
            </div>
            <div class="titreDescriptif centre">';
            echo texte("Mot de passe");
            echo'</div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="password" name="motDePasse" placeholder="Mot de passe"/>
                <div class="espace"></div>
            </div>
        </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?code=accueil">';echo texte("Retour"); echo'</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter size marginLight centre" name="submit" value="Se connecter"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';