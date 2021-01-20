//Déclaration des variables

var inputs= document.getElementsByClassName("donnees");
var capital= document.getElementById("capital");
var taux= document.getElementById("taux");
var duree= document.getElementById("duree");
var nbMois = duree*12;
var calcul = document.getElementById("calcul");
var mensualite = document.getElementById("mensualite");
var erreur=  document.getElementsByClassName("error");

// fonctions

function calculateur(){
    
            var mens = (capital.value * taux.value / 12) / (1 - Math.pow(1 + taux / 12, -nbMois));
            return mens;
    }




//verification des inputs

for(let i=0; i<inputs.length; i++)
{
        inputs[i].addEventListener("input", e =>{
            var input = e.target;                                            //input ciblé
            if(!Number.isInteger(input.value))
            {
                erreur.innerHTML = "Format incorrect";
            } 
    });
    
}



    if(capital.value !=0 && taux.value !=0 && duree.value !=0){
        
        mensualite.innerHTML = calculateur();
    }




