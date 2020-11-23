<?php
include 'head.php';
include 'header.php';

echo'<form method="POST" action="resultat.php">
<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" placeholder="libelle produit">
<label for="prix">Prix : </label>
<input name="prix" placeholder="prix">
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" placeholder="date de peremption">';
echo'<button type="submit">Envoyer</button>
<button type="reset"><a href="../../index.php">Annuler</a></button>';