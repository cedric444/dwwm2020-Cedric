<?php
$scoreUN = readline ("Quel score a obtenu le candidat 1(%)?");
$scorDeux = readline ("Quel score a obtenu le candidat 2 (%)?");
$scoreTrois = readlline ("Quel score a obtenu le candidat 3 (%)?");
$scoreQuatre= readline ("Quel score a obtenu le candidat 4 (%)?");
if ($scoreUn > 50) {
    echo "Le candidat 1 est élu.";
} else if ($scoreUn >12.5 && ($scoreDeux >50 || $scoreTrois > 50 || $scoreQuatre > 50)) {
    echo "Le candidat 1 a perdu.";
}
