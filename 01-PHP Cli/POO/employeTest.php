<?php
require "Employe.Class.php";

function afficheTableau($tab)
{
    echo"\n";
    foreach($tab as $elt)
    {
        echo $elt->toString()."\n";
    }
    echo"\n";
}

$emp[] = new Employe(["nom" => "Dupont", "prenom" => "Charles", "dateEmbauche" => new DateTime("2010-05-16"), "poste" => "commercial", "salaire" => "32", "service" => "commercial"]);
$emp[] = new Employe(["nom" => "Martin", "prenom" => "Guy", "dateEmbauche" => new DateTime("2015-01-04"), "poste" => "comptable", "salaire" => "40", "service" => "comptabilité"]);
$emp[] = new Employe(["nom" => "Lafont", "prenom" => "Marion", "dateEmbauche" => new DateTime("2016-06-08"), "poste" => "responsable RH", "salaire" => "45", "service" => "ressources humaines"]);
$emp[] = new Employe(["nom" => "Durand", "prenom" => "Pascal", "dateEmbauche" => new DateTime("2019-10-09"), "poste" => "maintenance", "salaire" => "30", "service" => "maintenance"]);
$emp[] = new Employe(["nom" => "Fontaine", "prenom" => "Irene", "dateEmbauche" => new DateTime("2019-12-21"), "poste" => " responsable", "salaire" => "48", "service" => "direction"]);

//Ordre de transfert Prime
$dateAujourdhui = new DateTime("now");
$jourDePrime    = (new DateTime())->setDate($dateAujourdhui->format("Y"),07,30);
echo "jour de prime: \n";
var_dump($jourDePrime);
echo "Jour aujourd'hui: \n";
var_dump($dateAujourdhui);

//Masse salariale
$masseSalarialeTotale = 0;
foreach($emp as $elt)
{
    $masseSalarialeTotale += $elt->masseSalariale();
}
echo "La masse salariale totale est de ".$masseSalarialeTotale. "\n";

for($i=0; $i<count($emp); $i++)
{
    if ($jourDePrime < $dateAujourdhui) { //on comparer les dates

        echo "L'ordre de transfert a été envoyé à la banque :" . $emp[$i]->prime() . "\n";

    } else {
        echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
    }
}

echo "\nIl y a ". (Employe::getCompteur())." créé \n";


usort($emp, array("Employe","compareToNomPrenom"));
afficheTableau($emp);

usort($emp,array("Employe", "compareToServiceNomPrenom"));
afficheTableau($emp);

//

    
