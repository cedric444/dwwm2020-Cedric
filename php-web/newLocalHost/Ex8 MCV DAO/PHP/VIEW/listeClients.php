<?php

$liste= ClientsManager::getList();

echo'<h1>Gestion des clients</h1><br>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="PHP/VIEW/formAddClient.php">Ajouter</a></div>
<div class="espace"></div></div>';
foreach ($liste as $unClient)
{
    echo'<div class="liste"><div class="elt">'. $unClient->getNomClient().' '.$unClient->getPrenomClient().'</div>';
    echo'<div class="btn"><a href="PHP/VIEW/formDeleteClient.php?id='.$unClient->getIdClient().'">Supprimer</a></div>
    <div class="btn"><a href="PHP/VIEW/editClient.php?id='.$unClient->getIdClient().'">Afficher</a></div>
    <div class="btn"><a href="PHP/VIEW/formUpdateClient.php?id='.$unClient->getIdClient().'">Modifier</a></div></div>'.'<br>';
}
echo'<br></div>';
