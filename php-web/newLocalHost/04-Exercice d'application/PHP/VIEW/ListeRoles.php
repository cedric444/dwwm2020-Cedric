<?php
$roles = RolesManager::getList();
echo'<div>
<div class="espace"></div>
<div class="size centre titre">Liste des roles</div>
<div class="espace"></div>
</div>
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=ajouter">Ajouter un Role</a></div>
        <div class="espace"></div>
    </div>';


 foreach ($roles as $unRole) 
    {
        if ($unRole->getIdRole() != 1) 
        {
            echo '<div class="liste">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">' . $unRole->getNomRole() . '</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=details&id=' . $unRole->getIdRole() . '">Details</a></div>';
        }
    }

echo '</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
<div class="espace"></div>
</div>
</body>

</html>';


