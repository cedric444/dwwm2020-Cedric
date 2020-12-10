var somme = 0;
var moyenne = 0;
var cpt = 0;
do
{
    var nombre = parseInt(prompt('entrer un nombre'));
    somme = somme +nombre;
    cpt++;
}while(nombre!=0);
moyenne = somme / cpt;
console.log(somme);
console.log(moyenne);