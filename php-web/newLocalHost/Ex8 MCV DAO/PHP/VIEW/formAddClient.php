<?php


echo'<form method="POST" action="index.php?code=add2">
<label for="nomClient">Nom du client</label>
<input name="nomClient" placeholder="nom">
<label for="prenomClient">Prenom du client</label>
<input name="prenomClient" placeholder="prenom">
<label for="codePostal">Code postal</label>
<input name="codePostal" placeholder="code postal">
<label for="ville">Ville</label>
<input name="ville" placeholder="ville">';

echo'<button type="submit"><a href="index.php?code=add2">Ajouter</a></button>
<button type="reset"><a href="index.php?code=default2">Retour</a></button></form>';
