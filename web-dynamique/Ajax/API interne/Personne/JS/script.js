const requ = new XMLHttpRequest();

requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divNom  = document.getElementsByClassName("crudColonne nom");
            console.log(divNom);
            var divPrenom = document.getElementsByClassName("crudColonne prenom"); 
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            
            for (let i=0; i<reponse.length; i++)
            {
                divNom[i].innerHTML = reponse[i].nom;
                console.log(divNom.innerHTML);
                divPrenom[i].innerHTML = reponse[i].prenom;
            }

        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', '/Ajax/API interne/PHP/Model/ListePersonnes.php', true);
requ.send(null);