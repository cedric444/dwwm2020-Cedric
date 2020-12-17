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
carre.addEventListener("keydown", function (e){
    if(e.KeyboardEvent.keyValue)
    {
        deplace(-5,0);
    }
    else if(e.keyCode===39)
    {
        deplace(5,0);
    }
    else if(e.keyCode===38)
    {
        deplace(0,-5);
    }
    else if(e.keyCode===40)
    {
        deplace(0,5);
    }
});