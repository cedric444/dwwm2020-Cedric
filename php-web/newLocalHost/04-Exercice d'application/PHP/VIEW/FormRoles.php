<?php
$mode = $_GET['m'];

switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?c=actionRoles&m=ajouter" method="POST">';

        break;
    }
case "afficher" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form action="index.php?c=actionRoles&m=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?c=actionRoles&m=supprimer" method="POST">';
    break;
    }
}