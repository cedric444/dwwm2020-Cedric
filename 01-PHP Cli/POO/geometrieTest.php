<?php
require "Rectangle.Class.php";
require "Pave.Class.php";
require "Cercle.Class.php";
require "Triangle.Class.php";
require "Pyramide.Class.php";
require "Sphere.Class.php";
$pave = new Pave(["longueur"=> 5, "largeur"=> 3, "hauteur"=> 4]);

$pyramide = new Pyramide(["base"=> 5, "hauteur"=> 8, "hauteur2"=> 12]);
$sphere = new Sphere(["diametre"=> 20]);
echo($pave->toString()."\n");
echo($pyramide->toString()."\n");
echo($sphere->toString()."\n");