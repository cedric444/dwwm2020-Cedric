<?php
require('Fonctions.php');       // on inclut le fichier 'Fonctions.php

$nombreValeurs = demanderEntier("Combien de valeurs vont contenir les tableaux? ");         // La fonction demande et vérifie que la valeur est un entier
$array1 = creerTableauTaille($nombreValeurs);
$array2 = creerTableauTaille($nombreValeurs);

for($i=0; $i<$nombreValeurs; $i++)
{
    echo ($array3[] = $array1[$i] + $array2[$i]."\t");      //A chaque itération, la valeur de l'indice i du tableau 1 sera ajoutée à celle du tableau 2      
}
