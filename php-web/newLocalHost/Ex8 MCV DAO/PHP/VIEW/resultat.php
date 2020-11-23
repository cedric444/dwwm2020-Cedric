<?php
include 'head.php';
include 'header.php';

$reponse= new Produits($_POST);
var_dump($reponse);
ProduitsManager::add($reponse);

header('Location:../../index.php');