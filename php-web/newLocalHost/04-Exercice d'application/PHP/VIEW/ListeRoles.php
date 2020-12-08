<?php
$roles = RolesManager::getList();
echo'<div>
<div class="espace"></div>
<div class="size centre titre">'.texte("Liste des roles").'</div>
<div class="espace"></div>
</div>
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?c=formRoles&choix=roles&m=ajouter">'.texte("Ajouter un Role").'</a></div>
        <div class="espace"></div>
    </div>';


 foreach ($roles as $unRole) 
    {
        if ($unRole->getIdRole() != 1) 
        {
            echo '<div class="liste">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">' . $unRole->getNomRole() . '</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?c=formRoles&choix=roles&m=afficher&id=' . $unRole->getIdRole() . '">'.texte("afficher").'</a></div>';
        }
    }

echo '</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?c=default">'.texte("Retour").'</a></div>
<div class="espace"></div>
</div>
</body>

</html>';


