
//Contient les solutions aux questions
var lesSolutions={
    "1r": "Panoramix",
    "2r": "Lucky Luke",
    "3r": "Tom",
    "4r": "Kev Adams",
    "5r": "Luffy",
    "6r": "un otaku"
}

//On déclare les variables
var reponses = document.getElementsByClassName("reponse");
var reponseUn = document.getElementById("1r");
var reponseDeux = document.getElementById("2r");
var reponseTrois = document.getElementById("3r");
var reponseQuatre = document.getElementById("4r");
var reponseCinq = document.getElementById("5r");
var reponseSix = document.getElementById("6r");
var soumettre = document.getElementById("soumettre");
var messages = document.getElementsByClassName("message");
var effacer = document.getElementById("reset");
var inputs= document.getElementsByTagName("input");
// On pose les évènement pour vérifier le format des réponses
reponseUn.addEventListener("input", verifReponse);
reponseDeux.addEventListener("input", verifReponse);
reponseTrois.addEventListener("input", verifReponse);
reponseQuatre.addEventListener("input", verifReponse);
reponseCinq.addEventListener("input", verifReponse);
reponseSix.addEventListener("input", verifReponse);

//
effacer.addEventListener("click", (e)=>{
    for(let i=0; i<inputs.length; i++){
        inputs[i].innerHTML ="";
    }
});
/**********Fonctions***********/
//Fonction qui va vérifier leformat des réponses
function verifReponse(e){
    //On récupère l'input sur lequel on va faire la vérification
    var monInput =e.target 
    //On récupère les éléments correspondants à l'input 
    var message = (monInput.parentNode).getElementsByClassName("message")[0];

    if(!monInput.checkValidity())
    {
        message.innerHTML = "format incorrect";
    }
    else if(monInput.value ="")
    {
        message.innerHTML = "Champ manquant";
        message.style.color = "orange";
    }
    else
    {
        message.innerHTML ="";
    }
}

//Fonction pour verifier que tous les champs sont remplis
function soumettreReponse(e){
    soumettre.disabled=true;
    for(let i=0; i<reponses.length; i++)
    {
        e.target = reponses[i].firstChild 
        if(e.target != "")
        {
            soumettre.disabled= false;
        } 
    }
}

//Fonction qui vérifie les réponses

