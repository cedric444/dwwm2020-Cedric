<?php
if($_POST['motDePasse']==$_POST['confirmation'])
{
    $u=UsersManager::findByPseudo($_POST['pseudo']);
    if ($u== false)
    {
        $user= new Utilisateurs($_POST);
        $user->setMotDePasse(crypte($user->getMotDePasse()));
        UtilisateursManager::add($user);
    }
    else
    {
        echo texte('Le pseudo existe déjà');
    }
}
echo texte('mot de passe incorrect');


header('Location:index.php?code=listeClients');