
document.getElementById("nom").addEventListener("blur", (e) => {
        var nom = e.target.value;
        var message;
        if (nom.length < 4) {
            message= "veuillez saisir votre nom complet";
        }
        var erreur = document.getElementById("erreur");
        erreur.textContent = message;
    }
    
);