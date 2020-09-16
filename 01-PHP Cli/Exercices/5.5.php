<?php
do {
    do {
        $nombre = readline("Entrez un nombre: ");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
$somme = 0;
for ($i=0; $i<=$nombre; $i++) {
    $somme = $somme + $i;
}
echo $somme;