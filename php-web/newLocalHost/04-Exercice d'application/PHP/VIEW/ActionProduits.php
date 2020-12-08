<?php

$mode = $_GET['m'];

$prod=new Produits($_POST);
$prod->setNomProduit($_POST['nom']);

switch($mode)
{
    case "ajouter":
    {
        ProduitsManager::add($prod);
        break;
    }
    case "modifier":
    {
            ProduitsManager::update($prod);
            break;
    }
    case "supprimer":
    {
        ProduitsManager::delete($prod);
    }   
}
// header("location:index.php?code=listeProduits");