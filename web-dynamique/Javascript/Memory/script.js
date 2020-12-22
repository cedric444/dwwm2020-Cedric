// var cartesR = document.querySelectorAll("recto");
// var cartesV = document.querySelectorAll("verso");
// var uneCarteR, uneCarteV;
var nbImage = 0;
var image1, image2;
var nbPaire = 0;
var carteR = document.getElementsByClassName("recto");

// cartesV.forEach(elt =>{
//     cartesV.style = window.getComputedStyle(elt);
//     uneCarteV = elt;
// })

function retourne(image, vrai)
{
    if(vrai)
    { 
        image.style.visibility="visible";
    }
    else
    {
        image.style.visibility="hidden";
    }
}

function verif(image1, image2)
{
    document.addEventListener("click", (e)=>{
        cartesR.forEach(element =>{
            cartesR.style = window.getComputedStyle(element);
            uneCarteR = element; 
    });
    if(image1 == image2)
    {
        nbPaire++
    }
    else
    {
        setTimeout(function(){
            uneCarteR.target.parentNode.getElementsByClassName("verso")[0].style.display="flex";
            uneCarteR.target.parentNode.getElementsByClassName("recto")[0].style.display="none";
            retourne(image, false), 2000;
        });
    }
});
}
