<?php
require "Fonctions.php";
$nombreValeurs = demanderEntier("Combien de valeurs allez-vous entrer?");
$array = creerTableauTaille($nombreValeurs);
affichertableau($array);
$consecutif = true;
$i = 0;
$test = $array[$i+1] - $array[$i];
while(($consecutif)&&($i<$nombreValeurs-1))
{
    if ($test > 0)
    {
        if($array[$i]+1 != $array[$i+1])
        {
            $consecutif = false;
        }
    }
    else if($test < 0)
    {
        if($array[$i]-1 != $array[$i+1])
        {
            $consecutif = false;
        }
    }
        $i++;
}
if(!$consecutif)
{
    echo"Tous les éléments du tableau ne sont pas consécutifs.\n";
}
else
{
    echo"Tous les éléments du tableau sont consécutifs.\n";
}

    