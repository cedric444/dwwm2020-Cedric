<?php

echo'<div class="contenu">
    
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?c=formEleves&m=ajouter">Ajouter un eleve</a></div>
    <div class="espace"></div>';

$liste=EleveManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste marginLight">
    <div class=libelle>
    <div class="espace"></div>
    <div class="centre marginBouton size">'.$elt->getNomEleve().'</div>
    <div class="espace"></div>
    <div class="centre marginBouton size">'.$elt->getPrenomEleve().'</div>
    <div class="espace"></div>
    <div class="centre marginBouton size">'.$elt->getClasse().'</div>
    <div class="espace"></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=modifier&id='.$elt->getIdEleve().'"><img src="../IMG/modifier.png" alt="modifier"></a></div>
    <div class="espace"></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=supprimer&id='.$elt->getIdEleve().'"><img src="../IMG/supprimer.png" alt="supprimer"></a></div>
    <div class="espace"></div>
    </div>';
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