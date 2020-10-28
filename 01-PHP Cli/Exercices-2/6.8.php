<?php
do {
    do {
        $nombre = readline("Combien de valeurs allez-vous saisir?");
    }while(!is_numeric($nombre));
}while(!is_int($nombre*1));
for($i=0; $i<$nombre; $i++) {
    do {
        do {
            $valeur =readline("Entrez la valeur: ");
        }while(!is_numeric($valeur));
    }while(!is_int($valeur*1));
    $array[] = $valeur;
}
$negatif = 0;
$positif = 0;
foreach($array as $elt) {
    if ($elt < 0) {
        $negatif++;
    } else {
        $positif++;
    }
}
echo "Le nombre de valeurs négatives: ".$negatif.".\n Le nombre de valeurs positives: ".$positif.".";