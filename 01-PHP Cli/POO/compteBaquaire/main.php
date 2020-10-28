<?php

function chargerClasse($classe)
{
  require $classe . '.class.php'; //on inclut la classe correspondante au paramètre passé.
}
spl_autoload_register('chargerClasse'); //on enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$compteClient = new Compte(["numéro"=>"50236R", "montant"=>"120"]);
$livretClient = new Livret(["numéro"=>"45789L","montant"=>"1200"]);
$client1 = new Client (["nom"=>"Dupont", "prenom"=>"Paul", "compte"=>$compteClient, "livret"=>$livretClient]);

echo $client1->toString();
echo $client1->recevoir(50);