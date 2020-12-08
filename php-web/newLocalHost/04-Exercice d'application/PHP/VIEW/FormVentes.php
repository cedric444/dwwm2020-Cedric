<?php

$mode=$_GET['m'];
$listeProduits = ProduitsManager::getList();
$listeRepresentants= RepresentantsManager::getList();
$listeClient = ClientsManager::getList();
switch($mode)
{
    case "ajouter":
    {
        echo'<form action="index.php?c=actionVentes&m=ajouter" method="POST">';
        break;
    }
    case "afficher":
    {
        echo'<form action="index.php?c=actionVentes&m=affficher" method="POST">';
        break;
    }
    case "modifier":
    {
        echo'<form action="index.php?c=actionVentes&m=modifier" method="POST">';
        break;
    }
    case "supprimer":
    {
        echo'<form action="index.php?c=actionVentes&m=supprimer" method="POST">';
        break;
    }
}

if (isset ($_GET['id']))
{
    $uneVente=VentesManager::findById($_GET['id']);
}
?>
<input name="idVente" type="hidden" <?php if(isset($repres)) echo'value="'.$repres->getIdVente().'"';?>>
<div class="espace"></div>

    <select class="libelle marginLight" name="idRepresentant">
    <?php
    foreach($listeRepresentants as $unRepresentant)
    {
        if($mode != "ajouter")
        {
            $sel ="";
            if($unRepresentant->getIdRepres()==$uneVente->getIdRepres())
            {
                $sel="selected";
            }
        }
        echo'<option value="'.$unRepresentant->getIdRepres().'"'.$sel; if($mode == "afficher" || $mode =="supprimer") echo'disabled'; echo '>'.$unRepresentant->getIdRepres().'</option>';
    }
    ?>
    </select>  
        <div class="espace"></div>
    </div> 
    <div class="espace"></div>
    <select class="libelle marginLight" name="idProduit">

        <?php
        foreach($listeClient as $unClient)
        {
            if ($mode != "ajouter")
                {
            $sel = "";
            if ($unClient->getIdClient()==$uneVente->getIdClient()){
                $sel="selected";
            }
        }
        echo '<option value="'.$unClient->getIdClient().'"'.$sel; if($mode =="afficher" || $mode =="supprimer") echo'disabled'; echo '>'.$unClient->getNomClient().'</option>';
    }
    ?>
    </select>

        <div class="espace"></div>
    </div>
    <select class="libelle marginLight" name="idClient">

        <?php
        foreach($listeProduit as $unProduit)
        {
            if ($mode != "ajouter")
                {
            $sel = "";
            if ($unProduit->getIdProduit()==$uneVente->getIdProduit()){
                $sel="selected";
            }
        }
        echo '<option value="'.$unProduit->getIdProduit().'"'.$sel; if($mode =="afficher" || $mode=="supprimer") echo'disabled'; echo '>'.$unProduit->getNomProduit().'</option>';
    }
    ?>
    </select>
    <div class="espace"></div>
</div>

<div class="colonne">
    <div>
        <div class="centre size"><?php echo texte("Quantité")?></div>
        <input class="libelle"  name="quantite" <?php if($mode == "ajouter") echo 'value= "'.$uneVente->getQuantite().'"';if($mode=="afficher" || $mode=="supprimer") echo '" disabled'; ?>/>
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
<div class="return"><a class="centre size" href="index.php?c=listeVentes"><?php echo texte("Retour")?></a></div>
<div class="espace"></div>
</div>

</form>