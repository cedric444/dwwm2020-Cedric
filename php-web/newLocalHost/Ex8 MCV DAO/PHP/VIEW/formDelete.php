<?php


$idProduit= $_GET['id'];
$q= ProduitsManager::findById($idProduit);
//var_dump($q);
echo'<form method="POST" action="index.php?code=actionDelete"/>
<input name="idProduit" value='.$q->getIdProduit().' type="hidden">
<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" value="'.$q->getLibelleProduit().'" disabled>
<label for="prix">Prix : </label>
<input name="prix" value="'.$q->getPrix().'" disabled>
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" value="'.$q->getDateDePeremption().'" disables
d>
<button type="submit">Supprimer</a></button>
<button type="reset"><a href="index.php?code=default">Retour</a></button>';
