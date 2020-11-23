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
    "test"=>["PHP/MODEL/", "Test", "Test manager"]
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
/*Test Manager*/

// // on teste la recherche par ID
// echo 'recherche id = 1' . '<br>';
// $p = ProduitsManager::findById(1);
// var_dump($p);

// // on teste l'ajout
// echo "ajout d'un produit" . "<br>";
// $pNew = new Produits(["libelleProduit"=>"cahier", "prix"=> 5, "dateDePeremption"=>"2020-12-31"]);
// ProduitsManager::add($pNew);

// //on affiche la liste des produits
// echo "Liste des articles" . "<br>";
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString(). '<br>';
// }

// // on teste la mise à jour
// echo "on met à jour l'id 1".'<br>';
// $p->setLibelleProduit($p->getLibelleProduit() . 'sss');
// ProduitsManager::update($p);
// $pRecharge = ProduitsManager::findById(1);
// var_dump($pRecharge);

// // on teste la suppression
// echo "on supprime un article"."<br>";
// $pSuppr = ProduitsManager::findById(3);
// ProduitsManager::delete($pSuppr);

// // on affiche la liste des produits
// echo "liste des articles".'<br>';
// $tableau = ProduitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString().'<br>';
// }

// //recherche par id
// echo 'recherche id=1'.'<br>';
// $c= ClientsManager::findById(1);
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

// on teste la mise à jour
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