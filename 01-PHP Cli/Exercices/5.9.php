<?php
do {
    do {
        $prix = readline ("Quel est le prix de l'article ?");
    }while(!is_numeric($prix));
}while(!is_int($prix) && $prix != 0);
$sommeDue = $sommeDue + $prix;

do {
    do {
        $sommePayee = readline("Quelle somme avez-vous donné?");
    }while(!is_numeric($sommePayee));
}while(!is_int($sommePayee*1));

$remise = $sommePayee - $sommeDue;

