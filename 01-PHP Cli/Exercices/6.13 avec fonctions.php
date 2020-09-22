<?php
require("Fonctions.php");
$nombre = demanderEntier("Combien de valeurs allez-vous entrer? ");
$array = creerTableauTaille($nombre);
$arrayMax = 0;
$imax = 0;
for($i=0; $i< $nombre; $i++)
{
    if ($array[$i]>$arrayMax)
    {
        $arrayMax = $array[$i];
        $imax = $i;
    }
}
echo"la plus grande valeur est ".$arrayMax." et sa position est ".$imax.".\n";
// Si n s'adresse à l'utilisateur on dira $imax + 1.    