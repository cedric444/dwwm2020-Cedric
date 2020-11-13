<?php
if (file_exists('head.php'))
{
    include ('head.php');
}
else
{
    echo'erreur';
}
if (file_exists('header.php'))
{
    include ('header.php');
}
else
{
    echo'erreur';
}
if (file_exists('listeGroupe.php'))
{
    include ('listeGroupe.php');
}
else
{
    echo'erreur';
}
echo'<div class="ligne">';
foreach($groupe as $elt)
{
    echo'<div class="groupe colonne">
    <div class="nom">'.$elt->getNom().'</div>
    <div class="annee">'.$elt->getAnneeCreation().'</div>
    </div>';
}