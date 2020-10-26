<?php
do { 
    $genre = strtolower(readline("Etes vous un homme ou une femme?(H/F)"));
} while ($genre != "h" && $genre != "f");
do {
    $age = readline("Quel est votre âge?");
} while (!(ctype_digit($age)) && $age < 0);
if (($genre == "h" && $age > 20) || ($genre == "f" && $age > 18 && $age < 35)) {
    echo "Vous devez payer l'impôt.";
} else {
    echo "Vous ne devez pas payer l'impôt.";
}

