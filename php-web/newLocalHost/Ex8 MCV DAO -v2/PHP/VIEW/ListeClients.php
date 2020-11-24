<?php

$liste= ClientsManager::getList();

echo'<h1>Gestion des clients</h1><br>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="index.php?code=ajoutClient">Ajouter</a></div>
<div class="espace"></div></div>';
foreach ($liste as $unClient)
{
    echo'<div class="liste"><div class="elt">'. $unClient->getNomClient().' '.$unClient->getPrenomClient().'</div>';
    echo'<div class="btn"><a href="index.php?code=deleteClient&id='.$unClient->getIdClient().'">Supprimer</a></div>
    <div class="btn"><a href="index.php?code=detailClient&id='.$unClient->getIdClient().'">Afficher</a></div>
    <div class="btn"><a href="index.php?code=modifClient&id='.$unClient->getIdClient().'">Modifier</a></div></div>'.'<br>';
}
echo'<br></div>';
