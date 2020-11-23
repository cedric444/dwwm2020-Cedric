<?php

$idClient= $_GET["id"];
$cl= ClientsManager::findById($idClient);

echo'<form method="POST" action="index.php?code=supprime2">
<input name= "idClient" value='.$cl->getIdClient().' type="hidden"/>
<label for="nomClient">Nom : </label>
<input name="nomClient" value="'.$cl->getNomClient().'" disabled/>
<label for="prenomClient">Prenom : </label>
<input name="prenomClient"  value="'.$cl->getPrenomClient().'" disabled/>
<label for="codePostal">Code postal : </label>
<input name="codePostal"  value="'.$cl->getCodePostal().'" disabled/>
<label for="ville">ville : </label>
<input name="ville"  value="'.$cl->getVille().'" disabled/>
<button type="submit"><a href="index.php?code=supprime2">Supprimer</a></button>
<button type="reset"><a href="index.php?code=default2">Retour</a></button></form>';