<?php
require('Fonctions.php');
echo"\nRemplissage du tableau 1\n";
$nombreValeurs = demanderEntier("Combien de valeurs contiendra le tableau 1? ");
$array1 = creerTableauTaille($nombreValeurs);
echo"\nRemplissage du tableau 2\n";
$nombreValeurs2 = demanderEntier("Combien de valeurs contiendra le tableau 2? ");
$array2 = creerTableauTaille($nombreValeurs2);
$schtroumpf = 0;
for($i=0; $i<$nombreValeurs2; $i++)
{
     foreach( $array1 as $elt)
     {
        $schtroumpf += $array2[$i] * $elt;          
     }
}
echo $schtroumpf."\n"; 