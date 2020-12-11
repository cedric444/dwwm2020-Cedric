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