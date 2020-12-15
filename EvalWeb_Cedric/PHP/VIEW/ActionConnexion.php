<?php

$utilisateur=UtilisateursManager::GetByPseudo($_POST['login']);
if($utilisateur!=false)
{
    if(isset($_POST['motDePasse'])==$utilisateur->getMotDePasse())
    {
        $_SESSION=['utilisateur'];
        header("location:index.php?c=accueil");
    }
    else
    {
        echo'Mot de passe incorrect';
        header("refresh:3; url=index.php?c=accueil");
    }    
}
else
{
    echo'Le pseudo n\'existe pas';
    header("refresh:3; url=index.php?c=accueil");
}