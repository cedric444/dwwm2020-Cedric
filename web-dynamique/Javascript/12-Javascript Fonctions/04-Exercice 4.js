function multiples(n, x)
{
    var n = parseInt(prompt("entrer un nombre"));
    var x = parseInt(prompt("entrer un deuxieme nombre"));
    for(i=1; i<=n; i++)
    {
        var result= i * x;
        console.log(i+" * "+x+" = "+result);
    };
}

function sommeMoyenne()
{
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
}

function nombreVoyelles()
{
    var mot = prompt("entrer un mot");
    var lettre;
    var i = 0;
    var cpt= 0;

    for (i= 0; i<mot.length; i++)
    {
        if(mot[i]=="a" || mot[i]=="e" || mot[i]=="i" || mot[i]=="o" || mot[i]=="u" || mot[i]=="y")
        {
            cpt++;
            mot= mot.substring(mot.indexOf((mot[i]+1)), mot.length);
        }
    }
    console.log(cpt);
}

function nbLettres(phrase, lettre)
{
    for (i=0; i<phrase.length; i++)
    {
        if(phrase[i] == lettre)
        {
            cpt++;
            phrase = phrase.substring(indexOf(phrase[i]+1), phrase.length);
        }
    }
    console.log(cpt);
}

var options= prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre de caractères suivants\nEntrez votre option : ");
if (options==1)
{
    multiples(n, x);
}
else if(options==2)
{
    sommeMoyenne();
}
else if(options==3)
{
    nombreVoyelles();
}
else if(options==4)
{
    nbLettres(phrase, lettre);
}