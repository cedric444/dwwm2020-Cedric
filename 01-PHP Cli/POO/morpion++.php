<?php
/**
 * fonction qui demande un entier à l'utilisateur
 * 
 * @param   string  $invite
 * 
 * @return int
 * 
 */
function DemandeEntier($invite)
{
    do
    {
        do{
            $nombre = readline($invite);
        }while(!is_numeric($nombre));
    }while(!is_int($nombre*1));
}

/**
 * 
 * fonction qui crée un tableau de lignes et colonnes et le rempli de '.'
 * 
 * @param   int     $lig 
 * @param   int     $col
 * 
 * @return   array   
 */
function creationTableau($lig, $col)
{
    for($i=0; $i<$lig; $i++)
    {
        for($j=0; $j<$col; $j++)
        {
            $plateau[$i][$j] = '.'; 
        }
    }
}
/**
 * fonction qui affiche le tableau
 * 
 * @param array $plateau
 * 
 * @return void
 */
function afficheTableau($plateau)
{
    echo"\n";
    $nbCol = count($plateau[0]);
    // on prépare les séparateurs et le titre
    $ligneSuperieure = "";
    $ligneIntermediaire = "";
    $titre = "";
    // on affiche la lgne supérieure
    for ($k=1; $k<$nbCol; $k++) {
        if ($k==$nbCol) {
            $ligneSuperieure .= "_______";
        } else {
            $ligneSuperieure .= "________";
        }
        $ligneIntermediaire .= "_______|";
    }
    // on affiche ligne par ligne
    for ($i=0; $i< count($plateau); $i++) {
        if ($i==0) {
            echo $titre."\n";
            echo $ligneSuperieure."\n";
        } else {
            echo $ligneIntermediaire."\n";
        }
        $chiffre = $i + 1;
        echo "   ".$chiffre;
    
        for ($j =0; $j< $nbCol; $j++) {
            echo "\t".$plateau[$i][$j];
        }
        echo "\t|\n\t|";
    }
    //bas du tableau
    echo $ligneIntermediaire."\n";
}

/**
 * fonction qui demande au joueur de choisir son symbole
 * 
 * @param   int     $nbJoueur
 * 
 * @return array
 */
function choixSymbole($nbJoueur)
{
    for ($i=0; $i<=$nbJoueur; $i++)
    {
        do{
            $symbole = readline("Entrer le symbole du joueur numero ".($i+1).": "."\n");
        }while(!ctype_alnum($symbole) or in_array($symbole, $symboles) === true or strlen($symbole)!=1);
        $symboles[] = $symbole;
        echo "\nLe joueur numéro ".($i+1)." a choisi le symbole ".$symbole."\n";
    }
    return $symboles;
}

/**
 * fonction qui détermine le numéro du joueur suivant.
 * Si joueurEnCours est null, il choisit un numéro au hasard, sinon
 * il renvoie le joueur suivant.
 * Si on est à la fin de la boucle, il revient au premier.
 * 
 * @param int $nbJoueur
 * @param int $joueurEnCours
 * 
 * @return int 
 * 
 */
function JoueurSuivant($nbJoueur, $joueurEnCours)
{
    if($joueurEnCours === null)
    {
        $joueurSuivant = rand(0,$nbJoueur - 1);
    }
    else
    {
        $joueurSuivant = ($joueurEnCours + 1) % $nbJoueur;
    }
    return $joueurSuivant;
}
