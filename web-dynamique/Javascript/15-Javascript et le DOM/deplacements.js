function deplace(dleft, dtop) {
    var deplacement_ok = true;
    // permet de deplacer le carre selon 2 directions left et top
    //on recupere son style (tout le CSS)
    var styleCarre = window.getComputedStyle(carre, null);
    //on recupere les positions left et top actuelles
    var topCarre = parseInt(styleCarre.top);
    console.log(topCarre);
    var leftCarre = parseInt(styleCarre.left);
    console.log(leftCarre);
    var wCarre = parseInt(styleCarre.width);
    var hCarre = parseInt(styleCarre.height);
    //on recupere les positions des obstacles
    var listeObstacles = document.querySelectorAll(".obstacle");
    listeObstacles.forEach(element => {
        var styleObstacle = window.getComputedStyle(element, null);
        var topObstacle = parseInt(styleObstacle.top);
        var leftObstacle = parseInt(styleObstacle.left);
        var wObstacle = parseInt(styleObstacle.width);
        var hObstacle = parseInt(styleObstacle.height);
        deplacement_ok = deplacement_ok && depl_ok(topObstacle, leftObstacle, wObstacle, hObstacle, topCarre + dtop, leftCarre + dleft, wCarre, hCarre) 
    });
    //on modifie les positions left et top actuelles
    var cheat = false;
    document.addEventListener("keydown", e=>{
        if(e.key=="ù")
        {
            cheat = true;
        }
    });
    if(deplacement_ok || cheat)
    {
        document.getElementById('carre').style.top = topCarre + dtop + 'px';
        document.getElementById('carre').style.left = leftCarre + dleft + 'px';
    }
    
    
}
function depl_ok(topObstacle, leftObstacle, wObstacle, hObstacle, topCarre, leftCarre, wCarre, hCarre)
{
    if(leftCarre < leftObstacle + wObstacle && leftCarre + wCarre > leftObstacle && topCarre < topObstacle + hObstacle && topCarre + hCarre > topObstacle)
    {
        return false;
        
    }
    return true;
}

document.addEventListener("click", (e) => {
    console.log("X " + e.clientX);
    console.log("Y " + e.clientY);
});

var carre= document.getElementById("carre");
var left= document.getElementById("left");
var right= document.getElementById("right");
var up= document.getElementById("up");
var down= document.getElementById("down");

left.addEventListener("click", function(){
    deplace(-5,0);
});
right.addEventListener("click", function(){
    deplace(5,0);
});
up.addEventListener("click", function(){
    deplace(0,-5);
});
down.addEventListener("click", function(){
    deplace(0,5);
});


//Déplacement clavier
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

//Déplacement souris
var ecartY, ecartX;
var carre = document.getElementById("carre");
var sourisEnfoncee = false;
carre.addEventListener("mousedown", (e)=>{
    ecartY = parseInt(window.getComputedStyle(carre).top) - parseInt(e.clientY);
    ecartX = parseInt(window.getComputedStyle(carre).left) - parseInt(e.clientX);
    sourisEnfoncee =true;
});
carre.addEventListener("mouseup", (e)=>{
    sourisEnfoncee = false;
});
document.addEventListener("mousemove", (e)=>{
    if(sourisEnfoncee == true)
    {
        deplacementSouris(e);
    }
});

function deplacementSouris(e) {
    if (!collision(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX))
    {
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

//gestion des obstacles

function collisionUnObstacle(obstacle, posX, posY) {
    var styleCarre= window.getComputedStyle(carre);
    var wCarre = parseInt(styleCarre.width);
    var hCarre = parseInt(styleCarre.height);
    var styleObstacle = window.getComputedStyle(obstacle);
    var topObstacle = parseInt(styleObstacle.top);
    var leftObstacle = parseInt(styleObstacle.left);
    var wObstacle = parseInt(styleObstacle.width);
    var hObstacle = parseInt(styleObstacle.height);
    if (posY < leftObstacle + wObstacle && posY + wCarre > leftObstacle && posX < topObstacle + hObstacle && posX + hCarre > topObstacle) {
        sourisEnfoncee = false;
        return true;
    }
    return false;
}

function collision(posX, posY)
{
    var pasCollision =true;
    var listeObstacles = document.querySelectorAll('.obstacle');
    listeObstacles.forEach(function (obstacle) {
        pasCollision = pasCollision && !collisionUnObstacle(obstacle, posX, posY);
    });
    return !pasCollision;
}

