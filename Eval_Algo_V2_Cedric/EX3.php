<?php
$score = [7, 19, 7, 18, 12, 16, 19, 2, 13, 8, 13, 5, 3, 14, 11, 15, 19, 20, 4, 15];

echo $score;
$somme = 0;
$moyenne = 0;
$superieur = 0;
$plusGrand = 0;
for($i = 0; $i <= count($score); $i++)
{
    $somme = $somme + $score[$i];
    if ($score[$i] > 10)
    {
        $superieur++; 
    }
    if ($score[$i] > $plusGrand)
    {
        $plusGrand = $score[$i];
        $imax = $i + 1; 
    }
}
$moyenne = $somme / count($score);
echo"La somme des scores est de ".$somme.". La moyenne est de ".$moyenne."\nIl y a ".$superieur." scores au dessu de 10.\n
Le plus haut score est de ".$plusGrand.", il a été réalisé par la personne n° ".$imax."\n";
