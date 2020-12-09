<?php

$titre= 'Liste des stations';
echo '<div class="colonne">
<button><a href="index.php?codePage=formStationl&mode=ajout">Ajouter une station</a></button>';
$listeStation=StationsManager::getList();
foreach($listeStation as $uneStation)
{
    echo'<div>';
    echo $uneStation->getNomStation();
    echo '<button><a href="index.php?codePage=formStation&mode=edit&id='.$uneStation->getIdStation().'">Edition</a></button>';  
    echo '<button><a href="index.php?codePage=formStation&mode=update&id='.$uneStation->getIdStation().'">Modification</a></button>'; 
    echo '<button><a href="index.php?codePage=formStation&mode=delete&id='.$uneStation->getIdStation().'">Supression</a></button>';
    echo '</div>';
}
echo'</div>';