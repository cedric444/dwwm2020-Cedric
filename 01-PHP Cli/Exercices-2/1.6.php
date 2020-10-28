<?php
$a = readline("Entrer un nombre");
$b = readline("entrer un nombre");

$temp = $b;
$b = $a;
$a = $temp;
echo $a . " " . $b;