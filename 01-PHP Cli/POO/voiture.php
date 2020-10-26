<?php
require "Voiture.Class.php";
$voiture1 = new Voiture("Renault", "Clio", 2015 , "af-245-Pl");
$voiture2 = new Voiture("Ford", "Clio", 2020 , "af-245-Pl");
echo $voiture1->toString()."\n";
echo $voiture1->compareTo($voiture2)."\n";