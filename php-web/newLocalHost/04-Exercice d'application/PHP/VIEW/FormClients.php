<?php

$m= $_GET['m'];

switch($m)
{
    case "ajouter":
    {
        echo'<form action="index.php?code=actionClients&m=ajouter" method="POST">';
        break;
    }
    case "afficher":
    {
        echo'<form action="index.php?code=actionClients&m=afficher" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?code=actionClients&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?code=actionClients&m="supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $cli=ClientsManager::findById($_GET['id']);
}
?>
<input name="idClient" type="hidden" <?php if(isset($cli)) echo'value="'.$cli->getIdClient().'"';?>>
<div class="colonne">
    <div>
        <div class="centre size"><?php echo texte("Nom")?></div>
        <input class="libelle"  name="nom" <?php if($m != "ajouter") echo 'value= "'.$cli->getNomClient().'"';if($m=="afficher" || $m=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div> 
    <div class="colonne">
        <div>
        <div class="centre size"><?php echo texte("Ville")?></div>
        <input class="libelle"  name="ville" <?php if($m != "ajouter") echo 'value= "'.$cli->getVilleClient().'"';if($m=="afficher" || $m=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>

    <div class="espace"></div>
</div>

<?php

switch ($m)
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
<div class="return"><a class="centre size" href="index.php?page=listeClients"><?php echo texte("Retour")?></a></div>
<div class="espace"></div>
</div>

</form>