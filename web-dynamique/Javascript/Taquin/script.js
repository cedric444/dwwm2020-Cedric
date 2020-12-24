function init()
{
    var nb =[1,2,3,4,5,6,7,8];
    var nb2= new Array;
    var j =0;
    var pleins = document.querySelectorAll('.plein');
    for (let i=0; i<nb.length; i++)
    {
        nb2[i]= [nb[i], Math.floor(Math.random() * 100)];
    } 
    nb2.sort((a,b) =>a[1]-b[1]);
    for (let i=0; i<nb.length; i++)
    {
        nb[i] = nb2[i][0];
    
    }

    for (let j=0; j<pleins.length; j++)
    {
        let nbre = nb[j];
        pleins[j].setAttribute('class', nb);
        pleins[j].textContent = nbre;
    }
    document.getElementsByClassName("vide")[0].addEventListener("click", deplace);

}
// emplacement case vide
var videX = 3;
var videY = 3;


function deplace(e)
{   
    var button = e.target;
    var X = parseInt(e.target.getAttribute("posx"));
    var Y = parseInt(e.target.getAttribute("posy"));
    
    var buttonVide = document.getElementsByClassName("vide")[0];
    
    if((Math.abs(videX-X) == 1 ^ Math.abs(videY-Y) == 1) && ((Math.abs(videx-X) <2 )) && (Math.abs(videY-Y) < 2))
    {
        videX = X;
        videY = Y;
        buttonVide.textContent = button.textContent;
        button.textContent = "";
        buttonVide = buttonVide.setAttribute("class", "plein");
        button = button.setAttribute("class", "vide");
    
    }
}

init();
