// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
var enregs; // contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
            console.log(reponse);
            enregs = reponse.main;            
            console.log(enregs);
              
            var temperature = document.getElementById("temperature");
            temperature.innerHTML= enregs.temp;
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
;

// function compareTo(obj1, obj2){
//     if(obj1.fields.commune < obj2.fields.commune)
//     {
//         return -1;
//     }
//     else if(obj1.fields.commune > obj2.fields.commune)
//     {
//         return 1;
//     }
//     else{
//         if(obj1.fields.nom < obj2.fields.nom)
//         {
//             return -1;
//         }
//         else if (obj2.fields.nom > obj2.fields.nom)
//         {
//             return 1;
//         }
//         else{
//             return 0
//         }
//     }
// }


// function afficheDetail(e) {
//     vLilleClique = (e.target).parentNode;
//     vLilleClique.removeEventListener("click", afficheDetail);
//     detail = document.createElement("div");
//     detail.setAttribute("class", "detail");
//     adresse = document.createElement("div");
//     adresse.setAttribute("class", "adresse");
//     detail.appendChild(adresse);
//     dispo = document.createElement("div");
//     dispo.setAttribute("class", "dispo");
//     detail.appendChild(dispo);
    
//     adresse.innerHTML = enregs[vLilleClique.id].fields.adresse;
//     dispo.innerHTML = enregs[vLilleClique.id].fields.nbvelosdispo;
//     type.innerHTML= "  Type " + enregs[vLilleClique.id].fields.type;
//     contenu.insertBefore(detail, vLilleClique.nextSibling);

// }

//on envoi la requête
req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=dunkerque&appid=e19a2f57449490dac9e8ddd9abf1962b&units=metric&lang=fr', true);
req.send(null);