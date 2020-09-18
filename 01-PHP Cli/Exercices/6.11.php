<?php
$array = array(4, 8, 7, 12);
$array2 = array(3, 6);
$produit1 = 0;
$produit2 = 0;
$schtroumpf = 0;
for($i=0; $i<4;$i++) {
    $produit1 = $array[$i] * $array2[0];
    $produit2 = $array[$i] * $array2[1];
    $schtroumpf = $schtroumpf + $produit1 + $produit2;
}
echo $schtroumpf;