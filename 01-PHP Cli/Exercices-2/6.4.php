<?php
for($i=0;$i<6;$i++) {
    $Nb[$i]= $i*$i;
}
foreach($Nb as $elt) {
    echo $elt."\t";
}