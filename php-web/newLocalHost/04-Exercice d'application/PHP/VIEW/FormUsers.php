<?php

$mode = $_GET['m'];

$listeRoles = RolesManager::getList();

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?c=actionUsers&m=ajouter">';
            break;
        }
    case "afficher":
        {
            echo '<form method="POST" >';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?c=actionUsers&m=modifier">';
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?c=actionUsers&m=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = UsersManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idUser" value="'.$choix->getIdUser().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("Nom de l'utilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text"<?php if($mode =="afficher" || $mode=="supprimer") echo '" disabled "'?> name="nomUser" placeholder="Nom de l'utilisateur" value="<?php if ($modeode != "mter") echo $choix->getNomUser() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                <?php echo texte("Prenom de l'utilisateur");?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text"<?php if($mode == "afficher" || $mode=="supprimer") echo '" disabled "'?> name="prenomUser" placeholder="Prenom de l'utilisateur" value="<?php if ($mode != "ajouter") echo $choix->getPrenomUser() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        
    </div>

    <div>
        <div class="espace"></div>
        <select class="libelle marginLight" name="IdRole">

        <?php 
        foreach ( $listeRoles as $unRole )
        {
            $sel = "";
            if ($unRole->getIdRole()==$id->getIdRole()){
                $sel="selected";
            }
            echo '<option value="'.$unRole->getIdRole().'"'.$sel; if($mode =="afficher" || $mode=="supprimer") echo'disabled'; echo '>'.$unRole->getNomRole().'</option>';
        }
        ?>

        </select>
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
// dans tous les cas, on met le bouton annuler
    ?>
    
</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?c=ListeUsers"><?php echo texte("Retour")?>'</a></div>
<div class="espace"></div>
</div>

</form>
