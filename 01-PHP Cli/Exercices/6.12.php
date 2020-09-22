<?php
// fonctions qui vont être utilisées
require("Fonctions.php");

// demandes à l'utilisateur
$nombre= demanderEntier("Combien de valeurs allez-vous saisir?");
for ($i=0; $i<$nombre; $i++)
{
    $tab[] = creerTableauTaille($nombre);
    $tab2[] = $tab+1;
}
afficherTableau($tab2);
