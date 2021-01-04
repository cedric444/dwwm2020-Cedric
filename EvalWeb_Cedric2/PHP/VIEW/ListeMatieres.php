<?php

echo'<div class="contenu">
    
    <div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?c=formMatieres&m=ajouter">Ajouter une matière</a></div>
    <div class="espace"></div>
    </div>';

$liste=MatiereManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste marginLight">
    <div class=libelle>
    <div class="espace"></div>
    <div class="centre marginBouton size">'.$elt->getLibelleMatiere().'</div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formMatieres&m=modifier&id='.$elt->getIdMatiere().'"><img src="../IMG/modifier.png" alt="modifier"></a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formMatieres&m=supprimer&id='.$elt->getIdMatiere().'"><img src="../IMG/supprimer.png" alt="supprimer"></a></div></div>';
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