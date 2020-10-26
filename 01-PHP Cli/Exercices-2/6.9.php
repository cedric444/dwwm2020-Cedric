<?php
function sommeElementsTableau($array) {
    $somme = 0;
    foreach($array as $elt) {
        $somme += $elt; 
    }
}