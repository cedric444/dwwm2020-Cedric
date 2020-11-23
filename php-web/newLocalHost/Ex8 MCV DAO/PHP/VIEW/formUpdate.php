<?php


$idProduit= $_GET["id"];
$produit= ProduitsManager::findById($idProduit);

echo'<form method="POST" action="update.php">
<input name="idProduit" value="'.$produit->getIdProduit().'"type="hidden"/>
<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" value ="'.$produit->getLibelleProduit().'" placeholder="libelle produit">
<label for="prix">Prix : </label>
<input name="prix" value ="'.$produit->getPrix().'" placeholder="prix">
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" value ="'.$produit->getDateDePeremption().'"placeholder="date de peremption">';
echo'<button type="submit">Modifier</button>
<button type="reset"><a href="index.php?code=liste">Annuler</a></button>';

