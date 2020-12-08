<?php

echo'<div class="contenu colonne">
    <div class="margin">
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?code=formProduits&m=ajouter">'.texte("Ajouter").'</a></div>
    <div class="espace"></div>
    </div>';

$liste = ProduitsManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomProduit().'<br>'.$elt->getCouleurProduit().'<br>'.$elt->getPoidsProduit().'</div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formProduits&m=afficher&id='.$elt->getIdProduit().'">'.texte("Afficher").'</a></div>';

    if(isset($_SESSION['user']) && $_SESSION['user']->getIdRole()==1)
    {
        echo'<div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formProduits&m=modifier&id='.$elt->getIdProduit().'">'.texte("Modifier").'</a></div>
        <div class="modifier centre marginBouton"><a class="centre size" href="index.php?code=formProduits&m=supprimer&id='.$elt->getIdProduit().'">'.texte("Supprimer").'</a></div>';
    }
}
echo'</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">'.texte("Retour").'</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';