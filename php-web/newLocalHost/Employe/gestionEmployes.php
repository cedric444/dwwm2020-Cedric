<?php

include 'head.php';
include 'header.php';
include 'test.php';
echo '<div><h1>Liste du personnel</h1></div>
<div class="espaceHor"></div>
<div class="tab">
<div class="generique">
<div class="libelle">Agence</div>
<div class="libelle">Service</div>
<div class="libelle">Nom</div>
<div class="libelle">Prenom</div></div>';


for($i=0; $i<count($e); $i++)
{
    echo'<div class="infoAgence">
    <a href="employeDetail.php?id='.$e[$i]->getIdEmploye().'">
    <div class="cache">'.$e[$i]->getIdEmploye().'</div>
    <div class="contenu">
    <div class="employe">'.$e[$i]->getService().'</div>
    <div class="employe">'.$e[$i]->getNom().'</div>
    <div class="employe">'.$e[$i]->getPrenom().'</div></a>
    </div><div>';
}