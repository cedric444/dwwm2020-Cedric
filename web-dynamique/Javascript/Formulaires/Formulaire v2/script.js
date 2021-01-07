var mdp= document.getElementsByClassName("mdp")[0];

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

// Gestion oeil
function affichePwd(flag){
    var pwd= document.getElementById("mdp");
    if(flag)
    {
        pwd.type= "text";
    }
    else
    {
        pwd.type= "password";
    }
}

var oeil = document.getElementById("oeil");
oeil.addEventListener("mousedown", (e)=>{
    affichePwd(true);
});
oeil.addEventListener("mouseup", (e)=>{
    affichePwd(false);
});

// Verification de confiramtion du mot de passe

function verifMdp(){
    mdp = document.getElementById("mdp");
    var regles = ["(?=.*[a-z])","(?=.*[A-Z])","(?=.*[\d])","(?=.[!@#$%^&*+])","[a-zA-z\d!@#$%^&*+]{8,}"];
    for(let i=0; i<regles.length; i++)
    {
        let regle= regles[i];
        if (regle.checkValidity())
        {
            flag = true;
        }
    }
    var i = 0;
    flag = true;
    while(flag)
    {
        valider.scr= "valider.png";
        i++;
    }
}

