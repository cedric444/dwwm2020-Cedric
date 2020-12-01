<?php

/*Test Manager*/

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ProduitsManager::findById(1);
var_dump($p);

// on teste l'ajout
echo "ajout d'un produit" . "<br>";
$pNew = new Produits(["libelleProduit"=>"cahier", "prix"=> 5, "dateDePeremption"=>"2020-12-31"]);
ProduitsManager::add($pNew);

//on affiche la liste des produits
echo "Liste des articles" . "<br>";
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString(). '<br>';
}

// on teste la mise à jour
echo "on met à jour l'id 1".'<br>';
$p->setLibelleProduit($p->getLibelleProduit() . 'sss');
ProduitsManager::update($p);
$pRecharge = ProduitsManager::findById(1);
var_dump($pRecharge);

// on teste la suppression
echo "on supprime un article"."<br>";
$pSuppr = ProduitsManager::findById(3);
ProduitsManager::delete($pSuppr);

//n affiche la liste des produits
echo "liste des articles".'<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString().'<br>';
}

//recherche par id
echo 'recherche id=1'.'<br>';
$c= ClientsManager::findById(1);
var_dump($c);

//on teste l'ajout
echo'ajout d\'un client'.'<br>';
$cNew = new Clients(["nomClient"=>"Dupont", "prenomClient"=>"Paul", "codePostal"=>"59470", "ville"=>"Bollezeele"]);
ClientsManager::add($cNew);

//on affiche la liste des clients
echo'Liste des clients'.'<br>';
$tableau = ClientsManager::getList();
foreach($tableau as $unClient)
{
    echo $unClient->toString().'<br>';
}

//on teste la mise à jour
 echo'on met à jour l\'id 1'.'<br>';
$c->setNomClient($c->getNomClient().'sss');
ClientsManager::update($c);
var_dump($c);
$cRecharge = ClientsManager::findById(1);
var_dump($cRecharge);

//on teste la suppression
echo'on supprime un client'.'<br>';
$cSupp=ClientsManager::findById(4);
ClientsManager::delete($cSupp);

//on affiche la liste des clients
echo'Liste des clients'.'<br>';
$tableau = ClientsManager::getList();
foreach($tableau as $unClient)
{
    echo $unClient->toString().'<br>';
}