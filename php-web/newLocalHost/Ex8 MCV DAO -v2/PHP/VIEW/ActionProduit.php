<?php
$mode= $_GET['mode'];
$prod= new Produits($_POST);

switch($mode){
    case 'ajout':
    {
        ProduitsManager::add($prod);
        break;
    }
    case 'modif':
    {
        ProduitsManager::update($prod);
        break;
    }
    case 'delete':
    {
        ProduitsManager::delete($prod);
        break;
    }
}
header('Location:index.php?code=liste');
