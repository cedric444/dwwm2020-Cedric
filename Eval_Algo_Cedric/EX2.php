<?php
echo"  ****\tTable de multiplication ****\n";
// On crée une boucle
do
{
    $nombre = readline("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    for($i=1; $i<11; $i++)
    {
        $produit = $nombre * $i;
        echo $nombre."\t x ".$i."\t= ".$produit."\n"; 
    }
    $continue = readline("Voulez-vous continuer ? ");
}while($continue != "N");
