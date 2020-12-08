<?php

require('PHP/VIEW/Outils.php');

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';

/***Fin de la gestion des langues */

$routes= [
    // "testClients"=>["PHP/mL/TESTMANAGER/", "TestClientsManager", "test de clientsManager"],
    // "testProduits"=>["PHP/mL/TESTMANAGER/", "TestProduitsManager", "test de ProduitsManager"],
    // "testRepresentants"=>["PHP/mL/TESTMANAGER/", "TestRepresentantsManager", "test de RepresentantsManager"],
    // "testVentes"=>["PHP/mL/TESTMANAGER/", "testVentesManager", "test de VentesManager"],
    // "testUsers"=>["PHP/mL/TESTMANAGER/", "testUsersManager", "test des utilisateurs"],
    // "testRoles"=>["PHP/mL/TESTMANAGER/", "testRolesManager", "test des roles"],
    "default"=>["PHP/VIEW/", "Accueil", "Accueil"],
    "listeClients"=>["PHP/VIEW/", "ListeClients", "Liste des clients"],
    "listeProduits"=>["PHP/VIEW/", "ListeProduits", "Liste des produits"],
    "listeRepresentants"=>["PHP/VIEW/", "ListeRepresentants", "Liste des représentants"],
    "listeVentes"=>["PHP/VIEW/", "ListeVentes", "Liste des ventes"],
    "listeUsers"=>["PHP/VIEW/", "ListeUsers", "listes des utilisateurs"],
    "listeRoles"=>["PHP/VIEW/", "ListeRoles", "Liste des roles"],
    "formInscription"=>["PHP/VIEW/", "FormInscription", "Formulaire inscription"],
    "formConnexion"=>["PHP/VIEW/", "FormConnexion", "Formulaire connexion"],
    "formClients"=>["PHP/VIEW/", "FormClients", "formulaire clients"],
    "formProduits"=>["PHP/VIEW/", "FormProduits", "formulaire produits"],
    "formRepresentants"=>["PHP/VIEW/", "FormRepresentants", "formulaire representants"],
    "formVentes"=>["PHP/VIEW/", "FormVentes", "formulaire ventes"],
    "formUsers"=>["PHP/VIEW/", "FormUsers", "formulaire utilisateurs"],
    "formRoles"=>["PHP/VIEW/", "FormRoles", "formulaire roles"],
    "actionInscription"=>["PHP/VIEW/", "ActionInscription", "Action pour inscription"],
    "actionConnexion"=>["PHP/VIEW/", "ActionConnexion", "Action pour connexion"],
    "actionDeconnexion"=>["PHP/VIEW/", "ActionDeconnexion", "Action pour deconnexion"],
    "actionClients"=>["PHP/VIEW/", "ActionClients", "Action sur les clients"],
    "actionProduits"=>["PHP/VIEW/", "ActionProduits", "Action sur les produits"],
    "actionRepresentants"=>["PHP/VIEW/", "ActionRepresentants", "Action sur les representants"],
    "actionVentes"=>["PHP/VIEW/", "ActionVentes", "Action sur les ventes"],
    "actionUsers"=>["PHP/VIEW/", "ActionUsers", "Action sur les utilisateurs"],
    "actionRoles"=>["PHP/VIEW/", "ActionRoles", "Action sur les roles"],
];


if(isset($_GET["c"]))
{

	$page=$_GET["c"];

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