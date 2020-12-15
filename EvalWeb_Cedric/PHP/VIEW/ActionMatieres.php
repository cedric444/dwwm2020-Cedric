<?php

$mode=$_GET['m'];

$matiere=new Matieres($_POST);

switch($m){
    case "ajouter":
    {
        MatieresManager::add($matiere);
        break;
    }
    case "modifier":
    {
            MatieresManager::update($matiere);
            break;
    }
    case "supprimer":
    {
        MatieresManager::delete($matiere);
    }   
}
header("location:index.php?c=listeMatieres");