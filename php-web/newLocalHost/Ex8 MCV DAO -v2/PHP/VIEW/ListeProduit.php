<?php


echo'<h1>Liste des produits</h1>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="index.php?code=formProduit&mode=ajout">Ajouter</a></div>
<div class="espace"></div></div>';
$tableau = ProduitsManager::getList();
foreach($tableau as $elt)
{
    echo'<div class="liste"><div class="elt">'. $elt->getLibelleProduit().'</div>';
    echo'<div class="btn"><a href="index.php?code=formProduit&mode=delete&id='.$elt->getIdProduit().'">Supprimer</a></div>
    <div class="btn"><a href="index.php?code=detail&id='.$elt->getIdProduit().'">Afficher</a></div>
    <div class="btn"><a href="index.php?code=formProduit&mode=update&id='.$elt->getIdProduit().'">Modifier</a></div></div>'.'<br>';
}
echo'<br></div>';
echo'<a href="index.php?code=listeClients">Liste des clients</a>';
echo'<br>';
echo'<a href="index.php?code=formInscription">incription</a>';
