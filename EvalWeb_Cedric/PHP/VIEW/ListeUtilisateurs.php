<?php

echo'<div class="contenu">
    
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?c=formUtilisateurs&m=ajouter">Ajouter un enseignant</a></div>
    <div class="espace"></div>
    </div>';

$liste=UtilisateursManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste marginLight">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getlogin().' '.$elt->getNomUtilisateur().' '.$elt->getPrenomUtilisateur().'</div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=modifier&id='.$elt->getIdUtilisateur().'"><img src="../IMG/modifier.jpg" alt="modifier"></a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=supprimer&id='.$elt->getIdUtilisateur().'"><img src="../IMG/supprimer.jpg" alt="supprimer"></a></div>';
    }
echo '</div>
 <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?c=default">Retour</a></div>
    <div class="espace"></div>
</div>
</div>
</body>
</html>';