//infobulle

var infos = document.getElementsByClassName("info");
for(let i=0; i<infos.length; i++){
    infos[i].addEventListener("mouseover", (e)=>{
        var parent= e.target;
        var infobulle = (parent.getElementsByTagName("input")[0]).title;
                
    });
}

//Vérifier les données saisies
inputs = document.getElementsByTagName("input");

for(let i =0; i<inputs.length; i++){
    var input = inputs[i];
    var erreur = document.getElementsByClassName("erreur")[0];
    if (!input.checkValidity)
    {
        erreur.textContent = "saisie incorrecte";
    }
}