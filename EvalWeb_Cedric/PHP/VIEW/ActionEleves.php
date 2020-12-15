<?php

$mode=$_GET['m'];

$eleve=new Eleves($_POST);

switch($m){
    case "ajouter":
    {
        ElevesManager::add($eleve);
        break;
    }
    case "modifier":
    {
            ElevesManager::update($eleve);
            break;
    }
    case "supprimer":
    {
        ElevesManager::delete($eleve);
    }   
}
header("location:index.php?c=listeEleves");