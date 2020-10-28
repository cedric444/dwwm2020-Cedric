<?php
do {
    do {
        $nombre = readline("Entrez un nombre");
    } while(!is_numeric($nombre));
}while(!is_int($nombre*1));
for ($i=1; $i<=10; $i++) {
    echo $nombre . " x " . $i . " = " . $nombre*$i . "\n";
}