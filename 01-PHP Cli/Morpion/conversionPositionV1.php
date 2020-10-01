<?php
function conversionPosition($coordonnee, $jeu)
{
    if ($jeu == 'm')
    {
        $coordonnee = strtoupper($coordonnee);
        if (ctype_alpha($coordonnee[0])) //La lettre est en premier
        {

            $alpha = $coordonnee[0];
            $numCol = ord($alpha) - ord("A");
            if (strlen($coordonnee) == 3) // Ligne a 2 digits
            {
                $chiffre = 10 * $coordonnee[1] + $coordonnee[2]; // on transforme [1,5] en 15
            }
            else
            {
                $chiffre = $coordonnee[1];
            }
        }
        else // La lettre est en dernier
        {
            $longueur = strlen($coordonnee);
            $alpha = $coordonnee[$longueur - 1];
            $numCol = ord($alpha) - ord("A");

            if ($longueur == 3)
            {
                $chiffre = 10 * $coordonnee[0] + $coordonnee[1];
            }
            else
            {
                $chiffre = $coordonnee[0];
            }
        }
        $tabCord[0] = $chiffre - 1;
        $tabCord[1] = $numCol;
        return $tabCord;
    }
    else
    {
        $coordonnee = strtoupper($coordonnee);
        $numCol = ord($coordonnee) - ord("A");
    }
    return $numCol;
}