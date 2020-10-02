<?php
require 'Personne.Class.php';
$personnage = new Personne("Dupont", "Marc", 35);
echo $personnage->toString();
$personnage2 = new Personne("Mercier", "Renaud", 40);

echo var_dump($personnage->equalsTo($personnage2));
echo var_dump($personnage->compareTo($personnage2));