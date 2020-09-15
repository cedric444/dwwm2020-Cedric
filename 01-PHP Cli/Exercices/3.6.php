<?php
$age = readline("Quel âge a l'enfant?");
switch ($age) {
    case $age > 12 :
        echo'L\'enfant est dans la catégorie "Cadet".';
    break;
    case $age > 9 :
        echo'L\'enfant est dans la catégorie "Minime".';
    break;
    case $age > 7 :
        echo 'L\'enfant est dans la catégorie "pupille".';
    break;
    case $age > 5 :
        echo 'L\'enfant est dans la catégorie "Poussin".';
    break;
    default :
        echo 'L\'enfant n\'entre dans aucune catégorie.';
    break;
}

/*  tests:
    $age = 13
    $age = 12
    $age = 9
    $age = 7
    $age = 5
 */