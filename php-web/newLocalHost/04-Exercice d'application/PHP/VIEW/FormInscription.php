<?php

$listeRole = RolesManager::getList();

?>

<form method="POST" action="index.php?c=actionInscription">
<div class="contenu colonne">
    <div class="colonne marginLight">
            
        <div class="centre size" for="nomUser"><?php echo texte("Nom");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="nomUser" required/>
            <div class="espace"></div>
        </div>
            
    </div>    
    <div class="colonne marginLight">
            
        <div class="centre size" for="prenomUser"><?php echo texte("Prenom");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="prenomUser" required/>
            <div class="espace"></div>
        </div>
    </div>      
    <div class="colonne marginLight">
            
        <div class="centre size" for="motDePasse"><?php echo texte("Mot de passe");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="motDePasse" required/>
            <div class="espace"></div>
        </div>  
    </div>   
    <div class="colonne marginLight">
            
        <div class="centre size" for="confirmationMotDePasse"><?php echo texte("Confirmer mot de passe");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="confirmationMotDePasse" required/>
            <div class="espace"></div>
        </div>
    </div>

    <div class="centre size" for="age"><?php echo texte("Role");?>:</div>
    <div>
        <div class="espace"></div>
        <select class="libelle marginLight" name="idRole">';

        <?php
            foreach ( $listeRole as $unRole )
            {
                $sel = "";
                echo '<option value="'.$unRole->getIdRole().'"'.$sel.'>'.$unRole->getNomRole().'</option>';      
            }
        ?>
        </select>
        <div class="espace"></div>
    </div>
    

    <div class="colonne marginLight">
            
        <div class="centre size" for="pseudo"><?php echo texte("Pseudo");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="pseudo" required/>
            <div class="espace"></div>
        </div>
    </div>
</div>
<div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?c=accueil"><?php echo texte("Retour");?></a></div>
            <div class="espace"></div>
        </div>
<div>
<div class="espace"></div>
<input type="submit" class="ajouter size marginLight centre" name="submit" value="<?php echo texte("Inscrire");?>"/>
<div class="espace"></div>
</div>
</form>
