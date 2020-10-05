<?php
require "Employe.Class.php";

$emp1 = new Employe("Dupont", "Charles", "2010-05-16","commercial" , "32000","commercial");
$emp2 = new Employe("Martin", "Guy", "2015-01-04", "comptable", "40000", "comptabilité");
$emp3 = new Employe("Lafont", "Marion", "2016-06-08", "responsable RH", "45000", "ressources humaines");

$emp1->prime();