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
            enregs = reponse.records.sort(compareTo);            
            for (let i = 0; i < enregs.length; i++) {
                // on crée la ligne et les div internes
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                ville = document.createElement("div");
                ville.setAttribute("class", "ville");
                ligne.appendChild(ville);
                nom = document.createElement("div");
                nom.setAttribute("class", "nom");
                ligne.appendChild(nom);
                adresse = document.createElement("div");
                adresse.setAttribute("class", "adresse");
                ligne.appendChild(adresse);
                // etat = document.createElement("div");
                // etat.setAttribute("class", "etat");
                // ligne.appendChild(etat);
                type = document.createElement("div");
                type.setAttribute("class", "type");
                ligne.appendChild(type);
                contenu.appendChild(ligne);
                espace = document.createElement("div");
                espace.setAttribute("class","espaceHorizon");
                contenu.appendChild(espace);
                //on met à jour le contenu
                ville.innerHTML = enregs[i].fields.commune;
                nom.innerHTML = enregs[i].fields.nom;
                adresse.innerHTML = enregs[i].fields.adresse;
                // On récupère la valeur de l'état
                image = '<img class="vrai" src="Images/valider.png" alt="icone oui"></img>';
                valEtat =enregs[i].fields.etat;
                
                if(valEtat ==="EN SERVICE")
                {
                    // etat.innerHTML= image;
                    nom.style.color ="green"; 
                }
                else
                {
                    nom.style.color ="red";
                }
                
                // On récupère la valeur du type
                valType = enregs[i].fields.type;
                
                if (valType=== "AVEC TPE")
                {
                    type.innerHTML =image;
                }
                else{
                    image = '<img class="vrai" src="Images/croix.png" alt="icone non"></img>';
                    type.innerHTML= image;
                }
                

                // on ajoute un evenement sur ligne pour afficher le detail
                // ligne.addEventListener("click", afficheDetail);
            }
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function compareTo(obj1, obj2){
    if(obj1.fields.commune < obj2.fields.commune)
    {
        return -1;
    }
    else if(obj1.fields.commune > obj2.fields.commune)
    {
        return 1;
    }
    else{
        if(obj1.fields.nom < obj2.fields.nom)
        {
            return -1;
        }
        else if (obj2.fields.nom > obj2.fields.nom)
        {
            return 0;
        }
        else{
            return 0
        }
    }
}


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
req.open('GET', 'https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=vlille-realtime&q=&rows=40&facet=nom&facet=commune&facet=etat&facet=type&facet=adresse', true);
req.send(null);