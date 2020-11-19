<?php
include 'head.php';
include 'header.php';

echo'<form method="POST" action="resultat.php">
<label for="LibelleProduit">Libelle Produit : </label>
<input name="LibelleProduit" placeholder="Libelle Produit">
<label for="Prix">Prix : </label>
<input name="Prix" placeholder="prix">
<label for="DateDePeremption">Date de peremption : </label>
<input name="DateDePeremption" placeholder="Date de peremption">';
echo'<button type="submit">Envoyer</button>';