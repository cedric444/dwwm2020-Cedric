function deplace(dleft, dtop) {
    // permet de deplacer le carre selon 2 directions left et top
    //on recupere son style (tout le CSS)
    var styleCarre = window.getComputedStyle(carre, null);
    //on recupere les positions left et top actuelles
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    //on modifie les positions left et top actuelles
    carre.style.top = parseInt(topActuel) + dtop + 'px';
    carre.style.left = parseInt(leftActuel) + dleft + 'px';
}

var carre = document.getElementById("carre");
var sourisEnfoncee = false;
carre.addEventListener("mousedown", (e)=>{
    sourisEnfoncee =true;
});
carre.addEventListener("mouseup", (e)=>{
    sourisEnfoncee = false;
});
document.addEventListener("mousemove", (e)=>{
    if(sourisEnfoncee == true)
    {
        carre.style.top = parseInt(e.clientY) +"px";
        carre.style.left = parseInt(e.clientX) +"px";
    }
});