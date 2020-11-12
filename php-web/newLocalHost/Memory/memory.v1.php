<?php
if (file_exists("head.php"))
{
    include ("head.php");
}
else
{
    echo 'erreur';
}
echo'<page>';
if (file_exists("header.php"))
{
    include ("header.php");
}
else
{
    echo'erreur';
}
//On initialise un tableau pour la répartition aléatoire des images
for ($i=1; $i<9; $i++)
{
    $tab[]= $i;
    $tab[]= $i;
}

for ($i=1; $i<5; $i++)
{
    echo '<div class="ligne">';
    for($j=1; $j<5; $j++)
}