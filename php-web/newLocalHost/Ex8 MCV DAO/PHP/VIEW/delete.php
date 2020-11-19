<?php
include 'head.php';
include 'header.php';
$idProduit= $_GET["id"];
$supp =ProduitsManager::findById($idProduit);
ProduitsManager::delete($supp);

header('Location:../../index.php');
