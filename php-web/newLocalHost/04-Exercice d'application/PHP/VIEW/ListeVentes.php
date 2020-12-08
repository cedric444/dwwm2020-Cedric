<?php

echo'<div class="contenu colonne">
<div class="margin">
<div class="espace"></div>
<div class="ajouter"><a class="centre size" href="index.php?code=formVentes&m=ajouter">'.texte("Ajouter").'</a></div>
<div class="espace"></div>
</div>';

$liste=VentesManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getIdRepres().'<br>'.$elt->getIdProduit().'<br>'.$elt->getIdVente().'<br>'.$elt->getQuantite().'</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formVentes&m=afficher&id='.$elt->getIdVente().'">'.texte("Afficher").'</a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formVentes&m=modifier&id='.$elt->getIdVente().'">'.texte("Modifier").'</a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formVentes&m=supprimer&id='.$elt->getIdVente().'">'.texte("Supprimer").'</a></div>';
    
}
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">'.texte("Retour").'</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';
