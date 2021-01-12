const req = new XMLHttpRequest();
var nomRegion= document.getElementById("nomRegion");
var departements= document.getElementsByClassName("departements")[0];
var select = document.getElementsByTagName("select")[0];
/**************Listener***************/

req.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            departements.innerHTML="";
            for (let i=0; i<reponse.length; i++)
            {
                ajouteDepartement(reponse[i].libelleDepartement, reponse[i].idDepartement);
            }            
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};
select.addEventListener("change", changeReg);


function changeReg(e){
    if(select.value != "default")
    {
        req.open('POST', 'index.php?codepage=listeAPI', true);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        var id = select.value;
        var args = "idRegion="+ id;
        req.send(args);
    }
}

function ajouteDepartement(libelleDep, idDep){
    let dep = document.createElement("div");
    dep.setAttribute("class", "dep");
    dep.setAttribute("id", idDep);
    dep.innerHTML = libelleDep;
    departements.appendChild(dep);
}