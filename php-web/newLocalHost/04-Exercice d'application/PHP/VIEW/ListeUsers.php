<?php
echo'<div class="contenu colonne">
<div class="margin">
<div class="espace"></div>
<div class="ajouter"><a class="centre size" href="index.php?code=formUsers&mode=ajouter">Ajouter un utilisateur</a></div>
<div class="espace"></div>
</div>';

$liste= UsersManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomUser().' '.$elt->getPrenomUser().'</a></div>
    <div class="details centre marginBouton"><a class="centre size" href="index.php?code=formUsers&mode=afficher&id='.$elt->getIdUser().'">Details</a></div>';
}
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?code=default">Retour</a></div>
    <div class="espace"></div>
</div>
</body>
</html>';