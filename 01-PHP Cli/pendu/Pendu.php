<?php
/**
 * fonction qui permet d'afficher les éléments d'un tableau avec des espaces
 * 
 * @param   array   $tab        affiche le paramètre
 * 
 * @return  void                affiche la sortie
 * 
 */
function afficherTableau($tab)
{
    foreach($tab as $elt)
    {
        echo$elt." ";
    }
}
/*
$t = array('B','O','N','J','O','U','R');
afficherTableau($t);*/

/**
 * fonction qui renvoie un tableau contenant autant de cases que de lettres dans le mot, chaque case contenant un _
 * 
 * @param                   $mot
 * 
 * @return      array       $tab[]     
 */
function coderMot($mot)
{
    $tab = str_split($mot);
    for($i=0;$i<count($tab);$i++)
    {
        $tab[$i] = "_";
    }
    return($tab);
}
/*$test = "bonjour";
afficherTableau(coderMot($test));*/

/**
 * fonction qui cherche toutes es occurences d'une lettre passée en paramètre dans un tableau lui aussi passé en paramètre.
 * elle retourne toutes les positions dans un tableau
 * 
 * @param   string      $lettre
 * @param   array       $tab
 * @param               $depart
 * 
 * @return  array        $positions
 * 
 */
function testerLettre($lettre, $tab, $depart)
{
    for($i=$depart; $i<count($tab); $i++)
    {
        if ($lettre == $tab[$i])
        {
            $pos[$i] = $i;
        }    
    }
    return($pos);
}
/*Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
$positions = testerLettre('O', $t,0);
foreach ($positions as $pos)
{
    echo("position : ".$pos."\n");
}*/

/**
 * fonction qui modifie le tableau passé en paramètre en affectant la lettre à la position passée en paramètre
 * 
 * @param   string    $lettre
 * @param   array     $tab
 * @param             $position
 * 
 * @return  array     $tab
 *    
 */
function ajouterUneLettre($lettre, $tab, $position)
{
    $tab[$position] = $lettre;
    return($tab);
}
/*Echo "Cette méthode doit donner B O N K O U R et ca donne";
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
afficherTableau( ajouterUneLettre('K', $t, 3));*/

/**
 * fonction qui appelle la méthode ajouterUneLettre pour toutes les valeurs contenues dans la liste en paramètre
 * 
 * @param   string      $lettre
 * @param   array       $tab
 * @param               $listePosition
 * 
 * @return  array       $tab
 * 
 */
function ajouterLesLettres($lettre, $tab, $listePosition)
{
    
}