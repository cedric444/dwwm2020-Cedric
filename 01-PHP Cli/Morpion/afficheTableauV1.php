<?php
/**
 * affiche le plateau de jeu
 *
 * @param array $plateau
 * @return void
 */
function afficheTableau($plateau, $jeu)
{
    echo "\n";
    $nbCol = count($plateau[0]);
    // on prepare les séparateurs et le titre
    $ligneSuperieure = "";
    $ligneIntermediaire = "";
    $titre = "";
    for ($k = 1; $k <= $nbCol; $k++)
    {
        //on commence à 1 pour afficher les numeros des colonnes
        $titre .= "\t    " . chr($k + ord('A') - 1);
        if ($k == $nbCol)
        {
            $ligneSuperieure .= "_______";
        }
        else
        {
            $ligneSuperieure .= "________";
        }
        $ligneIntermediaire .= "_______|";
    }

    //Affiche ligne par ligne
    for ($i = 0; $i < count($plateau); $i++)
    {
        if ($i == 0) //haut du tableau
        {
            echo $titre . "\n\t ";
            //ligne supérieur du tableau
            echo $ligneSuperieure . "\n";
        }
        else //Centre du tableau
        {
            //ligne intermédiaire

            echo $ligneIntermediaire . "\n";
        }
        if ($jeu == "m")
        {
        //affichage du numéro de la ligne
        $chiffre = $i + 1;
        echo "    " . $chiffre;
        }
        //affichage des élément du tableau
        for ($j = 0; $j < $nbCol; $j++)
        {
            echo "\t|   " . $plateau[$i][$j];
        }
        echo "\t|\n\t|";
    }
    //bas du tableau
    echo $ligneIntermediaire . "\n";

}