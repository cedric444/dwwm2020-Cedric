<?php
$prix = 1;
$i = 1;
$sommeDue = 0;
while($prix != 0) {
    do {
        do {
            $prix = readline ("Quel est le prix de l'article numéro, " . $i . "?");
        }while(!is_numeric($prix));
    }while(!is_int($prix*1));
    $i++;
    $sommeDue = $sommeDue + $prix;
}
echo "Le client paye : " . $sommeDue . " euros.\n";

do {
    do {
        $sommePayee = readline("Quelle somme avez-vous donné?");
    }while(!is_numeric($sommePayee));
}while(!is_int($sommePayee*1));
$remise = $sommePayee - $sommeDue;

$rendDix = 0;
$rendCinq = 0;
$rendUn = 0;

while($remise >= 10) {
    $rendDix++;
    $remise -= 10;
}
echo "Je vous rend " . $rendDix . " billet(s) de dix euros, ";
while($remise >= 5) {
    $rendCinq++;
    $remise -= 5;
}
echo $rendCinq . " billet(s) de cinq euros, ";
while ($remise >= 1) {
    $rendUn++;
    $remise--;
}
echo $rendUn . " billet(s) de un euro.";