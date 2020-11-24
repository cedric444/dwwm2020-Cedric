<?php


$idClient= $_GET['id'];
$cl= ClientsManager::findById($idClient);

echo'<form method="post" action="index.php?code=updateClient"/>
<input name="idClient" value='.$cl->getIdClient().' type="hidden"/>
<label for="nomClient">Nom du client</label>
<input name="nomClient" value="'.$cl->getNomClient().'"/>
<label for="prenomClient">Prenom du client</label>
<input name="prenomClient" value="'.$cl->getPrenomClient().'"/>
<label for="codePostal">Code postal</label>
<input name="codePostal" value="'.$cl->getCodePostal().'"/>
<label for="ville">Ville</label>
<input name="ville" value="'.$cl->getVille().'"/>';

echo'<button type="submit">Modifier</a></button>
<button type="reset"><a href=index.php?code=listeClients">Retour</a></button></form>';