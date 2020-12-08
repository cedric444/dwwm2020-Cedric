<?php

if($_POST['motDePasse'] == $_POST['confirmationMotDePasse'])
{
    $user= UsersManager::findByPseudo($_POST['pseudo']);
    if($user==false)
    {
        $u= new Users($_POST);
        $u->setMotDePasse(crypte($u->getMotDePasse()));
        UsersManager::add($u);
    }
    else
    {
        echo'Le pseudo existe déjà';
        header("refresh:3;url=index.php?c=formInscription");
    }
}
else
{
    echo'La confirmation ne correspond pas au mot de passe';
    header("refresh:3;url=index.php?c=formInscription");
}
header("Location: index.php?c=accueil");