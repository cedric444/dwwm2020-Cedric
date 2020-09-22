<?php
for($i=0; $i<50; $i++)
{
    $tab[] = random_int(0,100);
    echo $tab[$i];
}
do{
    $yapermut = false;
    for($i=0; $i<count($tab)-1; $i++)
    {
        if($tab[$i]>$tab[$i+1])
        {
            $temp = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $temp;
            $yapermut = true;
        }
        echo$tab[$i]."\t";
    }
}while($yapermut);
