<?php

$mode=$_GET['m'];

$matiere=new Matiere($_POST);

switch($m){
    case "ajouter":
    {
        MatiereManager::add($matiere);
        break;
    }
    case "modifier":
    {
            MatiereManager::update($matiere);
            break;
    }
    case "supprimer":
    {
        MatiereManager::delete($matiere);
    }   
}
header("location:index.php?c=listeMatieres");