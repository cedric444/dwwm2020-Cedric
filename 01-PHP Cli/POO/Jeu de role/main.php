<?php

function ChargerClasse($classe)
{

    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

function lancerJeu($trace)
{
    $joueur = new Joueur(["PV"=>50, "Nom"=>"heros"]);
    while ($joueur->estVivant())
    {
       $monstre = FabriqueDeMonstre();
       while($monstre->getEstVivant() && $joueur->estVivant())
       {
           $joueur->attaque($monstre, $trace);
           if ($monstre->estVivant())
           {
               $monstre->attaque($joueur, $trace);
           }
       }
       if ($trace && $joueur->estVivant)
       {
           echo"*****************************Monstre suivant"."\n";
       }
    }
    echo"Dommage, vous êtes mort...\n";
    echo "Cela dit, vous avez tué ".MonstreFacile::getNombreFacile()." monstres faciles et ".MonstreDifficile::getNombreDifficile(). "monstres difficiles.\n";
    echo"Vous avez ".(MonstreFacile::getNombreFacile() + MonstreDifficile::getNombreDifficile() * 2)." points"."\n"; 
}
function FabriqueDeMonstre()
{
    if (rand(1,2)==1)
    {
        return new MonstreFacile();
    }
    else
    {
        return new MonstreDifficile();
    }
}
do {
    $reponse = strtoupper(readline("Jouer en mode Trace? (O/N)"));
}while($reponse != "O" and $reponse!="N");

if ($reponse == "O")
{
    $trace = true;
}
else{
    $trace = false;
}
lancerJeu($trace);