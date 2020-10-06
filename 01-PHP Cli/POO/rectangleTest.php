<?php
require "Rectangle.Class.php";

$rect1 =new Rectangle(["longueur"=> 20, "largeur"=>15]);
var_dump($rect1);
$rect1->afficherRectangle();
