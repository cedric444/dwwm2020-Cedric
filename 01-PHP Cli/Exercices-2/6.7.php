<?php

// fonctions
function demanderEntier($phrase) {
    do {
        do {
            $nombre = readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_int($nombre*1));
    return $nombre;
}

// on crée un tableau
$moyenne = 0;
$somme = 0;
for($i=0; $i<9; $i++) {
    $notes[] = demanderEntier("Quelles est la note " . $i . "?");
    $somme += $notes[$i];
}
echo $moyenne = $somme / $i;


