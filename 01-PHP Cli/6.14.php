<?php
$somme = 0;
do {
    do {
        $nombre = readline("Combien de notes allez-vous entrer? ");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
for($i=0;$i<$nombre;$i++) {
    do {
        do {
            $note = readline("Entrez la note: ");
        }while(!is_numeric($note));
    }while(!is_int($note*1));
    $array[] = $note;
    $somme += $note;
}
$moyenne = $somme / ($i+1);
$superieures = 0;
foreach($array as $elt) {
    if ($elt > $moyenne) {
        $superieures++;
    }
}
echo $superieures;