var nb = prompt("entrer un nombre");
var premier;
for(var i=2; i<nb; i++)
{
    if(nb%i==0)
    {
        premier = false;
    }
    else
    {
        premier = true;
    }
}

console.log(premier);

/*var nb = parseInt(prompt('entrer un chiffre'));

i = 2;

while (i*i<=nb && nb%i != 0)
{
    i++;
}

if (i*i>nb)
{
    alert(nb+' est premier');
}
else
{
    alert(nb+' n est pas premier');
}*/
