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

    include "PHP/VIEW/head.php";
    include "PHP/VIEW/header.php";
    include $chemin. $nom. '.php';   //chargement de la page en fonction du nom et du chemin
    include "PHP/VIEW/footer.php";
}


DbConnect::init();                   //Activation de la connection à la base de données

/* On crée un tableau de redirection. En fonction du code, on choisit la page à afficher*/
$routes=[
    "default"=>["PHP/VIEW/", "Liste", "Liste de produits"],
    "liste"=>["PHP/VIEW/", "Liste", "Liste de produits"],
    "detail"=>["PHP/VIEW/", "Edit", "Détail du produit"],
    "ajout"=>["PHP/VIEW/", "FormAdd", "Ajouter un produit"],
    "modif"=>["PHP/VIEW/", "FormUpdate", "Modifier un produit"],
    "delete"=>["PHP/VIEW/", "FormDelete", "Effacer un produit"],
    "test"=>["PHP/MODEL/", "Test", "Test manager"],
    "default2"=>["PHP/VIEW/", "ListeClient", "Liste des clients"],
    "detail2"=>["PHP/VIEW/", "EditClient", "Détail du client"],
    "ajout2"=>["PHP/VIEW/", "FormAddClient", "Ajouter un client"],
    "modif2"=>["PHP/VIEW/", "FormUpdateClient", "Modifier un client"],
    "delete2"=>["PHP/VIEW/", "FormDeleteClient", "Effacer un client"]
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


/*echo '<h1>Liste des produits</h1>'.'<br>';
echo'<div class="contenu">
<div class="espace"></div>
<div class="btn"><a href="PHP/VIEW/add.php">Ajouter</a></div>
<div class="espace"></div></div>';
$tableau = ProduitsManager::getList();
foreach($tableau as $elt)
{
    echo'<div class="liste"><div class="elt">'. $elt->getLibelleProduit().'</div>';
    echo'<div class="btn"><a href="PHP/VIEW/formDelete.php?id='.$elt->getIdProduit().'">Supprimer</a></div>
    <div class="btn"><a href="PHP/VIEW/edit.php?id='.$elt->getIdProduit().'">Afficher</a></div>
    <div class="btn"><a href="PHP/VIEW/formUpdate.php?id='.$elt->getIdProduit().'">Modifier</a></div></div>'.'<br>';
}
echo'<br></div>';


include "PHP/VIEW/footer.php";*/