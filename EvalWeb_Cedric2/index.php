<?php

require('PHP/VIEW/Outils.php');

//Parametres::init();

DbConnect::init();

session_start();

$routes=[
    "default"=>["PHP/VIEW/", "Accueil", "Accueil"],
	"test"=>["PHP/MODEL/", "Test", "Test"],
	"listeEleves"=>["PHP/VIEW/","ListeEleves", "Liste eleves"],
	"formEleves"=>["PHP/VIEW/", "FormEleves", "Formulaire eleves"],
	"actionEleves"=>["PHP/VIEW/", "ActionEleves", "Action eleves"],
	"listeMatieres"=>["PHP/VIEW/", "ListeMatieres", "Liste matieres"],
	"formMatieres"=>["PHP/VIEW/", "FormMatieres", "Formulaire matieres"],
	"actionMatieres"=>["PHP/VIEW/", "ActionMatieres", "Action matieres"],
	"listeSuivis"=>["PHP/VIEW/", "ListeSuivis", "Liste suivis"],
	"formSuivis"=>["PHP/VIEW/", "FormSuivis", "Formulaire suivis"],
	"actionSuivis"=>["PHP/VIEW/", "ActionSuivis", "Action suivis"],
	"listeUtilisateurs"=>["PHP/VIEW/", "ListeUtilisateurs", "Liste utilisateurs"],
	"formUtilisateurs"=>["PHP/VIEW/", "FormUtilisateurs", "Formualaire utilisateurs"],
	"actionUtilisateurs"=>["PHP/VIEW/", "ActionUtilisateurs", "Action utilisateurs"],
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

