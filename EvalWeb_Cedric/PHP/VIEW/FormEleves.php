<?php

$mode= $_GET['m'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="index.php?c=actionEleves&m=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?c=actionEleves&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?c=actionEleves&m=supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $eleve=ElevesManager::findById($_GET['id']);
}
?>
<input name="idEleve" type="hidden" <?php if(isset($eleve)) echo'value="'.$eleve->getIdEleve().'"';?>>
<div class="colonne">
    <div>
        <div class="centre size">Nom:</div>
        <input class="libelle"  name="nom" <?php if($m != "ajouter") echo 'value= "'.$eleve->getNomEleve().'"';if($m=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div> 
    <div class="colonne">
        <div>
        <div class="centre size">Prénom:</div>
        <input class="libelle"  name="prenom" <?php if($m != "ajouter") echo 'value= "'.$eleve->getPrenomEleve().'"';if($m=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div class="colonne">
        <div>
        <div class="centre size">Classe:</div>
        <input class="libelle"  name="classe" <?php if($m != "ajouter") echo 'value= "'.$eleve->getClasse().'"';if($m=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>

    <div class="espace"></div>
</div>

<?php

switch ($m)
{
    case "ajouter":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter  centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
            break;
        }
    case "modifier":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
            break;
        }
    case "supprimer":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter centre" name="submit" value="Supprimer"/></div><div class="espace"></div></div>';
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
<div class="return"><a class="centre size" href="index.php?c=listeEleves">Annuler</a></div>
<div class="espace"></div>
</div>

</form>