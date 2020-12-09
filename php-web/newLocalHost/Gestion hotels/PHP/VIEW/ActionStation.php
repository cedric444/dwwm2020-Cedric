<?php
//$erreur=false;
$station= new Stations($_POST);
var_dump($station);
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
            $listeHotel= HotelsManager::getLIstByStation($station->getIdStation());
            foreach($listeHotel as $unHotel)
            {
                HotelsManager::delete($unHotel);
            }
            StationsManager::delete($station);
            break;
        }
}
//if (!$erreur){
    //header("location: index.php?codePage=listeStation");
//}
//else{
    header("refresh:3;url=index.php?codePage=listeStation");
//}