<?php

function chargerClasse($classe)
{
    require $classe . '.class.php';
}
spl_autoload_register('chargerClasse');

$compteClient = new Compte(["Numero"=>"50236R", "Montant"=>"120"]);
$livretClient = new Livret(["Numero"=>"45789L", "Montant"=>"1200"]);
$client = new Client (["Nom"=>"Dupont", "Prenom"=>"Paul", "Compte"=>$compteClient, "Livret"=>$livretClient]);

echo $client->toString()."\n";

$credit = "50";
echo"Le client reçoit ".$credit."\n";
$client->recevoir($credit);

echo "\n".$client->toString();

$depense = "10";
echo "Le client depense ".$depense."\n";
$client->depenser($depense);
echo "\n".$client->toString()."\n";

$epargne = "100";
echo "Le client epargne ".$epargne."\n";
$client->epargner($epargne);
echo $client->toString()."\n";



