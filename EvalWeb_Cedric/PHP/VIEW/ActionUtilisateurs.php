<?php

$mode=$_GET['m'];

$utilisateur=new Utilisateurs($_POST);

switch($m){
    case "ajouter":
    {
        UtilisateursManager::add($utilisateur);
        break;
    }
    case "modifier":
    {
            UtilisateursManager::update($utilisateur);
            break;
    }
    case "supprimer":
    {
        UtilisateursManager::delete($utilisateur);
    }   
}
header("location:index.php?c=listeUtilisateurs");