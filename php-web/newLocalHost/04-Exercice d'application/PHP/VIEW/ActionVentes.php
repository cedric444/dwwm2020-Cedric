<?php

$mode=$_GET['m'];

$vente=new Ventes($_POST);

switch($m){
    case "ajouter":
    {
        VentesManager::add($vente);
        break;
    }
    case "modifier":
    {
            VentesManager::update($vente);
            break;
    }
    case "supprimer":
    {
        VentesManager::delete($vente);
    }   
}
header("location:index.php?c=listeVentes");