<?php
$array = array(4, 8, 7, 9, 1, 5, 4, 6);
$array2 = array(7, 6, 5, 2, 1, 3, 7, 4);
for ($i=0; $i<8; $i++) {
    $valeur = $array[$i] + $array2[$i];
    $array3[]= $valeur;
}
foreach($array3 as $elt) {
    echo $elt."\t";
}