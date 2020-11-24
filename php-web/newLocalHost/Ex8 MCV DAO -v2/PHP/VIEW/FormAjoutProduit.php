<?php

echo'<form method="POST" action="index.php?code=actionAjout">
<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" placeholder="libelle produit">
<label for="prix">Prix : </label>
<input name="prix" placeholder="prix">
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" placeholder="date de peremption">';
echo'<button type="submit">Envoyer</button>
<button type="reset"><a href="index.php?code=default">Annuler</a></button>';