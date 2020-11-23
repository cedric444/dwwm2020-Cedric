<?php

echo'<h2>Détail du client</h2>';
$idClient= $_GET["id"];
$cl= ClientsManager::findById($idClient);

echo'<div class="liste"><div class="detail">'.$idClient.'</div><div class="espace"></div>
<div class="detail">'.$cl->getNomClient().'</div><div class="espace"></div>
<div class="detail">'.$cl->getPrenomClient().'</div><div class="espace"></div>
<div class="detail">'.$cl->getCodePostal().'</div><div class="espace"></div>
<div class="detail">'.$cl->getVille().'</div><div class="espace"></div></div>
<button type="reset"><a href="index.php?code=default2">retour</a></button>';