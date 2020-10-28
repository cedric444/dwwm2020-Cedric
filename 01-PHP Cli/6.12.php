<?php
// fonctions qui vont être utilisées
require("Fonctions.php");

// demandes à l'utilisateur
$nombre= demanderEntier("Combien de valeurs allez-vous saisir?");
for ($i=0; $i<$nombre; $i++) {
    $valeur = demanderEntier("Saisissez une valeur: ");
    $valeur++;
    $tab = creerTableauTaille($valeur, $nombre);
}
afficherTableau2($tab, $valeur);
