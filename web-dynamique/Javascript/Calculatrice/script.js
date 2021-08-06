//On recupere les boutons et on écoute les clicks
 
var lesBoutons = document.getElementsByClassName("btn");
for (i=0; i<lesBoutons.length; i++)
{
    lesBoutons[i].addEventListener("click", clickBtn);
}

//On recupere l'afficheur

var result = document.getElementById("result");

var reset = document.getElementById("clear");
reset.addEventListener("click", function(){
    result.textContent= "";
    for (let i=0; i<lesBoutons.length; i++)
    {
        lesBoutons[i].addEventListener("click", clickBtn)
    }
});

var erase = document.getElementById("supp");
erase.addEventListener("click", function() {
    result.textContent= result.substring(0, result.length-1);
    for(let i=0; i<lesBoutons.length; i++)
    {
        lesBoutons[i].addEventListener("click", clickBtn)
    }
});

// fonction qui est lancée quand un bouton est cliqué

function clickBtn(e)
{
    var btnClick = e.target;
    var valBtn = btnClick.textContent;

    if (valBtn == "=")
    {
        result.textContent += "="+eval(result.textContent);
        
        for (let i=0; i<lesBoutons.length; i++)
        {
            lesBoutons[i].removeEventListener("click", clickBtn);
        }
    }
    else if (valBtn == "return")
    {
        result.textContent = result.textContent.substring(0,result.textContent.length -1);
    }
    else
    {
        result.textContent += valBtn;
    }
}
