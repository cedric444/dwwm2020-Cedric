<?php
for($i=0; $i<9; $i++) {
    do {
        do {
            $note = readline("Entrez la notes: ");
        }while(!is_numeric($note));
    }while(!is_int($note*1));
    $array[] = $note;
}
foreach($array as $elt) {
    echo $elt."\t";
}