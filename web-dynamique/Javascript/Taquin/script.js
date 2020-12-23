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
    
document.addEventListener("click",(e)=>{
    var X = parseInt(e.target.getAttribute("posX"));
    var Y = parseInt(e.target.getAttribute("posY"));
    console.log(X,Y);
});
// document.addEventListener("click", (e)=>{
// videX= parseInt(e.target.getAttribute("vide", "posX"));
// videY = parseInt(e.target.getAttribute("vide","posY"));
// });
var button = document.getElementsByClassName("plein");
var videX = 3;
var videY = 3;

if(Math.abs(videX-X) == 1 ^Math.abs(videY-Y) == 1)
{
    var videX = X;
    var videY = Y;
    var button = vide.setAttribute("vide");
    var vide = button.setAttribute("plein");
    
}