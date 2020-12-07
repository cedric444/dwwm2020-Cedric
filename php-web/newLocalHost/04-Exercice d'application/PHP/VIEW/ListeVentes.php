<?php

echo'<div class="contenu colonne">
<div class="margin">
<div class="espace"></div>
<div class="ajouter"><a class="centre size" href="index.php?code=formVentes&mode=ajouter">Ajouter une vente</a></div>
<div class="espace"></div>
</div>';

$liste=VentesManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getIdRepres().'<br>'.$elt->getIdProd().'<br>'.$elt->getIdClient().'<br>'.$elt->getQuantite().'</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formVentes&mode=afficher&id='.$elt->getIdVente().'">Details</a></div>';
}
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">Retour</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';
}