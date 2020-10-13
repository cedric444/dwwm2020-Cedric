<?php
function chargerClasse($classe)
{
    require $classe . ".class.php";
}
spl_autoload_register("chargerClasse");

// on construit un tableau des auteurs
$auteur[]= new Auteur(["Nom"=>"Mitchell", "Prenom"=>"David", "DateDeNaissance"=>new Datetime("12-01-1969"), "DateDeDeces"=>new DateTime()]);
$auteur[] = new Auteur(["Nom"=>"Steinbeck", "Prenom"=>"John", "DateDeNaissance"=>new Datetime("27-02-1902"), "DateDeDeces"=>new Datetime("20-12-1968")]);
$auteur[] = new Auteur(["Nom"=>"Woolf", "Prenom"=>"Virginia", "DateDeNaissance"=>new Datetime("25-01-1882"), "DateDeDeces"=>new Datetime("28-03-1941")]);
$auteur[] = new Auteur(["Nom"=>"Woolf", "Prenom"=>"Virginia", "DateDeNaissance"=>new Datetime("25-01-1882"), "DateDeDeces"=>new Datetime("28-03-1941")]);
$auteur[] = new Auteur(["Nom"=>"Nichols", "Prenom"=>"Jeff", "DateDeNaissance"=>new Datetime("07-12-1978"), "DateDeDeces"=>new DateTime()]);
$auteur[] = new Auteur(["Nom"=>"Springsteen", "Prenom"=>"Bruce", "DateDeNaissance"=>new Datetime("23-09-1949"), "DateDeDeces"=>new DateTime()]);

// on construit des documents 
$doc[] = new Document(["Auteur"=>$auteur[0], "Titre"=>"Cloud Atlas", "EstEmprunte"=> true]);
$doc[] = new Document(["Auteur"=>$auteur[1], "Titre"=>"A l'est D'Eden", "EstEmprunte"=> false]);
$doc[]= new Document(["Auteur"=>$auteur[2], "Titre"=>"Mrs Dalloway", "EstEmprunte"=> false]);
$doc[] = new Document(["Auteur"=>$auteur[3], "Titre"=>"Mrs Dalloway", "EstEmprunte"=> false]);

$video1 = new Video(["Auteur"=>$auteur[4], "Titre"=>"Take Shelter", "Sous-Titre"=>"Oui"]);
$livre1 = new Livre (["Auteur"=>$auteur[2], "Titre"=>"Mrs Dalloway", "Nombre de pages: "=> 248]);
$enregistrementAudio1 = new EnregistrementAudio(["Auteur"=>$auteur[5], "Titre"=>"Born to Run", "Durée: "=>"42 minutes"]);

echo($doc[2]->equalsTo($doc[3]));                           //on teste l'égalité des documents 3 et 4
echo"\n".$doc[0]->equalsTo($doc[1]);                        // on teste l'égalité des documlents 1 et 2
var_dump($video1);
var_dump($livre1);
var_dump($enregistrementAudio1);