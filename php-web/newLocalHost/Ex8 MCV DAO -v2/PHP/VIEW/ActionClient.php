<?php
$mode= $_GET['mode'];
$cl= new Clients($_POST);

switch($mode){
    case 'ajout':
    {
        ClientsManager::add($cl);
        break;
    }
    case 'modif':
    {
        ClientsManager::update($cl);
        break;
    }
    case 'delete':
    {
        ClientsManager::delete($cl);
        break;
    }
}
header('Location:index.php?code=listeClients');