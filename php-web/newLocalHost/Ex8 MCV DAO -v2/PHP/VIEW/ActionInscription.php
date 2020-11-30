<?php
var_dump($_POST);
$user= new Utilisateurs($_POST);
var_dump($user);
UtilisateursManager::add($user);

//header('Location:index.php?code=listeClients');