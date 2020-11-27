<?php
include 'PHP/CONTROLLER/Utilisateurs.Class.php';
include 'PHP/MODEL/UtilisateursManager.Class.php';
include 'PHP/MODEL/DbConnect.Class.php';
// /* Test classe Client */
// $c = new Utilisateurs(["nomUtilisateur"=>"Dupond","prenomUtilisateur"=>"toto","mdp"=>"test","mail"=>"toto@test.com", "role"=>"administrateur", "pseudo"=>"titi"]);
//  var_dump($c);
//  echo $c->toString();

/* Test Manager */

// // on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = UtilisateursManager::findById(1);
// var_dump($p);

// on teste l'ajout
echo "ajout d'un utilisateur" . '<br>';
$pNew = new Utilisateurs(["nomUtilisateur"=>"Dupond","prenomUtilisateur"=>"toto","mdp"=>"test","mail"=>"toto@test.com", "role"=>"administrateur", "pseudo"=>"titi"]);
UtilisateursManager::add($pNew);

// //on affiche la liste des utilisateurs
// echo "Liste des utilisateurs" . '<br>';
// $tableau = UtilisateursManager::getList();
// foreach ($tableau as $unUtilisateur)
// {
//     echo $unUtilisateur->toString() . '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1" . '<br>';
// $p->setNomUtilisateur($p->getNomUtilisateur() . 'sss');
// UtilisateursManager::update($p);
// $pRecharge = UtilisateursManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un utilisateur" . '<br>';
// $pSuppr = UtilisateursManager::findById(3);
// UtilisateursManager::delete($pSuppr);

// //on affiche la liste des Utilisateurs
// echo "liste des articles" . '<br>';
// $tableau = UtilisateursManager::getList();
// foreach ($tableau as $unUtilisateur)
// {
//     echo $unUtilisateur->toString() . '<br>';
// }