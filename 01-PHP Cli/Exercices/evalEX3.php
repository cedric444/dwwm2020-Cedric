<?php
// demandes à l'utilisateur
echo"Racine de l'équation du 2nd degré\n\t\tY= aX² + bX + c\n";
do
{
    do
    {
        $a = readline("Quelle est la valeur de a : ");
    }while(!is_numeric($a));
    do{
        $b = readline("Quelle est la valeur de b : ");
    }while(!is_numeric($b));
    do{
        $c = readline("Quelle est la valeur de c : ");
    }while(!is_numeric($c));
// on teste si l'équation est du 2nd degré
    if($a ==0 && $b==0)
    {
        echo"L'équation n'en est plus une !\n";
    }
    else if ($a==0)
    {
        echo"L'équation est du 1er degré !\n";
    }

    else
    {
        $delta = pow($b, 2)-4*$a*$c;         // on déclare la variable $delta
        // on conditionne les différents cas
        if ($delta<0) {
            echo"L'équation ne possède pas de racine réelle :\nd = ".$delta."\n";
        } elseif ($delta==0) {
            $x =-($b/(2*$a));
            echo"L'équation possède une racine double :\nx1=x2= ".$x."\n";
        } elseif ($delta>0) {
            $x1=(-$b+sqrt($delta))/(2*$a);
            $x2=(-$b-sqrt($delta))/(2*$a);
            echo"L'équation possède deux racines distinctes :\nx1= ".$x1."\nx2= ".$x2."\n";
        }
    }
        $continue=strtoupper(readline("Voulez-vous continuer ? "));
    
} while($continue!= "N");
if($continue="N")
{
    echo"Au revoir et à bientôt!";
}
        