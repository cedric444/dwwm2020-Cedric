<?php
/**
 * méthode qui renvoie un tableau contenant la position entrée par le joueur
 * 
 * @param   array     $plateau
 * 
 * 
 * @return  array
 */
function selectionPosition($plateau, $symbole)
{
    do
    {
        do//boucle pour verifier si les position existe dans le plateau
        {

            do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
            {

                do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
                {

                    $chaine = readline("$symbole veuillez saisir la position de votre pion: ");

                } while (strlen($chaine) > 3 || strlen($chaine) == 1 || !ctype_alnum($chaine));
            } while (!(ctype_alpha($chaine[0]) xor ctype_alpha($chaine[strlen($chaine) - 1])));

            $positions = conversionPosition($chaine);
            $lig = $positions[0];
            $col = $positions[1];

        } while ($lig >= count($plateau) || $col >= count($plateau[0]));
    } while ($plateau[$lig][$col] != '.');
    return $positions;
}
