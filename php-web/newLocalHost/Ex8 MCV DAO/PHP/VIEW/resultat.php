<?php
include 'head.php';
include 'header.php';

$reponse= new Produits(["libelleProduit"=>$_POST["LibelleProduit"], "prix"=>$_POST["Prix"], "DateDePeremption"=>$_POST["DateDePeremprion"]]);
ProduitsManager::add($reponse);

header('Location:../../index.php');