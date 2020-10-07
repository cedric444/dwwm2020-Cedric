<?php
require "Employe.Class.php";
require "Agence.Class.php";
require "Enfant.Class.php";
function afficheTableau($tab)
{
    echo"\n";
    foreach($tab as $elt)
    {
        echo $elt->toString()."\n";
    }
    echo"\n";
}
$agenceRattache[]=new Agence(["nom"=>"L'Esplanade", "adresse"=>"13, rue de l'Esplanade", "codePostal"=>"75005", "ville"=>"Paris", "Restauration"=>"Entreprise"]);
$agenceRattache[]= new Agence(["nom"=>"Agence du nord", "adresse"=>" 25 Grand-Place", "codePostal"=>"93000", "ville"=>"Saint-denis", "Restauration"=>"Ticket restaurant"]);
$agenceRattache[]=new Agence(["nom"=>"Agence du sud", "adresse"=>"15 rue Principale", "codePostal"=>"13003", "ville"=>"Marseille", "Restauration"=>"Entreprise"]);
$agenceRattache[]=new Agence(["nom"=>"Agence de l'est", "adresse"=>"59 rue du Phare", "codePostal"=>"54000", "ville"=>"Nancy", "Restauration"=>"Ticket restaurant"]);
$agenceRattache[]=new Agence(["nom"=>"Agence de l'ouest", "adresse"=>"14 place principale", "codePostal"=>"35700", "ville"=>"Rennes", "Restauration"=>"Entreprise"]);

$listeEnfant[]=new Enfant(["nom"=>"Dupont", "prenom"=>"Florent", "age"=>"8"]);
$listeEnfant[]=new Enfant(["nom"=>"Lafont","prenom"=>"Laure", "age"=>"13"]);
$listeEnfant[]=new Enfant(["nom"=>"Durand", "prenom"=>"Philippe", "age"=>"17"]);

$emp[] = new Employe(["nom" => "Dupont", "prenom" => "Charles", "dateEmbauche" => new DateTime("2010-05-16"), "poste" => "commercial", "salaire" => "32", "service" => "commercial","agenceRattache"=> $agenceRattache[0], "listeEnfant"=>[$listeEnfant[0]]]);
$emp[] = new Employe(["nom" => "Martin", "prenom" => "Guy", "dateEmbauche" => new DateTime("2015-01-04"), "poste" => "comptable", "salaire" => "40", "service" => "comptabilité","agenceRattache"=> $agenceRattache[1]]);
$emp[] = new Employe(["nom" => "Lafont", "prenom" => "Marion", "dateEmbauche" => new DateTime("2016-06-08"), "poste" => "responsable RH", "salaire" => "45", "service" => "ressources humaines","agenceRattache"=> $agenceRattache[2], "listeEnfant"=>[$listeEnfant[1]]]);
$emp[] = new Employe(["nom" => "Lafont", "prenom" => "Marion", "dateEmbauche" => new DateTime("2016-06-08"), "poste" => "responsable RH", "salaire" => "45", "service" => "ressources humaines","agenceRattache"=> $agenceRattache[2]]);
$emp[] = new Employe(["nom" => "Durand", "prenom" => "Pascal", "dateEmbauche" => new DateTime("2019-10-09"), "poste" => "maintenance", "salaire" => "30", "service" => "maintenance","agenceRattache"=> $agenceRattache[3], "listeEnfant"=>[$listeEnfant[2]]]);
$emp[] = new Employe(["nom" => "Fontaine", "prenom" => "Irene", "dateEmbauche" => new DateTime("2019-12-21"), "poste" => " responsable", "salaire" => "48", "service" => "direction","agenceRattache"=> $agenceRattache[4]]);

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

/*usort($emp,array("Employe", "compareToServiceNomPrenom"));
afficheTableau($emp);*/




