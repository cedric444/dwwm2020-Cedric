function deplace(dleft, dtop) {
    // permet de deplacer le carre selon 2 directions left et top
    //on recupere son style (tout le CSS)
    var styleCarre = window.getComputedStyle(carre, null);
    //on recupere les positions left et top actuelles
    var topActuel = styleCarre.top;
    var leftActuel = styleCarre.left;
    //on recupere les positions de l'obstacle
    var styleRect1 = window.getComputedStyle(rect1, null);
    var topRect1 = styleRect1.top;
    var leftRect1 = styleRect1.left;
    //on modifie les positions left et top actuelles
    if(!(parseInt(topActuel)<parseInt(leftRect1)+parseInt(rect1.width) && parseInt(leftActuel)+parseInt(carre.width)>parseInt(leftRect1) && parseInt(topActuel)<parseInt(topRect1) +rect1.height && parseInt(topactuel) +parseInt(carre.height)>parseInt(topRect1)))
    {
    carre.style.top = parseInt(topActuel) + dtop + 'px';
    carre.style.left = parseInt(leftActuel) + dleft + 'px';
    }
}

var carre = document.getElementById("carre");

document.addEventListener("keydown", (e)=>{
    console.log(e.code);
    switch(e.code){
        case "ArrowLeft":
            deplace(-5,0);
            break;
        case "ArrowRight":
            deplace(5,0);
            break;
        case "ArrowUp":
            deplace(0,-5);
            break;
        case "ArrowDown":
            deplace(0,5);
            break;
    }
});

    
 