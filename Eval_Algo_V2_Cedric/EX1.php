<?php
do {
    do {
        $temperature = readline("Quelle est la temperature de l'eau (°C)? ");
    }while(!is_numeric($temperature));
}while(!is_int($temperature*1));
if ($temperature < 0) {
    echo"L'eau est à l'état de glace.\n";
}
else if ($temperature > 100) {
    echo"L'eau est à l'état de vapeur.\n";
}
else {
    echo"L'eau est à l'état liquide.\n";
}