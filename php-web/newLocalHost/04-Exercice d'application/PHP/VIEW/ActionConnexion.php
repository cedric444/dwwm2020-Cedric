<?php

$user=UsersManager::findByPseudo($_POST['pseudo']);
if ($user != false)
{
    if (crypte($_POST['motDePasse']) == $user->getMotDePasse())
    {
        echo 'connexion reussie';
        $_SESSION['user']=$user;
        header("Location:index.php?c=accueil");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?c=formConnexion");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?c=formConnexion");
}