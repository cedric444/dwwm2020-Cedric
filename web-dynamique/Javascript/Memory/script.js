var nbImage = 0;
var image1, image2;
var nbPaire = 0;
var listeImages = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,];
var liste2 = new Array;
var cartesRecto = document.getElementsByClassName("recto");
function initialise()
{
    for (var i=0; i< listeImages.length; i++)
    {
        liste2[i] = [listeImages[i], Math.floor(Math.random()*100)];
    }
    liste2.sort((a,b) => a[1]-b[1]);

    for (let i=0; i<listeImages.length; i++)
    {
        listeImages[i] = liste2[i][0];
    
    listeImages[i].src="Images/"+listeImages[i]+".jpg";
    cartesRecto[i].addEventListener("click", selectionImage);
     retourne(cartesRecto[i], true);
     retourne(listeImages[i], false);
    }

}

function retourne(image, vrai)
{
    if(vrai)
    {
        image.style.display="flex";
    }
    else
    {
        image.style.display="none";
    }
}

function verif(image1, image2)
{
    if(image1 == image2)
    {
        nbPaire++;
    }
    else
    {
        setTimeout(function () {
            retourne(image1, false);
            retourne(image1.parentNode.getElementsByClassName("recto")[0], true);
            retourne(image2, false);
            retourne(image2.parentNode.getElementsByClassName("recto")[0], true);
        }, 500);
    }

}

function selectionImage(e)
{
    nbImage++;
    if(nbImage<=2)
    {
        imageSelectionnee = e.target;
        image= imageSelectionnee.parentNode.getElementsByClassName("verso")[0];
        retourne(imageSelectionnee, false);
        retourne(image, true);
        if(nbImage==1)
        {
            image2 = image1;
        }
        else
        {
            verif(image1, image2);
            nbImage-=2;
            if (nbPaire==8)
            {
                alert("vous avez gagné!!!");
            }
        }
    }
}

function solution() {
    var cartesRecto = document.getElementsByClassName("recto");
    for (let i = 0; i < cartesRecto.length; i++) {
        affiche(cartesRecto[i], false);
        affiche(cartesRecto[i].parentNode.getElementsByClassName("verso")[0], true);

    }
}
initialise();