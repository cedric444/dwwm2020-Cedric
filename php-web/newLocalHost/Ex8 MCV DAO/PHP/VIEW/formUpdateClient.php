<?php

include 'head.php';
include 'header.php';

$idClient= $_GET["id"];
$cl= ClientsManager::findById($idClient);

echo'<form method="post" action="updateClient.php">
<input name"idClient" value="'.$cl->getIdClient().'" type="hidden">
<label for="nomClient">Nom du client</label>
<input name="nomClient" value="'.$cl->getNomClient().'"/>
<label for="prenomClient">Prenom du client</label>
<input name="prenomClient" value="'.$cl->getPrenomClient().'"/>
<label for="codePostal">Code postal</label>
<input name="codePostal" value="'.$cl->getCodePostal().'"/>
<label for="ville">Ville</label>
<input name="ville" value="'.$cl->getVille().'"/>';

echo'<button type="submit"><a href="updateClient.php">Modifier</a></button>
<button type="reset"><a href="../../index.php">Retour</a></button></form>';