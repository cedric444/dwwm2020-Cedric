<?php
include 'head.php';
include 'header.php';

$reponse= new Produits(["libelleProduit"=>$_POST["libelleProduit"], "prix"=>$_POST["prix"], "dateDePeremption"=>$_POST["dateDePeremption"]]);
var_dump($reponse);
ProduitsManager::add($reponse);

/*header('Location:../../index.php');*/