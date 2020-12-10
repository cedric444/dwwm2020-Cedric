var nombre = parseInt(prompt('entrer un nombre'));
var mini = parseInt(nombre);
var maxi = parseInt(nombre);
var cpt = 0;
do
{
    var nombre = parseInt(prompt('entrer un nombre'));
    cpt++;
    if(nombre < mini && nombre!=0)
    {
        mini =nombre;
    }
    if (nombre > maxi && nombre != 0)
    {
        maxi = nombre;
    }
    
}while(nombre!=0);

console.log(mini);
console.log(maxi);