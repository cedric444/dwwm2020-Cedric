<?php

echo'<div class="contenu">';

if($_GET['c']=="ajouter")
{    
    echo'<div class="espace"></div>
    <div class="ajouter"><a class="centre size" href="index.php?c=formEleves&m=ajouter">Ajouter</a></div>
    <div class="espace"></div>
    </div>';
}
else
{
    if (isset($_GET['id']))
{
$choix = SuiviManager::findById($_GET['id']);
}
echo'<select class= "libelle marginLight" name="idMatiere">';
$listeMatiere=MatiereManager::getList();
foreach ( $listeMatiere as $uneMatiere )
{
    if ($mode != "ajouter")
        {
    $sel = "";
    if ($uneMatiere->getIdMatiere()==$choix->getIdMatiere()){
        $sel="selected";
    }
}
    echo '<option value="'.$uneMatiere->getIdMatiere().'"'.$sel; if($mode=="supprimer") echo'disabled'; echo '>'.$uneMatiere->getLibelleMatiere().'</option>';
} 
echo'</select>';
$liste=EleveManager::getList();
foreach($liste as $elt)
{
    echo'<div class="liste marginLight">
    <div class="espace"></div>
    <div class="libelle centre marginBouton size">'.$elt->getNomEleve().' '.$elt->getPrenomEleve().'</div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=modifier&id='.$elt->getIdEleve().'"><img src="../IMG/modifier.jpg" alt="modifier"></a></div>
    <div class="modifier centre marginBouton"><a class="centre size" href="index.php?c=formEleves&m=supprimer&id='.$elt->getIdEleve().'"><img src="../IMG/supprimer.jpg" alt="supprimer"></a></div>';
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
}