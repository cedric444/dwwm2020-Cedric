<?php

echo'<div class="contenu colonne">
    <div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?code=formClients&m=ajouter">';echo texte("Ajouter");echo'</a></div>
    <div class="espace"></div>
    </div>';

$liste=ClientsManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste marginLight">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomClient().' ville :'.$elt->getVilleClient().'</div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formClients&m=afficher&id='.$elt->getIdClient().'">'.texte("Afficher").'</a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formClients&m=modifier&id='.$elt->getIdClient().'">'.texte("Modifier").'</a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formClients&m=supprimer&id='.$elt->getIdClient().'">'.texte("Supprimer").'</a></div>';
    }
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">'.texte("Retour").'</a></div>
    <div class="espace"></div>
</div>
</div>
</body>
</html>';