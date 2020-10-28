<?php
require("Fonctions.php");
$nombre = demanderEntier("Combien de valeurs allez-vous entrer? ");
$array = creerTableauTaille($nombre);
for($i=0; $i<$nombre-1; $i++)
{
    if ($array[$i] +1 == $array[$i+1])
    {
        echo"Les éléments du tableau sont tous consécutifs.";
    }
    else{
        echo"Les éléments du tableau ne sont pas tous consécutifs.";
    }
}