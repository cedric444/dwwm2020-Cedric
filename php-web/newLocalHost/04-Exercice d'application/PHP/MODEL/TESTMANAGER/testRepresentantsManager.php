<?php

//Test ClientsManager

echo "recherche id = 1" . "<br>";
$obj =RepresentantsManager::findById(1);
var_dump($obj);
echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Representants(["nomRepres" => "Test2", "villeRepres" => "Niort"]);
// var_dump(RepresentantsManager::add($newObj));

// echo "Liste des objets" . "<br>";
// $array = RepresentantsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on met à jour l'id 1" . "<br>";
// $obj->setNomRepres($obj->getNomRepres()."ss");
// RepresentantsManager::update($obj);
// $objUpdated = RepresentantsManager::findById(1);
// echo "Liste des objets" . "<br>";
// $array = RepresentantsManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

echo "on supprime un objet". "<br>";
$obj = RepresentantsManager::findById(3);
RepresentantsManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = RepresentantsManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>