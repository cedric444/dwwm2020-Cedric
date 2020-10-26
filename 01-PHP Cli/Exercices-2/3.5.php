<?php
$nombreUn = readline("Entrez un premier nombre: ");
$nombreDeux = readline("Entrez un deuxième nombre: ");
if ($nombreUn == 0 || $nombreDeux == 0) {
    echo "Le produit des deux nombre est nul.";
}
else if ($nombreUn < 0 XOR $nombreDeux < 0) {
    echo "Le produit des deux nombres est négatif.";
}
else {
    echo "Le produit des deux nombre est positif.";
}  
