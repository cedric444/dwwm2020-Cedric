<?php

if (isset($_SESSION['user']) && $_SESSION['user']->getRole==1)
{
    echo texte('Bienvenue').$_SESSION['user']->getPrenomUtilisateur().'!';
}
