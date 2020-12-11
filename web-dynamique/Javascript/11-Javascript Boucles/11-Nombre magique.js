do
{
    var magic = parseInt(Math.random()*100);
    do
    {
        var nb = prompt("entrer un nombre");
        if(nb > magic)
        {
            alert("trop grand");
        }
        else if(nb< magic)
        {
            alert("trop petit");
        }
        else if (nb == magic)
        {
            alert("Gagné!");
           
        }
    }while(nb != magic);

    var reponse = confirm("Voulez-vous rejouer?");
}while(reponse);
