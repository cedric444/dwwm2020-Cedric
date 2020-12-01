<?php

$user=UtilisateursManager::findByPseudo($_POST['pseudo']);
if($user!=false)
{
    if(isset($_POST['motDePasse'])==$user->getMotDePasse())
    {
        $_SESSION=['user'];
        header("location:index.php?code=accueil");
    }
    else
    {
        echo texte('Mot de passe incorrect');
        header("refresh:3; url=index.php?code=accueil");
    }    
}
else
{
    echo'Le pseudo n\'existe pas';
    header("refresh:3; url=index.php?code=accueil");
}