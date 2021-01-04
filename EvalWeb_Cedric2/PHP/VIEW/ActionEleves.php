<?php

$mode=$_GET['m'];

$eleve=new Eleve($_POST);

switch($mode){
    case "ajouter":
    {
        EleveManager::add($eleve);
        break;
    }
    case "modifier":
    {
            EleveManager::update($eleve);
            break;
    }
    case "supprimer":
    {
        EleveManager::delete($eleve);
    }   
}
header("location:index.php?c=listeEleves");