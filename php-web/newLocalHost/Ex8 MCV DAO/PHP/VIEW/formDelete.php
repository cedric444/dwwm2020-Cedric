<?php


$idProduit= $_GET["id"];
$q= ProduitsManager::findById($idProduit);

echo'<form method="POST" action="index.php?code=supprime2">
<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" placeholder="libelle produit">
<label for="prix">Prix : </label>
<input name="prix" placeholder="prix">
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" placeholder="date de peremption">
<button type="submit"><a href="index.php?code=supprime">Supprimer</a></button>
<button type="reset"><a href="index.php?code=liste">Retour</a></button>';
