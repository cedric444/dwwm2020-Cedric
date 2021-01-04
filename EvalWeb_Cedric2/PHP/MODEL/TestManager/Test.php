<?php

/*Test Manager*/
echo "recherche id = 1" . "<br>";
$obj =SuiviManager::findById(1);
var_dump($obj);
echo $obj->toString();

// // on teste l'ajout
// echo "ajout d'un Suivi" . "<br>";
// $pNew = new Suivi(["idMatiere"=>2, "idEleve"=>1, "note"=>12, "coefficient"=>3]);
// SuiviManager::add($pNew);

// //on affiche la liste des Suivis
// echo "Liste des Suivis" . "<br>";
// $tableau = SuiviManager::getList();
// foreach ($tableau as $unSuivi)
// {
//     echo $unSuivi->toString(). '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1".'<br>';
// $obj->setNote($obj->getNote() . '2');
// SuiviManager::update($obj);
// var_dump($obj);
// $pRecharge = SuiviManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un Suivi"."<br>";
// $pSuppr = SuiviManager::findById(5);
// SuiviManager::delete($pSuppr);

// //n affiche la liste des Suivis
// echo "liste des Suivis".'<br>';
// $tableau = SuiviManager::getList();
// foreach ($tableau as $unSuivi)
// {
//     echo $unSuivi->toString().'<br>';
// }

