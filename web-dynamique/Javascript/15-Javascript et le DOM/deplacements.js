function deplace(dleft, dtop) {
    var deplacement_ok = true;
    // permet de deplacer le carre selon 2 directions left et top
    //on recupere son style (tout le CSS)
    var styleCarre = window.getComputedStyle(carre, null);
    //on recupere les positions left et top actuelles
    var topCarre = parseInt(styleCarre.top);
    var leftCarre = parseInt(styleCarre.left);
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
        deplacement_ok = deplacement_ok && depl_ok(topObstacle, leftObstacle, wObstacle, hObstacle, topCarre + dtop, leftCarre + dleft, wCarre, hCarre,element) 
    });
    //on modifie les positions left et top actuelles
    if(deplacement_ok)
    {
        document.getElementById('carre').style.top = topCarre + dtop + 'px';
        document.getElementById('carre').style.left = leftCarre + dleft + 'px';
    }
}


function depl_ok(topObstacle, leftObstacle, wObstacle, hObstacle, topCarre, leftCarre, wCarre, hCarre,obstacle)
{
    if(leftCarre < leftObstacle + wObstacle && leftCarre + wCarre > leftObstacle && topCarre < topObstacle + hObstacle && topCarre + hCarre > topObstacle)
    {
        if(obstacle.id=="rect1")
        {
            alert("Vous avez gagné!!!");
        }
        else{
        compteur ++;
        console.log(compteur);
        return false;
        }
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


/*******************************Déplacement clavier*************************/


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

/****************************Déplacement souris***************************/


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
    var arriv = document.getElementById("rect1");
    if(arrivee(arriv, parseInt(e.clientY)+ecartY, parseInt(e.clientX)+ecartX))
    {
        console.log("gagné");
    }
    else if (!collision(parseInt(e.clientY) + ecartY, parseInt(e.clientX) + ecartX))
    {
        carre.style.top = parseInt(e.clientY) + ecartY + "px";
        carre.style.left = parseInt(e.clientX) + ecartX + "px";
    }
};

/************************gestion des obstacles*************************/


var compteur = 0;
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
        compteur++;
        console.log(compteur);
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


/***************************Chrono*****************************/


var total = 100;
var timer;
var startTimer = 100;
document.getElementById("chrono").innerHTML = 100;

function countDown(){
    document.getElementById("chrono").innerHTML = 100;
    total--;
    timer = setTimeout(countDown, 1000);
    if (total>0)
    {
        document.getElementById("chrono").innerHTML = total;
    }
    if (total == 0)
    {
        document.getElementById("chrono").innerHTML = total;
        alert("perdu");
        StopCount();
    }
}

function startCount(){          // fonction qui démarre le chrono
    if(startTimer){
        startTimer= 100;
        countDown();
    }
}

function StopCount(){           //On réinitialise le chrono
    clearTimeout(total);
    startTimer = 100;
}

start.addEventListener("click", e=>{
    startCount();
});

/***************************Arrivée************************/

function arrivee(rect1, posX, posY)
{
    var styleCarre= window.getComputedStyle(carre);
    var wCarre = parseInt(styleCarre.width);
    var hCarre = parseInt(styleCarre.height);
    var styleRect1 = window.getComputedStyle(rect1);
    var topRect1 = parseInt(styleRect1.top);
    var leftrect1 = parseInt(styleRect1.left);
    var wRect1 = parseInt(styleRect1.width);
    var hRect1 = parseInt(styleRect1.height);
    if (posY < leftrect1 + wRect1 && posY + wCarre > leftrect1 && posX < topRect1 + hRect1 && posX + hCarre > topRect1) {
        sourisEnfoncee = false;
        alert("Vous avez gagné!!!");
        return true;
        
    }
    return false;
}

/**********************Bonus************************/

var bonus = document.getElementsByClassName("bonus");


