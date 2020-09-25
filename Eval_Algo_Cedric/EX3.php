<?php
echo" Racine de l'équation du 2nd degré\n\t\tY= aX² +bX + c\n";
// On crée une boucle do while
do
{
    $a = readline("Quelle est la valeur de a : \n");                                                                          // On définit les différentes variables de départ
    $b = readline("Quelle est la valeur de b : \n");
    $c = readline("Quelle est la valeur de c : \n");
    // On définit les condition pour lesquelles l'équation est fausse
    if($a = 0 Xor $b = 0 Xor $c = 0)
    {
        $x = -($c / $b);
        echo"L'équation est du premier degré !\nL'équation s'annule pour x=-(c/b) : ".$x."\n";
    }
    else if ($a = 0 && $b =0 || $a = 0 && $c = 0 || $b = 0 && $c = 0)
    {
        echo"L'équation n'en est plus une !!!";
    }

    $d = pow($b, 2) - 4 * $a * $c;
    
    // On développe les différentes possiblités avec des conditions
    if($d == 0)
    {
        $x = $b / (2 * $a);
        $x = -$x;                                                                                        // On définit la variable $x(x1 = x2)
        echo"L'équation possède une racine double :\nd= ".$d."\nx1=x2= ".$x."\n";
    }
    else if($d < 0)
    {
        echo"L'équation ne possède pas de racine réelle : \nd = ".$d."\n";
    }
    else if($d > 0)
    {
        $x1 = (-$b + sqrt($d))/(2 * $a);                                                                                       // On définit les deux variable $x1 et $x2  
        $x2 = (-$b - sqrt($d))/(2 * $a);    
        echo"L'équation possède 2 racines distinctes : \nd= ".$d."\nL'équation s'annule pour :\nx1= ".$x1."\nx2= ".$x2."\n";
    }    
    $continue = readline("Voulez-vous continuer ? ");                                                                          // On demande à l'utilisateur si il veut continuer
}while($continue != "N");
echo"Au revoir et à bientôt!";