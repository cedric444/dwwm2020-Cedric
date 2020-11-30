<?php
var_dump($_POST);
if($_POST['motDePasse']==$_POST['confirmation'])
{
    $user = UsersManager::findByPseudo($_POST['pseudo']);
    if($user == false)
    {
        $u = new Users($_POST);
        $u->setMotDePasse(md5($u->getMotDePasse()));
        UsersManager::add($u);
    }
    else
    {
        echo'Le pseudo existe déjà';
    }
}
else
{
    echo'mot de passe incorrect';
}
}