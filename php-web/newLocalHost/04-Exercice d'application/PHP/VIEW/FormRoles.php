<?php
$m = $_GET['m'];

switch ($m){
case "ajouter" :
    {
        echo '<form action="index.php?code=actionRoles&m=ajouter" method="POST">';

        break;
    }
case "afficher" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form action="index.php?code=actionRoles&m=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?code=actionRoles&m=supprimer" method="POST">';
    break;
    }
}