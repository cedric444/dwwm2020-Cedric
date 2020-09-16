<?php
do {
    do {
        $nombre =readline ("Entrez un nombre: ");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
$factorielle = 1;
for($i=1; $i<=$nombre; $i++) {
    $factorielle = $factorielle * $i;
}
echo $factorielle;