<?php

// On déclare les tableaux
for($i= 0; $i<6; $i++)
{
    $avion = ["BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
    $codeAvion = ["BO", "AB", "LJ", "DC", "CO", "AN"];
    $vitesseCroisiere = [800, 950, 700, 900, 1400, 560];
    $rayonAction = [10000, 12000, 4500, 8000, 16000, 2500];
        
}
do
{
    $code = readline("Entrer le code de l'avion : ");

    if($code = $codeAvion[$i])
     {
        echo"Avion : ".$avion[$i]." Vitesse : ".$vitesseCroisiere[$i]." Rayon d'action : ".$rayonAction[$i]."\n";
    } 
     
    $demandeStat = readline("Voulez-vous éditer les statistiques (O/N) ");
    if($demandeStat = "O")
    {
    
        $vitesseMax = max($vitesseCroisiere);
        echo"L'avion qui vole le plus vite est le CONCORDE à ".$vitesseMax." km/h\n";
        $somme =0;
        for($i=0; $i<6; $i++)
        {
            $somme += $rayonAction[$i];
        }
        $moyenne = $somme / count($rayonAction);
        echo"La moyenne des rayons d'action est de : ".$moyenne."\n";
    }
}


    
   
