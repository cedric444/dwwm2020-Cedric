<?php  
function testerLettre($lettre, $tab, $depart)
{
    $tabRec = array_slice($tab, $depart);
    $res = (array_search($lettre, $tabRec));
    if($res === false)
    {
        return[];
    }
    else
    {
        $reponse[] = $res + $depart;
        $pos = array_merge($reponse, testerLettre($lettre, $tab, $res + $depart + 1));
    }
    return $pos;
}
Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
$positions = testerLettre('O', $t,0);
foreach ($positions as $pos)
{
    echo("position : ".$pos."\n");
}
