<?php
$prixHT = readline("Quel est le prix de cet arcticle?");
$nombreArticles = readline("Combien d'articles avez-vous acheté?");
$tauxTVA = readline("Quel est le taux de la TVA?");
if ($tauxTVA > 1) {
    $tauxTVA = $tauxTVA / 100;
}
$prixTTC = $prixHT+$prixHT*$tauxTVA;
$prixTotalTTC = $nombreArticles*$prixTTC;
echo "Le prix total TTC est de " . $prixTotalTTC . ".";

