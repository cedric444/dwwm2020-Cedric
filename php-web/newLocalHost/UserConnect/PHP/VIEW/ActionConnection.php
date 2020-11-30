<?php
$user = UsersManager::findByPseudo($_POST['pseudo']);
if($user != false)
{
    if(crypte($_POST['motDePasse'])== $user->getMotDePasse())
    {
        echo'la connexion est réussie';
        $_SESSION['users']= $user;
        header("refresh:3; url=index.php?codePage=acceuil");
    }
    else
    {
        echo'Mot de passe incorrect';
        header("refresh:3; url=index.php?codePage=connection");
    }
}
else
{
    echo'Le pseudo n\'existe pas';
    header("refresh:3; url=index.php?codePage=connection");
}