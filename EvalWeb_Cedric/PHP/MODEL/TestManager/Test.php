<?php

/*Test Manager*/

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ElevesManager::findById(1);
var_dump($p);

// // on teste l'ajout
// echo "ajout d'un eleve" . "<br>";
// $pNew = new Eleves(["nomEleve"=>"Chabert", "prenomEleve"=> "Michel", "classe"=>"CE1"]);
// ElevesManager::add($pNew);

// //on affiche la liste des Eleves
// echo "Liste des eleves" . "<br>";
// $tableau = ElevesManager::getList();
// foreach ($tableau as $unEleve)
// {
//     echo $unEleve->toString(). '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1".'<br>';
// $p->setNomEleve($p->getNomEleve() . 'sss');
// ElevesManager::update($p);
// $pRecharge = ElevesManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un eleve"."<br>";
// $pSuppr = ElevesManager::findById(3);
// ElevesManager::delete($pSuppr);

// //n affiche la liste des Eleves
// echo "liste des eleves".'<br>';
// $tableau = ElevesManager::getList();
// foreach ($tableau as $unEleve)
// {
//     echo $unEleve->toString().'<br>';
// }

// //recherche par id
// echo 'recherche id=1'.'<br>';
// $c= EleveManager::findById(1);
// var_dump($c);

// //on teste l'ajout
// echo'ajout d\'un client'.'<br>';
// $cNew = new Clients(["nomClient"=>"Dupont", "prenomClient"=>"Paul", "codePostal"=>"59470", "ville"=>"Bollezeele"]);
// ClientsManager::add($cNew);

// //on affiche la liste des clients
// echo'Liste des clients'.'<br>';
// $tableau = ClientsManager::getList();
// foreach($tableau as $unClient)
// {
//     echo $unClient->toString().'<br>';
// }

// //on teste la mise à jour
//  echo'on met à jour l\'id 1'.'<br>';
// $c->setNomClient($c->getNomClient().'sss');
// ClientsManager::update($c);
// var_dump($c);
// $cRecharge = ClientsManager::findById(1);
// var_dump($cRecharge);

// //on teste la suppression
// echo'on supprime un client'.'<br>';
// $cSupp=ClientsManager::findById(4);
// ClientsManager::delete($cSupp);

// //on affiche la liste des clients
// echo'Liste des clients'.'<br>';
// $tableau = ClientsManager::getList();
// foreach($tableau as $unClient)
// {
//     echo $unClient->toString().'<br>';
// }