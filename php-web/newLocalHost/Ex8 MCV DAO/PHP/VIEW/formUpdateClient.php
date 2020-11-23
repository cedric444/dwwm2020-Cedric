<?php

include 'head.php';
include 'header.php';

$idClient= $_GET["id"];
$cl= ClientsManager::findById($idClient);

echo'<form method="POST" action="updateClient.php">
<input name"idClient" value="'.$cl->getIdClient().'" type="hidden">;
<label for="nomClient">Nom du client</label>
<input name="nomClient" placeholder="nom">
<label for="prenomClient">Prenom du client</label>
<input name="prenomClient" placeholder="prenom">
<label for="codePostal">Code postal</label>
<input name="codePostal" placeholder="code postal">
<label for="ville">Ville</label>
<input name="ville" placeholder="ville">';

echo'<button type="submit"><a href="updateClient.php">Modifier</a></button>
<button type="reset"><a href="../../index.php">Retour</a></button></form>';