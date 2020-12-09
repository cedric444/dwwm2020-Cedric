<?php

$mode=$_GET['mode'];



if(isset($_GET['id']))
{
    $idStation= $_GET['id'];
    if($idStation!=false)
    {
        $station=StationsManager::findById($idStation);
    }
}

switch($mode)
{
    case "ajout" :
        {
            echo'<h4>Ajouter une station</h4>
            <form id="formulaire" action="index.php?codePage=actionStation&mode=ajout" method="POST"/>';
            break;
        }
    case "update" :
        {
            echo'<h4>Modifier une station</h4>
            <form action="index.php?codePage=actionStation&mode=update" method="POST"/>';
            break;
        }
    case "delete" :
        {
            echo'<h4>Supprimer une station</h4>
            <form action="index.php?codePage=actionStation&mode=delete" method="POST"/>';
            break;
        }
    case "edit" :
        {
            echo'<form id="formulaire" method="POST">';
            
            break;
        }
}

?>

<input type="hidden" name="idStation" <?php if(isset($station)) echo'value="'.$station->getIdStation().'"';?> >
<div class="ligneDetail">
<div class="nomInput">Nom :</div>
<div class="input"><input type="text" name="nomStation" <?php if(isset($station)) echo'value="'.$station->getNomStation().'"'; ?> >
<div class="altitudeInput">altitude :</div>
<div class="input"><input type="text" name="altitudeStation" <?php if(isset($station)) echo'value="'.$station->getAltitudeStation().'"'; ?> >
</div>



<?php
switch ($mode)
{
    case "ajout":    
    {
        echo '<div class="ligneDetail"><input type="submit" value="Ajouter" class=" crudBtn crudBtnEdit"/>';
        break;
    }
    case "update":   
    {
        echo '<div class="ligneDetail"><input type="submit" value="Modifier" class=" crudBtn crudBtnEdit"/>';
        break;
    }
    case "delete":    
    {
        echo '<div class="ligneDetail"><input type="submit" value="Supprimer" class=" crudBtn crudBtnEdit"/>';
        break;
    }
}
   echo '<button><a href="index.php?codePage=listeStation">Retour</a></button>
</form>';