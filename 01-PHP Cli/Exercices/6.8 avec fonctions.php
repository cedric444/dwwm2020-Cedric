<?php
require ('Fonctions.php'); // on inclut le fichier Fonctions.php

$nombreValeurs = demanderEntier("Combien de valeurs allez-vous entrer?");
$tab = creerTableauTaille($nombreValeurs);
$negatif = 0;
$positif = 0;
foreach($tab as $elt) {
    if ($elt < 0) {
        $negatif++;
    } else {
        $positif++;
    }
}
echo"Le nombre de valeurs positives est de: ".$positif.".\nLe nombre de valeurs négatives est de: ".$negatif.".\n"; 
