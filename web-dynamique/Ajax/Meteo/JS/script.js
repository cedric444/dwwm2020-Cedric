/*************Variables ****************/

// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
// on définit une requete
const req = new XMLHttpRequest();
var envoyer= document.getElementById("envoyer");
var aff= document.getElementById("nom");
var temperature = document.getElementById("temperature");
var ciel = document.getElementById("ciel");
var description = document.getElementById("description");
var nom = document.getElementById("nomVille");
/*************Fonctions ****************/
function recupVille(){
        var valeur = nom.value;
        console.log(valeur);
        aff.innerHTML=nomVille.value;
        req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q='+valeur+'&appid=3fea5f97dad8f08b8dabef2fc2482df9&units=metric&lang=fr');
        req.send(null);
}
/****************Main ******************/
envoyer.addEventListener("click", recupVille);
req.onreadystatechange = function (event) {
    
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.TextContent);
            console.log(this.responseText);
            // console.log(reponse);
            ciel.innerHTML = reponse.weather.ciel;
            description.innerHTML = reponse.weather.description;
            temperature.innerHTML = reponse.main.temp;
            
        }
        else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    };
}

// req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=dunkerque&appid=3fea5f97dad8f08b8dabef2fc2482df9&units=metric&lang=fr', true);
// req.send(null);