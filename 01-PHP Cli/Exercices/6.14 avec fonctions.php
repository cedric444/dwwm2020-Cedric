<?php
require("Fonctions.php");
$nombre = demanderEntier("Combien de notes y a-t-il? ");
$array = creerTableauTaille($nombre);
$moyenne = array_sum($array)/count($array);
$superieur = 0;
for($i=0; $i<$nombre; $i++)
{
    if($array[$i] > $moyenne)
    {
        $superieur++;
    }
}
echo"le nombre de notes supérieures à la moyenne de la classe est de ".$superieur.".\n";