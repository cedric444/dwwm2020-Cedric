/******************Variables***********************/

//inputs
var radios = document.getElementsByName("genre");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var numBenef = document.getElementById("numBenef");
var numSecu = document.getElementById("numSecu");
var ddn = document.getElementById("ddn");
var emailStagiaire = document.getElementById("emailStagiaire");
var numOffreSessionFormation = document.getElementById("numOffreSessionFormation");
var formations = document.getElementsByClassName("formation");
//Liste des inputs
var inputs = document.getElementsByTagName("input");

//Valeur des inputs
nom.addEventListener("keyup", verification);
prenom.addEventListener("keyup", verification);
numBenef.addEventListener("keyup", verification);
numSecu.addEventListener("keyup", verification);
ddn.addEventListener("change", verification);
emailStagiaire.addEventListener("keyup", verification);
numOffreSessionFormation.addEventListener("keyup", verification);


/*******************Fonctions**********************/

function verification(event) {
    var monInput = event.target;
    var erreur = (monInput.parentNode).getElementsByClassName("erreur")[0];

    if (monInput.value == '') {
        monInput.style.border = "2px solid orange";
        erreur.innerHTML = "champ manquant";
    } else if (!monInput.checkValidity()) {
        erreur.innerHTML = "format incorrect";
        monInput.style.class = "incorrect";
    } else {
        erreur.innerHTML = "";
        monInput.style.border = "1px solid var(--BordureBouton)";
    }
}

/***************Requête sessions****************/

const req = new XMLHttpRaquest();
req.onreadystatechange = function(event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if(this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse= JSON.parse(this.responseText);
            sessionStorage.innerHTML="";
            for(let i=0; i<reponse.length; i++)
            {
                
            }
            
        }
    }
};
req.open('POST', 'index.php?page=SessionAPI', true);
req.send(null);