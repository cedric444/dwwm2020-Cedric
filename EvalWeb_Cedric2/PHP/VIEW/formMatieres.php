<?php

$mode= $_GET['m'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="index.php?c=actionMatieres&m=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?c=actionMatieres&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?c=actionMatieres&m=supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $matiere=MatiereManager::findById($_GET['id']);
}
?>
<input name="idMatiere" type="hidden" <?php if(isset($matiere)) echo'value="'.$matiere->getIdMatiere().'"';?>>
<div class="colonne">
    <div>
        <div class="centre size">Nom:</div>
        <input class="libelle"  name="libelle" <?php if($mode != "ajouter") echo 'value= "'.$matiere->getLibelleMatiere().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div> 

    <div class="espace"></div>
</div>

<?php

switch ($mode)
{
    case "ajouter":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
            break;
        }
    case "modifier":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
            break;
        }
    case "supprimer":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Supprimer"/></div><div class="espace"></div></div>';
            break;
        }
    
    default:
    {
        echo '<div>';
    }
}
?>

</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?c=listeMatieres">Annuler</a></div>
<div class="espace"></div>
</div>

</form>