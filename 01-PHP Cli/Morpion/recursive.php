<?php
function inverserMot($string)
{
    $longueur = strlen($mot);
    if ($longueur == 1)
    {
        return 0;
    }
    else 
    {
        return substr($mot, $longueur -1).inverserMot(substr($mot, 0, $longueur-1));
    }
}
echo inverserMot('mot');