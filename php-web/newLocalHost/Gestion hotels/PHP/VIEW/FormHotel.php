<?php

$mode= $_GET['mode'];
if (isset ($_GET['id']))
{
    $idHotel= $_GET['id'];
    if($idHotel!=false)
    {
        $hotelChoisi= HotelsManager::findById($idHotel);
    }
}

switch ($mode)
{
    case 'ajout' :
    {
        echo'<h4>Ajouter un hôtel</h4>
        <form id="formulaire" method="post" action="index.php?codePage=actionHotel&mode=ajout">';
        break;
    }
    case 'update' :
        {
            echo'<h4>Modifier un hôtel</h4>
            <form id="formulaire" method="post" action="index.php?codePage=actionProduit&mode=update">';
    
            break;
        }
    case 'delete' :
        {
            echo'<h4>Supprimer un hôtel</h4>
            <form id="formulaire" method="post" action="index.php?codePage=actionProduit&mode=delete">';
            
            break;
        }
    case 'edit' :
        {
            echo'<h4>Editer un hôtel</h4>
            <form id="formulaire" method="post">';  
            
            break;
        }
}

?>

<div>
    <label for="nomHotel">Nom</label>
    <input name="nomHotel" <?php if($mode!="ajout"){echo'value="'.$hotelChoisi->getNomHotel().'"';} if($mode=="delete" || $mode=="edit"){echo'disabled';}?>/>
</div>
<div>
    <label for="AdresseHotel">Adresse</label>
    <input name="AdresseHotel" <?php if($mode!="ajout"){echo'value="'.$hotelChoisi->getAdresseHotel().'"';}if($mode=="delete"||$mode=="edit"){echo'disabled';}?> />
</div>
<div>
    <label for="VilleHotel">Ville</label>
    <input name="VilleHotel"  <?php if($mode!="ajout"){echo'value="'.$hotelChoisi->getVilleHotel().'"';}if($mode=="delete"||$mode=="edit"){echo'disabled';}?>/>
</div>
<div>
    <label for="CategorieHotel">Catégorie</label>
    <input name="CategorieHotel" <?php if($mode!="ajout"){echo'value="'.$hotelChoisi->getCategorieHotel().'"';}if($mode=="delete"||$mode=="edit"){echo'disabled';}?>/>
</div>
<input name="idStation" <?php if($mode!="ajout"){echo'value="'.$hotelChoisi->getidStation().'"';}else{echo'value=""';} ?> type="hidden" />

<?php

switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un hotel</button>';
        break;
    }
    case "update":   
    {
        echo '    <button type="submit">Modifier l\'hotel</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer l\'hotel</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</form>';