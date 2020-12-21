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
var styleRect1 = window.getComputedStyle(rect1, null);
var topRect1 = styleRect1.top;
var leftRect1 = styleRect1.left;
function collision(){
    if(carre.x<leftRect1+rect1.width && carre.x+carre.width>leftRect1 && carre.y<topRect1 +rect1.height && carre.y +carre.height>topRect1)
    {
        return true;
    }
}
while(!collision())
{
    
}