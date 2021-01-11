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
            // ville = document.createElement("div");
            // ville.setAttribute("value", "ville");
            // ligne.appendChild(ville);
                if (ville=== enregs[i].fields.ville){

                
                    ligne = document.createElement("div");
                    ligne.setAttribute("class", "ligne");
                    ligne.id = i;
                    nom = document.createElement("div");
                    nom.setAttribute("class", "nom");
                    ligne.appendChild(nom);
                    adresse = document.createElement("div");
                    adresse.setAttribute("class", "adresse");
                    ligne.appendChild(adresse);
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
                        nom.style.fontWeight ="bolder";
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
                }

                // on ajoute un evenement sur ligne pour afficher le detail
                // ligne.addEventListener("click", afficheDetail);
            }
        });
        console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
        
    }
        
};

function compareTo(obj1, obj2){
    // if(obj1.fields.commune < obj2.fields.commune)
    // {
    //     return -1;
    // }
    // else if(obj1.fields.commune > obj2.fields.commune)
    // {
    //     return 1;
    // }
    // else{
        if(obj1.fields.nom < obj2.fields.nom)
        {
            return -1;
        }
        else if (obj2.fields.nom > obj2.fields.nom)
        {
            return 1;
        }
        else{
            return 0
        }
    }
    
// }
