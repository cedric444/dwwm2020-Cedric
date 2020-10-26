<?php
do {
    do {
        $nombre = readline("Combien de valeurs allez-vous entrer? ");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
for ($i=0; $i<$nombre; $i++){
    do {
        do {
            $valeur = readline("Entrer une valeur: ");
        }while(!is_numeric($valeur));
    }while(!is_int($valeur*1));
    $valeur++;
    $tab[] = $valeur;
}
foreach ($tab as $elt) {
    echo $elt . "\t";
}