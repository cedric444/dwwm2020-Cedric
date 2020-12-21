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
    if(!(leftActuel<leftRect1+rect1.width && leftActuel+carre.width>leftRect1 && topActuel<topRect1 +rect1.height && topActuel +carre.height>topRect1))
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

    
 