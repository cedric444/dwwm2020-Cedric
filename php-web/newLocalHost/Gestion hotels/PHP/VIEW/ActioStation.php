<?php

$station= new Stations($_POST);
$mode=$_GET['mode'];

switch($mode)
{
    case "ajout" :
        {
            StationsManager::add($station);
            break;
        }
    case "update" :
        {
            StationsManager::update($station);
            break;
        }
    case "delete" :
        {
            StationsManager::delete($station);
            break;
        }
}
header("location: index.php?codePage=listeStation");