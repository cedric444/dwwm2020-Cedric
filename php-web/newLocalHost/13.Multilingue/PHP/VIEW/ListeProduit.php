<?php


echo'<h1>'.texte('listProd').'</h1>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="index.php?code=formProduit&mode=ajout">'. texte('Ajouter').'</a></div>
<div class="espace"></div></div>';
$tableau = ProduitsManager::getList();
foreach($tableau as $elt)
{
    echo'<div class="liste"><div class="elt">'. $elt->getLibelleProduit().'</div>';
    echo'<div class="btn"><a href="index.php?code=formProduit&mode=delete&id='.$elt->getIdProduit().'">'.texte('Supprimer').'</a></div>
    <div class="btn"><a href="index.php?code=detail&id='.$elt->getIdProduit().'">'.texte('Afficher').'</a></div>
    <div class="btn"><a href="index.php?code=formProduit&mode=update&id='.$elt->getIdProduit().'">'.texte('Modifier').'</a></div></div>'.'<br>';
}
echo'<br></div>';
echo'<a href="index.php?code=listeClients">'.texte('ListCli').'</a>';
echo'<br>';
echo'<a href="index.php?code=formInscription">'.texte('inscription').'</a>';

