<?php
echo'<div class="contenu colonne">
<div class="margin">
<div class="espace"></div>
<div class="ajouter"><a class="centre size" href="index.php?c=formRepresentants&m=ajouter">'.texte("Ajouter").'</a></div>
<div class="espace"></div>
</div>';

$liste= RepresentantsManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomRepres().' de '.$elt->getVilleRepres().'</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?c=formRepresentants&m=afficher&id='.$elt->getIdRepres().'">'.texte("Afficher").'</a></div>';

    if(isset($_SESSION['user']) && $_SESSION['user']->getIdRole()==1)
    {
        echo'<div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formRepresentants&m=modifier&id='.$elt->getIdRepres().'">'.texte("Modifier").'</a></div>
        <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formRepresentants&m=supprimer&id='.$elt->getIdRepres().'">'.texte("Supprimer").'</a></div>';
    }
}
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?c=default">'.texte("Retour").'</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';