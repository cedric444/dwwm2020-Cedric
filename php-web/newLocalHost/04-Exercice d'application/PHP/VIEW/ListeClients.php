<?php

echo'<div class="contenu colonne">
    <div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?code=formClients&mode=ajouter">Ajouter un client</a></div>
    <div class="espace"></div>
    </div>';

$liste=ClientsManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomClient().' Habite à '.$elt->getVilleClient().'</div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formClients&mode=afficher&id='.$elt->getIdClient().'">Details</a></div>';
}
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">Retour</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';