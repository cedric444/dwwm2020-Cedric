<?php

$mode=$_GET['mode'];



if(isset($_GET['id']))
{
    $idStation= $_GET['id'];
    if($idStation!=false)
    {
        $station=StationsManager::findById($station);
    }
}

switch($mode)
{
    case "ajout" :
        {
            echo'<form action="index.php?codePage=actionStation&mode=ajout" method="POST"/>';
            break;
        }
    case "update" :
        {
            echo'<form action="index.php?codePage=actionStation&mode=update" method="POST"/>';
            break;
        }
    case "delete" :
        {
            echo'<form action="index.php?codePage=actionStation&mode=delete" method="POST"/>';
            break;
        }
    case "edit" :
        {
            echo'<form>
            <input name="idStation" value="'.$station->getIdStation().'" type="hidden"/>';
            break;
        }
}

?>

<div>
    <label for="nomStation">Nom :</label>
    <input name="nomStation" <?php if($mode!="ajout"){echo'value="'.$station->getNomStation().'"';}if($mode=="delete"||$mode=="edit"){echo'disabled';}?>/>
</div>
<div>
    <label for="altitudeStation">Altitude :</label>
    <input name="altitudeStation" <?php if($mode!="ajout"){echo'value="'.$station->getAltitudeStation().'"';}if($mode=="delete"||$mode=="edit"){echo'disabled';}?>/>
</div>

<?php
switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter une station</button>';
        break;
    }
    case "update":   
    {
        echo '    <button type="submit">Modifier la station</button>';
        break;
    }
    case "delete":    
    {
        echo '    <button type="submit">Supprimer la station</button>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeStation">Retour</a></button>
</form>';