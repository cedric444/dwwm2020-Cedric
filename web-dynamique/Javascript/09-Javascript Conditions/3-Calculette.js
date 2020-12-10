var nb1= parseInt(prompt("entrez un nombre entier"));
var nb2 = parseInt(prompt("entrez un deuxieme nombre entier"));
var signe = prompt("entrez un opérateur");

if(signe == '+')
{
    var result = nb1+nb2;
}
else if (signe == '-')
{
    var result = nb1-nb2;
}
else if (signe == '*')
{
    var result = nb1*nb2;
}
else if (signe == '/')
{
    if (nb2 == 0)
    {
        alert("opération impossible");
    }
    else
    {
        result = nb1 / nb2;
    } 
}
alert(result);