<?php
// fonction pour être sûr que l'utilisateur donne un entier
function demanderEntier($phrase) {
    do {
        do {
            $nombre = readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_int($nombre*1));
    return $nombre;
}
// fonction pour créer un tableau dont on connaît la taille
function creerTableauTaille($tailleTableau) {
    for($i=0;$i<$tailleTableau;$i++) {
        $tab[]=demanderEntier("Entrer une valeur");
    }
    return $tab;
}

// fonction pour créer un tableau dont on ne connaît pas la taille
function creerTableauTermineParZero() {
    do {
        $nombre=demanderEntier("Entrer une valeur");
        if($nombre != 0) {
            $tab[]= $nombre;
        }
    }while($nombre!=0);
        return $tab; 
}

// fonction pour afficher un tableau (avec for)
function afficherTableau($tab) {
    for($i=0; $i<=count($tab); $i++) {
        echo $tab[$i]."\t";
    }
}

// fonction pour afficher un tableau (avec foreach)
function afficherTableau2($tab1) {
    foreach($tab1 as $elt) {
        echo $elt."\t";
    }
}