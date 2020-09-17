<?php
// fonctions qui vont être utilisées
function demanderEntier($phrase) {
    do {
        do {
            $nombre = readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_int($nombre*1));
    return $nombre;
}

function creerTableauTaille($valeur, $nombre) {
    for($i=0; $i<$nombre; $i++) {
        $tab1[] = $valeur[$i];
    }
}

function afficherTableau2($tab, $elt) {
    foreach($tab as $elt) {
        echo $elt;
    }
}

// demandes à l'utilisateur
$nombre= demanderEntier("Combien de valeurs allez-vous saisir?");
for ($i=0; $i<$nombre; $i++) {
    $valeur = demanderEntier("Saisissez les valeurs.");
    $valeur++;
    $tab = creerTableauTaille($valeur, $nombre);
}
afficherTableau2($tab, $valeur);
