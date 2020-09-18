<?php
do {
    do {
        $nombre = readline("Combien de valeurs allez-vous entrer? ");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
for($i=0;$i<$nombre;$i++) {
    do {
        do {
            $valeur = readline("Entrez la valeur: ");
        }while(!is_numeric($valeur));
    }while(!is_int($valeur*1));
    $array[] = $valeur;
}
for($i=1; $i<$nombre; $i++) {
    if ($valeur > $valeur[$i-1]) {
        echo $valeur. " ".$i;
    }
}