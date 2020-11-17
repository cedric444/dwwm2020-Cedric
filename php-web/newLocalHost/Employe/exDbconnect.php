<?php

include "Employe.Class.php";
try {
    $db= new PDO('mysql:host=localhost;dbname=ex dbconnect;charset=utf8', 'root', '');
}
catch (Exception $e){
    if ($e->getCode()== 1049)
    {
        echo'Base de données indisponible';
        die();
    }
    else if($e->getCode()==1045)
    {
        echo'La connection a échoué';
        die();
    }
    else{
        die('Erreur : ' .$e->getMessage());
    }
}
echo'on est connecté à la base de données';
$requete= $db->query("SELECT idEmploye, nom, prenom FROM employes WHERE idEmploye=2");
$reponse= $requete->fetch(PDO::FETCH_ASSOC);
var_dump($reponse);
$emp= new Employe($reponse);
var_dump($emp);

/**************Requetes multiples*************/
$requeteM= $db->query('SELECT idEmploye, nom, prenom FROM employes');
while($donnees= $requeteM->fetch(PDO::FETCH_ASSOC))
{
    var_dump($donnees);
    $employes[]= new Employe($donnees);
}
var_dump($employes);

/************requete d'ajout simple************/
$q= $db->exec('INSERT INTO employes(nom, prenom) VALUES("Dubois", "Leonard")');
var_dump($q);

/************requete d'ajout paramétré**********/
$employe= new Employe(["nom"=>"Dufour", "prenom"=>"Patrice"]);

$q= $db->prepare('INSERT INTO employes(nom, prenom) VALUES(:nom, :prenom)');

$q->bindValue(':nom', $employe->getNom());
$q->bindValue(':prenom',$employe->getPrenom());

$reponse= $q->execute();
var_dump($reponse);

/***********requete d'ajout composé************/
$employe= new Employe(["nom"=>"Renaud", "prenom"=>"Emilie"]); //on crée un objet

$q= $db->prepare('INSERT INTO employes(nom, prenom) VALUES("'.$employe->getNom().'", "'.$employe->getPrenom().'")'); //on prépare la requête


$reponse= $q->execute()or die(print_r($db->errorInfo())); //on exécute la requête
var_dump($reponse);


/***********delete*************/
$q = $db->exec('DELETE FROM employes WHERE prenom= "leonard"');
var_dump($q);

