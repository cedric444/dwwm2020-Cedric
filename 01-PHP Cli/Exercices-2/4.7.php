<?php
do {
    $age = strtoupper(readline("Avez-vous plus de 25 ans?(O/N)"));
}while($age != "O" && $age != "N");
do {
    $permis = strtoupper(readline("Avez-vous le permis depuis plus de 2 ans?(O/N)"));
}while($permis != "O" && $permis != "N");
do { 
    $nombreAccidents = readline("Combien avez-vous eu d'accidents?");
}while (!(ctype_digit($nombreAccidents)));
do{
    $temps = strtoupper(readline("Etes-vous chez nous depuis plus d'un an? (O/N)"));
}while($temps != "O" && $permis != "N");
if ($permis == "O") {
    if(($age == "N" && $nombreAccidents == 1) || ($age == "O" && $nombreAccidents == 2)){
        $tarif = 1;
    } else if(($age == "N" && $nombreAccidents == 0) || ($age == "O" && $nombreAccidents == 1)) {
        $tarif = 2;
    } else if ($age == "O" && $nombreAccidents == 0) {
        $tarif = 3;
    }
}
if ($permis == "N") {
    if (($age == "N" && $nombreAccidents == 0) || ($age == "O" && $nombreAccidents == 1)) {
        $tarif = 1;
    }else if ($age == "O" && $nombreAccidents == 0) {
        $tarif = 2;
    }
}
if ($temps == "O") {
    $tarif++;
}
switch($tarif) {
    case 1:
        echo "Vous êtes au tarif rouge.";
        break;
    case 2:
        echo "Vous êtes au tarif orange.";
        break;
    case 3:
        echo "Vous êtes au tarif vert.";
        break;
    case 4:
        echo "Vous êtes au tarif bleu.";
        break;
    default:
        echo "Nous ne pouvaons vous assurer.";
}