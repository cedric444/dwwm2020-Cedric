<?php
do {
    $sexe = strtolower (readline("Etes-vous un homme ou une femme?"));
} while($sexe != "homme" && $sexe != "femme" && $sexe != "h" && $sexe != "f");

do {
   $age = readline("Quel âge avez-vous?");
} while (!((int)($age)) && $age <1);

if ($sexe = "homme" || $sexe = "h") {
    if ($age > 20) {
        echo "Vous devez payer l'impôt";
    } else {
        echo "Vous ne devez pas payer l'impôt.";
    }
} else if ($sexe = "femme" || $sexe = "f") {
    if(($age > 18) && ($age < 35)) {
        echo "Vous devez payer l'impôt.";
    } else {
        echo "Vous ne devez pas payer l'impôt.";
    }
}
