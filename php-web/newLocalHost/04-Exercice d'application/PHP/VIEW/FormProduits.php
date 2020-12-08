<?php

$mode =$_GET['m'];


switch($mode)
{
    case "ajouter":
    {
        echo'<form action="index.php?c=actionProduits&m=ajouter" method="POST">';
        break;
    }
    case "afficher":
    {
        echo'<form action="index.php?c=actionProduits&m=afficher" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?c=actionProduits&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?c=actionProduits&m=supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $prod=ProduitsManager::findById($_GET['id']);
}
?>
<input name="idProduit" type="hidden" <?php if(isset($prod)) echo'value="'.$prod->getIdProduit().'"';?>>
<div class="colonne">
    <div>
        <div class="centre size"><?php echo texte("Nom")?></div>
        <input class="libelle"  name="libelle" <?php if($mode = "ajouter") echo 'value= "'.$prod->getNomProduit().'"';if($mode == "afficher" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div> 
    <div class="colonne">
        <div>
        <div class="centre size"><?php echo texte("Couleur")?></div>
        <input class="libelle"  name="ville" <?php if($mode != "ajouter") echo 'value= "'.$prod->getCouleurProduit().'"';if($mode=="afficher" || $mode =="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div class="colonne">
        <div>
        <div class="centre size"><?php echo texte("Poids")?></div>
        <input class="libelle"  name="poids" <?php if($mode != "ajouter") echo 'value= "'.$prod->getPoidsProduit().'"';if($mode== "afficher" || $mode=="supprimer") echo '" disabled'; ?>/>
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
<div class="return"><a class="centre size" href="index.php?c=listeProduits"><?php echo texte("Retour")?></a></div>
<div class="espace"></div>
</div>

</form>