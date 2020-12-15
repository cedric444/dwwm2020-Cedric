<?php

require('PHP/VIEW/Outils.php');

//Parametres::init();

DbConnect::init();

session_start();

$routes=[
	"default"=>["PHP/VIEW/", "Accueil", "Accueil"],
	"accueil"=>["PHP/VIEW/", "Accueil", "Accueil"],
	"listeEleves"=>["PHP/VIEW/","ListeEleves", "Gestion des élèves"],
	"listeMatieres"=>["PHP/VIEW/", "ListeMatieres", "Gestion des matières"],
	"listeSuivis"=>["PHP/VIEW/", "ListeSuivis", "Gestion des notes"],
	"listeUtilisateurs"=>["PHP/VIEW/", "ListeUtilisateurs", "Gestion des enseignants"],
	"formEleves"=>["PHP/VIEW/", "FormEleves", "formulaire élèves"],
	"formMatières"=>["PHP/VIEW/", "FormMatieres", "Formulaire matières"],
	"formSuivis"=>["PHP/VIEW/", "FormSuivis", "Formulaire notes"],
	"formUtilisateurs"=>["PHP/VIEW/", "FormUtilisateurs", "Formulaire enseignants"],
	"ActionEleves"=>["PHP/VIEW/", "ActionEleves", "Action sur les élèves"],
	"ActionMatieres"=>["PHP/VIEW/", "ActionMatieres", "Action sur les matières"],
	"ActionSuivis"=>["PHP/VIEW/", "ActionSuivis", "Action sur les notes"],
	"ActionUtilisateurs"=>["PHP/VIEW/", "ActionUtilisateurs", "Action sur les enseignants"],
	"formConnexion"=>["PHP/VIEW/", "FormConnexion","Formulaire de connexion"],
	"ActionConnexion"=>["PHP/VIEW/", "ActionConnexion", "Connexion"],
	"ActionDeconnexion"=>["PHP/VIEW/", "ActionDeconnexion", "Deconnexion"],
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