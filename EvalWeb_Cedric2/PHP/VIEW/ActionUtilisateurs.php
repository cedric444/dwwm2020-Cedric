<?php

$mode=$_GET['m'];

$utilisateur=new Utilisateur($_POST);

switch($m){
    case "ajouter":
    {
        UtilisateurManager::add($utilisateur);
        break;
    }
    case "modifier":
    {
            UtilisateurManager::update($utilisateur);
            break;
    }
    case "supprimer":
    {
        UtilisateurManager::delete($utilisateur);
    }   
}
header("location:index.php?c=listeUtilisateurs");