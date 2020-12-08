<?php

$mode=$_GET['m'];

$repres=new Representants($_POST);

switch($m){
    case "ajouter":
    {
        RepresentantsManager::add($repres);
        break;
    }
    case "modifier":
    {
            RepresentantsManager::update($repres);
            break;
    }
    case "supprimer":
    {
        RepresentantsManager::delete($repres);
    }   
}
header("location:index.php?c=listeRepresentants");