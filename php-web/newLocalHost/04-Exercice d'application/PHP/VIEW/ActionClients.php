<?php

$mode=$_GET['m'];

$client=new Clients($_POST);

switch($m){
    case "ajouter":
    {
        ClientsManager::add($client);
        break;
    }
    case "modifier":
    {
            ClientsManager::update($client);
            break;
    }
    case "supprimer":
    {
        ClientsManager::delete($client);
    }   
}
header("location:index.php?c=listeClients");