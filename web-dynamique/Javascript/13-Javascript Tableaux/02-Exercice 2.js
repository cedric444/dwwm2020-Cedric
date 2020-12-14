function GetInteger()
{
    var entier = parseInt(prompt("entrer un entier"));
    console.log(entier);
}

function InitTab(long, array)
{
    var long = GetInteger();
    var array = Array(long);
    return array;
}

function SaisieTab(array)
{
    var array =InitTab();
    for(i=0; i<array.length; i++)
    {
    array[i] = prompt("Entrer les valeur du tableau");
    }
    return array;
}

function AfficheTab(array)
{
    array = SaisieTab();
    // for(i=0; i< array.length; i++)
    // {
    //     alert(array[i]);
    // }
    return array;
    alert (array);
}

function RechercheTab(array, index)
{
    var array = Saisietab();
    do
    {
        var index = GetInteger();
    }while(index> array.length);
    alert(array[index]);
}

function InfoTab(array)
{
    var array = SaisieTab();
    var max = 0;
    var somme = 0;
    var moyenne;
    for(i=0; i< array.length; i++)
    {
        if(array[i+1]>array[i])
        {
            max = array[+1];
            
        }
        somme = somme +array[i];
    }
    moyenne = somme /array.length;
    alert(max+"\n"+moyenne);      
}
AfficheTab();
SaisieTab();
InfoTab();
