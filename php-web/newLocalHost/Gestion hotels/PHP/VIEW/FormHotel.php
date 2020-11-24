<?php

$mode= $_GET['mode'];
if (isset ($_GET['id']))
{
    $idHotel= $_GET['id'];
    if($idHotel!=false)
    {
        $client= HotelsManager::findById($idHotel);
    }
}

switch ($mode)
{
    case 'ajout' :
    {
        echo'<form action="index.php?codePage=actionHotel&mode=ajout" method="POST">';
        break;
    }
    case 'update' :
        {
            echo'<form action="index.php?codePage=actionHotel&mode=update" method="POST">
            <input name="idHotel"  value="' . $hotelChoisi->getidHotel() . '" type="hidden" />';
            break;
        }
    case 'delete' :
        {
            echo'<form action="index.php?codePage=actionHotel&mode=delete" method="POST">
            <input name="idHotel"  value="' . $hotelChoisi->getidHotel() . '" type="hidden" />';
            break;
        }
    case 'edit' :
        {
            echo'echo <form >  
            <input name="idHotel"  value="' . $hotelChoisi->getidHotel() . '" type="hidden" />';
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