<?php

// Déclaration des tableaux
$avion = ["BOEING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32"];
$codeAvion = ["BO", "AB", "LJ", "DC", "CO", "AN"];
$vitesseCroisiere = [800, 950, 700, 900, 1400, 560];
$rayonAction = [10000, 12000, 4500, 8000, 16000, 2500];

$test = false;
$recherche = "O";
echo"**** STATISTIQUES AVIONS  ****\n";
    
while($recherche == "O")
{
    while (!$test) {
        $code= strtoupper(readline("Entrez le code de l'avion : "));
        for ($i = 0; $i < count($codeAvion); $i++) 
        {
            
            if ($code == $codeAvion[$i]) {
                $test = true;
                echo "Avion : ".$avion[$i]." Vitesse : ".$vitesseCroisiere[$i]." Rayon d'action : ".$rayonAction[$i]."\n";
            } 
        }
        if (!$test)
        {
            echo "Cet avion n'existe pas !";
        }
    }
    $statistique = strtoupper(readline("Voulez-vous editer les statistiques (O/N) ? "));
    if ($statistique == "O")
    {
        $vitesseRapide = 0;
        $imax = 0;
        for($i = 0; $i < count($vitesseCroisiere); $i++)
        {
            if ($vitesseCroisiere[$i] > $vitesseCroisiere[$vitesseRapide])
            {
                $vitesseRapide = $i;
            }
        }
        echo "L'avion le plus rapide est le ".$avion[$vitesseRapide]." à ".$vitesseCroisiere[$vitesseRapide]." km/h\n";
        $moyenne = array_sum($rayonAction) / count($rayonAction);
        echo "La moyenne des rayon d'action est de : ".$moyenne."\n";
    }
    $recherche = strtoupper(readline("Voulez-vous faire une autre recherce (O/N) ? "));
    $test = false;
}
echo "Au revoir et à bientôt!\n";