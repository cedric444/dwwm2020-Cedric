<?php

require "De.Class.php";
require "Joueur.Class.php";
require "MonstreFacile.Class.php";
require "MonstreDifficile.Class.php";

$heros = new Joueur(["Nom"=>"Heros"]);
$monstre = new MonstreFacile([]);
while($heros->estVivant())
{
    $heros->attaque($monstre);
    echo $heros->getNom()." attaque: ".$heros->getLanceLeDe()."\tLe Monstre : ".$monstre->getLanceLeDe()."\n";
    if ($heros->attaque($monstre))
    {
        echo "***\t\théros gagne\n****************** Monstre Suivant\n";
    }
    else
    {
        $monstre->attaque($heros, $degats);
        echo "Monstre attaque: ".$monstre->getLanceLeDe()."\t".$heros->getNom().": ".$heros->getLanceLeDe()."\n";
        
    
    }
}

