<?php


echo'<h1>Liste des produits</h1>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="index.php?code=ajout">Ajouter</a></div>
<div class="espace"></div></div>';
$tableau = ProduitsManager::getList();
foreach($tableau as $elt)
{
    echo'<div class="liste"><div class="elt">'. $elt->getLibelleProduit().'</div>';
    echo'<div class="btn"><a href="index.php?code=delete&id='.$elt->getIdProduit().'">Supprimer</a></div>
    <div class="btn"><a href="index.php?code=detail&id='.$elt->getIdProduit().'">Afficher</a></div>
    <div class="btn"><a href="index.php?code=modif&id='.$elt->getIdProduit().'">Modifier</a></div></div>'.'<br>';
}
echo'<br></div>';

