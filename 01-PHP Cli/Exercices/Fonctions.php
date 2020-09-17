<?php
// fonction pour créer un tableau dont on connaît la taille
function creerTableauTaille($valeur, $nombre) {
    for($i=0; $i<=count($nombre); $i++) {
        $tab1[] = $valeur[$i];
    }
}

// fonction pour créer un tableau dont on ne connaît pas la taille
function creerTableau($valeur, $nombre) {
    for($i=0; $i<=$nombre; $i++) {
        $tab1[] = $valeur[$i];
    }
}

// fonction pour afficher un tableau (avec for)
function afficherTableau($tab1) {
    for($i=0; $i<=count($tab1); $i++) {
        echo $tab1[i];
    }
}

// fonction pour afficher un tableau (avec foreach)
function afficherTableau2($tab1) {
    foreach($tab1 as $elt) {
        echo $elt;
    }
}