<?php
include 'head.php';
include 'header.php';
echo'<h2>Détails du produit</h2>'.'<br>';
$idProduit= $_GET["id"];
$q= ProduitsManager::findById($idProduit);

echo'<div class="liste"><div class="detail">'.$idProduit.'</div><div class="espace"></div>
<div class="detail">'.$q->getLibelleProduit($idProduit).'</div><div class="espace"></div>
<div class="detail">'.$q->getPrix($idProduit).'</div><div class="espace"></div>
<div class="detail">'.$q->getDateDePeremption($idProduit).'</div></div>
<button type="reset"><a href="../../index.php">Retour</a></button>';




