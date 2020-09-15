<?php
$sexe = readline("Etes-vous un homme ou une femme?");
while ($sexe != "homme" || $sexe != "femme" || $sexe != "Homme" || $sexe != "Femme" || $sexe != "H"|| $sexe != "F" || $sexe != "h" || $sexe != "f"){
    echo"Réponse invalide.";
    $sexe = readline("Etes-vous un homme ou une femme?");
}
$age = readline("Quel âge avez-vous?");