function verifNom {
    document.getElementById("nom").addEventListener("blur", (e) => {
        var nom = e.target.value;
        var message;
        var icone = new Image();
        if (nom.length < 4) {
            icone.src = 'croix.png';
            message= icone;
        }
        var erreur = document.getElementById("erreur");
        erreur.insertAdjacentElement("afterBegin", message);
    });
}

document.getElementById("codePostal").addEventListener("blur", (e)=> {
    var longueur= e.target.value;
    var message;
    var icone = new Image();
    if(longueur.length > 5)
    {
        icone.src = 'croix.png';
        message= icone;
    }
    else
    {
        icone.src = 'valider.png';
        message = icone;
    }
    var erreur = document.getElementById("erreurCode");
    erreur.insertAdjacentElement("afterBegin", message);
})