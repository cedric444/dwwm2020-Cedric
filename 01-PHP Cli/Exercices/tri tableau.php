<?php
$tab = [15, 12, 18, 35, 5];
for($i=0; $i<count($tab)-1; $i++)
{
    $mini = $tab[$i];
    $pos = $i;
    for($j=$i+1; $j<count($tab); $j++)
    {
        if ($tab[$j] <$mini)
        {
            $mini = $tab[$j];
            $pos = $j;
        }
    }
    $tab[$pos] = $tab[$i];
    $tab[$i] = $mini;
}
for(-$i=0; $i<count($tab); $i++)
{
    echo $tab[$i]."\t";
}