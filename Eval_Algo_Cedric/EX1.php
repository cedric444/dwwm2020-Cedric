<?php
echo"\tCALCUL D'UN CERCLE";
// On va créer la fonction calculCercle qui prend comme argument le rayon
function calculCercle($rayon)
{
    $rayon = readline("Quel est le rayon du cercle : ");
    $circonference = 2 * pi()*$rayon;
    echo"Sa circonférence est de\t: ".$circonference."\n";
    $surface = pi() * pow($rayon, 2);
    echo"Sa surface est de\t: ".$surface."\n";
}
// On lance la fonction
calculCercle($rayon);
/* on crée une boucle pour demander à l'utilisateur si il veut recommencer
 en vérifiant qu'il rentre de bonnes informations*/
do
{
    $demande = strtoupper(readline("Voulez-vous faire un autre calcul (O/N) : "));
}while($demande!=O && $demande!=N);
if($demande == O)
{
    calculCercle($rayon);
}
else{
    echo"Au revoir et à bientôt!";
}