<?php

require('PHP/VIEW/Outils.php');

Parametres::init();

DbConnect::init();

session_start();


$routes= [
    // "testClients"=>["PHP/MODEL/TESTMANAGER/", "TestClientsManager", "test de clientsManager"],
    // "testProduits"=>["PHP/MODEL/TESTMANAGER/", "TestProduitsManager", "test de ProduitsManager"],
    // "testRepresentants"=>["PHP/MODEL/TESTMANAGER/", "TestRepresentantsManager", "test de RepresentantsManager"],
    // "testVentes"=>["PHP/MODEL/TESTMANAGER/", "testVentesManager", "test de VentesManager"],
    // "testUsers"=>["PHP/MODEL/TESTMANAGER/", "testUsersManager", "test des utilisateurs"],
    // "testRoles"=>["PHP/MODEL/TESTMANAGER/", "testRolesManager", "test des roles"],
    "default"=>["PHP/VIEW/", "Accueil", "Accueil"],
    "listeClients"=>["PHP/VIEW/", "ListeClients", "Liste des clients"],
    "listeProduits"=>["PHP/VIEW/", "ListeProduits", "Liste des produits"],
    "listeRepresentants"=>["PHP/VIEW/", "ListeRepresentants", "Liste des représentants"],
    "listeVentes"=>["PHP/VIEW/", "ListeVentes", "Liste des ventes"],
    "listeUsers"=>["PHP/VIEW/", "listeUsers", "listes des utilisateurs"],
    "listeRoles"=>["PHP/VIEW/", "listeRoles", "Liste des roles"],
    "formClients"=>["PHP/VIEW/", "formClients", "formulaire clients"],
    "formProduits"=>["PHP/VIEW/", "formProduits", "formulaire produits"],
    "formRepresentants"=>["PHP/VIEW/", "formRepresentants", "formulaire representants"],
    "formVentes"=>["PHP/VIEW/", "formVentes", "formulaire ventes"],
    "formUsers"=>["PHP/VIEW/", "formUsers", "formulaire utilisateurs"],
    "formRoles"=>["PHP/VIEW/", "formRoles", "formulaire roles"],
    "actionClients"=>["PHP/VIEW/", "actionClients", "Action sur les clients"],
    "actionProduits"=>["PHP/VIEW/", "actionProduits", "Action sur les produits"],
    "actionRepresentants"=>["PHP/VIEW/", "actionRepresentants", "Action sur les representants"],
    "actionVentes"=>["PHP/VIEW/", "actionVentes", "Action sur les ventes"],
    "actionUsers"=>["PHP/VIEW/", "actionUsers", "Action sur les utilisateurs"],
    "actionRoles"=>["PHP/VIEW/", "actionRoles", "Action sur les roles"],
];


if(isset($_GET["code"]))
{

	$page=$_GET["code"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}