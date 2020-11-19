<?php
include 'head.php';
include 'header.php';
echo'<h2>Détails du produit</h2>'.'<br>';
$idProduit= $_GET["id"];
$q= ProduitsManager::findById($idProduit);

echo'<div class="detail">'.$idProduit.'
<div class="detail">'.$q->getLibelleProduit($idProduit).'</div><br>
<div class="detail">'.$q->getPrix($idProduit).'</div><br>
<div class="detail">'.$q->getDateDePeremption($idProduit).'</div>';

header('Location:../index.php');


