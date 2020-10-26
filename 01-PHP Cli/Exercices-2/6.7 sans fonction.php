<?php
$somme = 0;
for ($i=0; $i < 9; $i++) {
    do{
        do {
            $note = readline("Entrer une note: ");        
        }while(!is_numeric($note));
    }while(!is_int($note*1));
    $notes[]=$note;
    $somme += $note;
}
$moyenne = $somme / count($notes);
echo "La moyenne des notes est de " . $moyenne .".";
