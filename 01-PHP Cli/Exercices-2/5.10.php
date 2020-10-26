<?php

// On définit les fonctions dont on va avoir besoin
function demandeEntier($phrase) {
    do{
        do{
            $nombre = readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_int($nombre*1));
    return $nombre;
}

function factorielle($nombre) {
    $factorielle = 1;
    for ($i=1; $i<=$nombre; $i++) {
        $factorielle = $factorielle * $i; 
    }
    return $factorielle;
}

$nombrePartants = demandeEntier("Combien y a-t-il de chevaux partants?");
$nombreJoués = demandeEntier("Combien de chevaux avez-vous joué?");

$X = factorielle($nombrePartants) / factorielle($nombrePartants - $nombreJoués);
$Y = factorielle($nombrePartants) / (factorielle($nombreJoués) * factorielle($nombrePartants - $nombreJoués));

echo "Dans l'ordre, vous avez une chance sur " . $X . " de gagner.\n Dans le désordre, vous avez une chance sur " . $Y . "de gagner.";
