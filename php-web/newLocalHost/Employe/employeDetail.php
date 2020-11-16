<?php

include 'head.php';
include 'header.php';
include 'test.php';

$idRecherche= $_GET['id'];
foreach($e as $employe)
{
    if($employe->getIdEmploye() == $idRecherche)
    {
        echo'<div class="page">';
        

        echo'<div class="ligne">';
        echo '<div class="nom">'.$employe->getNom().' '.$employe->getPrenom().'</div>
        <div class="espaceHor"></div>
        <div class="tab2">
        <div class="categorie info">Informations</div>
        <div class="information"><ul><li>'./*$employe->getDateEmbauche().' '.*/$employe->getFonction().'</li><li> '.$employe->getSalaireAnnuel().'</li></div></div>
        <div class="tab2">
        <div class="categorie info">Agence</div>
        <div class="agence"><ul><li>'.$employe->getAgence()->getNom().'</li><li>'.$employe->getAgence()->getAdresse().'</li><li>'.$employe->getAgence()->getCodePostal().'</li><li>'.$employe->getAgence()->getVille().'</li><li>'.$employe->getAgence()->getRestauration().'</li></ul></div></div>
        <div class="tab2">
        <div class="categorie info">Poste</div>
        <div class="poste">'.$employe->getService().'</div></div></div></div>';
        
    }
}