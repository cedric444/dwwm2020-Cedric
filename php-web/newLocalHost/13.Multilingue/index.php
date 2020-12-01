<?php

function ChargerClasse($classe)                                 //On charge toutes les classes nécessaires
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");


function afficherPage($page)
{
    $chemin= $page[0];
    $nom= $page[1];
    $titre= $page[2];

    include "PHP/VIEW/Head.php";
    include "PHP/VIEW/Header.php";
    include "PHP/VIEW/Nav.php";
    include $chemin. $nom. '.php';   //chargement de la page en fonction du nom et du chemin
    include "PHP/VIEW/Footer.php";
}

/* Gestion des langues*/

if(isset($_GET['lang']))
{
    $_SESSION['lang']= $_GET['lang'];
}
if(isset($_SESSION ['lang']))
{
    $lang= $_SESSION['lang'];
}
else
{
    $lang = 'FR';
}

function texte($codeTexte)
{
    global $lang;
    return TexteManager::findByCode($lang, $codeTexte);
}


function crypte($mot)
{
    return md5(md5($mot)) . (strlen($mot)*3);
}


DbConnect::init();                   //Activation de la connection à la base de données
session_start();
/* On crée un tableau de redirection. En fonction du code, on choisit la page à afficher*/
$routes=[
    "default"=>["PHP/VIEW/", "Accueil", "Accueil"],
    "liste"=>["PHP/VIEW/", "ListeProduit", "Liste de produits"],
    "detail"=>["PHP/VIEW/", "Edit", "Détail du produit"],
    "test"=>["PHP/MODEL/", "Test", "Test manager"],
    "listeClients"=>["PHP/VIEW/", "ListeClients", "Liste des clients"],
    "detailClient"=>["PHP/VIEW/", "EditClient", "Détail du client"],
    "formProduit"=>["PHP/VIEW/", "FormProduit", "Formulaire produits"],
    "formClient"=>["PHP/VIEW/", "FormClient", "Formulaire clients"],
    "actionProduit"=>["PHP/VIEW/", "ActionProduit", "Action sur les produits"],
    "actionClient"=>["PHP/VIEW/", "ActionClient", "Action sur les clients"],
    "formInscription"=>["PHP/VIEW/", "FormInscription", "Formulaire Inscription"],
    "actionInscription"=>["PHP/VIEW/", "ActionInscription", "Inscription"],
    "formConnexion"=>["PHP/VIEW/", "FormConnexion", "Formulaire Connexion"],
    "actionConnexion"=>["PHP/VIEW/", "ActionConnexion", "Connexion"],
    "admin"=> ["PHP/VIEW/", "Admin", "admin"],
    "user"=> ["PHP/VIEW/", "User", "user"],
    "accueil"=> ["PHP/VIEW/", "Accueil", "Accueil"]   
];

if(isset($_GET['code']))
{
    $code= $_GET['code'];

    if(isset($routes[$code]))
    {
        afficherPage($routes[$code]);
    }
    else
    {
        afficherPage($routes['default']);
    }
}
else
{
    afficherPage($routes['default']);
}




include "PHP/VIEW/footer.php";