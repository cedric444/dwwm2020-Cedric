<?php
do
{
    do
    {
        $nombreValeurs = readline("Combien de valeurs allez-vous entrer?");
    }while(!is_numeric($nombreValeurs));
}while(!is_int($nombreValeurs*1));
for($i=0; $i<$nombreValeurs; $i++)
{
    do{
        do
        {
            $valeur = readline("Entrer une valeur: ");
        }while(!is_numeric($valeur));
    }while(!is_int($valeur*1));
    $array[]= $valeur;
}

for($i=1; $i< $nombreValeurs; $i++)
{
    if($valeur - 1 == $valeur[$i-1])
    {
        echo"Les éléments du tableau sont tous consécutifs.";
    }
    else
    {
        echo"Les éléments du tableau ne sont pas tous consécutifs.";
    }
}
