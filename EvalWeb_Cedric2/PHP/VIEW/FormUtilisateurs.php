<?php

$mode= $_GET['m'];

switch($mode)
{
    case "ajouter":
    {
        echo'<form action="index.php?c=actionUtilisateurs&m=ajouter" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?c=actionUtilisateurs&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?c=actionUtilisateurs&m=supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $utilisateur=UtilisateurManager::findById($_GET['id']);
}
?>
<input name="idUtilisateur" type="hidden" <?php if(isset($utilisateur)) echo'value="'.$utilisateur->getIdUtilisateur().'"';?>>
<div class="colonne">
<div>
        <div class="centre size">pseudo:</div>
        <input class="libelle"  name="login" <?php if($mode != "ajouter") echo 'value= "'.$utilisateur->getLogin().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div>
        <div class="centre size">Nom:</div>
        <input class="libelle"  name="nom" <?php if($mode != "ajouter") echo 'value= "'.$utilisateur->getNomUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div> 
    <div class="colonne">
        <div>
        <div class="centre size">Prénom:</div>
        <input class="libelle"  name="prenom" <?php if($mode != "ajouter") echo 'value= "'.$utilisateur->getPrenomUtilisateur().'"';if($mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div class="colonne">
        <div>
            <?php
            $id= UtilisateurManager::findById($id);
            $liste = MatiereManager::getList();
            foreach($liste as $uneMatiere)
            {
                if($uneMatiere->getIdMatiere()==$id->getIdMatiere())
                {
                    echo'<div class="centre size">Matière:</div>
                    <input class="libelle"  name="matiere"' ?><?php if($mode != "ajouter") echo' value= "'.$uneMatiere->getLibelle().'"';if($mode=="supprimer") echo '" disabled"/>
                    <div class="espace"></div>';
                }
            }
        ?>
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
<div class="return"><a class="centre size" href="index.php?c=listeUtilisateurs">Annuler</a></div>
<div class="espace"></div>
</div>

</form>