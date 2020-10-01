<?php
/**
 * méthode qui renvoie un tableau contenant la position entrée par le joueur
 * 
 * @param   array     $plateau
 * 
 * 
 * @return  array
 */
function selectionPosition($plateau, $symbole, $jeu)
{
    
    {
        do
        {   
            do//boucle pour verifier si les position existe dans le plateau
            {
                
                do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
                {
                    $numCol = readline("$symbole veuillez entrer la colonne dans laquelle vous voulez mettre votre pion : ");
                    if($jeu == 'M')
                    {
                        do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
                        {
                        
                            $chaine = readline("$symbole veuillez saisir la position de votre pion: ");
                        
                        } while (strlen($chaine) > 3 || strlen($chaine) == 1 || !ctype_alnum($chaine) ||(strlen($numCol) > 1 || !ctype_alpha($numCol)));
                    }   
                } while (!(ctype_alpha($chaine[0]) xor ctype_alpha($chaine[strlen($chaine) - 1])));
                if ($jeu == 'M')
                {
                    $positions = conversionPosition($chaine);
                }
                else
                {
                    $positions = trouverCase($plateau, $numCol);
                }
                $lig = $positions[0];
                $col = $positions[1];

            } while ($lig >= count($plateau) || $col >= count($plateau[0]));
        } while ($plateau[$lig][$col] != '.');
        return $positions;
    }                          
}
