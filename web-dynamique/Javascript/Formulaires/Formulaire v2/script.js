//infobulle

var infos = document.getElementsByClassName("info");
for(let i=0; i<infos.length; i++){
    infos[i].addEventListener("mouseover", (e)=>{
        var parent= e.target.parentNode.parentNode;
        var infobulle = (parent.getElementsByTagName("input")[0]).getAttribute("title");
        console.log(infobulle);
        infos[i].setAttribute("title", infobulle);         
    });
}

//Vérifier les données saisies

// Fonction qui va permettre de vérifier les inputs
function verif(e)
{
    var input = e.target;                                           // input ciblé
    var valider = document.getElementsByClassName("valider")[0];    // On récupère l'icone valider
    var erreur = document.getElementsByClassName("erreur")[0];      // On récupère la div erreur

    if(input.value === "")                                          // Si l'input est vide 
    {
        erreur.innerHTML="";
        valider.style.visibility="hidden";
    }
    else if (!input.checkValidity())                                //Si il y a une erreur dans l'input
    {
        erreur.innerHTML = "saisie incorrecte";
        valider.src="croix.png";                                    // On modifie l'icone en croix
        valider.style.visibility= "visible";                        
    }
    else                                                            // Si il n'y a pas d'erreur
    {
        erreur.innerHTML="";
        valider.src= "valider.png";
        valider.style.visibility= "visible";
    }
}

// Pour chaque input, on vérifie la saisie
var inputs= document.getElementsByTagName("input");                 
for (let i=0; i<inputs.length; i++)
{
    inputs[i].addEventListener("input", verif);
}