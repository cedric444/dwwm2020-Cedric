<?php
$tab[0] = [0, 3, 6];
$tab[1] = [1, 4, 7];
$tab[2] = [2, 5, 8];
$tiret = " ____";
for($j =0; $j < count($tab)-1; $j++)
{
    echo $tiret;

} 
for($i = 0; $i < count($tab); $i++)   
{  
    echo $tiret."\n";
    echo" | ";
    
    for($j = 0; $j < count($tab); $j++)
    {   
        echo $tab[$i][$j]." | ";
    }
    
    echo"\n";
}
echo $tiret;

