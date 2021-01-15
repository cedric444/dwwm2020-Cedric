<?php
$formations = FormationsManager::getList();
?>
<section class=colonne>
    <h2>Liste des formations</h2>
    <?php
    foreach($formations as $elt)
    {
        echo'<div class=list>
                <div class=case>'.$elt->getLibelleFormation().'</div>
                <button class=bouton><i class="fas fa-edit"></i> Modifier</button>
                <button class=bouton><i class="fas fa-info-circle"></i> Details</button>
                <button class="bouton"><i class="fas fa-trash-alt"></i> Supprimer</button>';
    }
    ?>

</section>


