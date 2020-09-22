<?php
// tri a bulle

for ($i=0; $i<11; $i++)
{
    $array[] = random_int(0,100);
}
do{
    $yapermut =false;
    for($i=0; $i<count($array)-1; $i++)
    {
        if($array[$i]<$array[$i+1])
        {
            $temp = $array[$i];
            $array[$i] = $array[$i+1];
            $array[$i+1] = $temp;
            $yapermut = true;
        }
        echo$array[$i]."\t";
    }
}while($yapermut);

// tri par insertion

for($i=0; $i<11; $i++)
{
    $array2[] = random_int(0, 100);
}
for($i=0; $i<count($array2)-1; $i++)
{
    $maxi = $array2[$i];
    $pos = $i;
    for($j=0; $j<count($array2)-1; $j++)
    {
        if($array2[$j]>$maxi)
        {
            $maxi = $array2[$j];
            $pos =$j;
        }
    }
    $array2[$pos] = $array2[$i];
    $array2[$i] =$maxi;
}
