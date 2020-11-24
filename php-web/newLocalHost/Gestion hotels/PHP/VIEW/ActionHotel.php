<?php

$hotel= new Hotels($_POST);
$mode=$_GET['mode'];

switch($mode)
{
    case "ajout" :
    {
        HotelsManager::add($hotel);
        break;
    }
    case "update" :
    {    
        $HotelsManager::update($hotel);
        break;
    }
    case "delete" :
    {
        HotelsManager::delete($hotel);
        break;
    }
}
header("location: index.php?codePage=listeHotel");