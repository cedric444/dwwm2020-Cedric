<?php

if(isset($_SESSION['users']) && $_SESSION['users']->getRole()==1)
{
    echo'<h3>Je suis administrateur</h3>';
}
header("url=index.php?codePage=accueil");