<?php
do {
    do {
    $scoreUn = readline("Quel est le score du candidat 1?");
    }while (!is_numeric($scoreUn));
}while(!is_int($scoreUn*1));