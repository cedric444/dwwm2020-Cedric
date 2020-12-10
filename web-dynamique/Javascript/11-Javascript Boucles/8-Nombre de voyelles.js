var mot = prompt("entrer un mot");
var lettre = "";
var i = 0;
var cpt= 0;
 while(i < mot.length)
 {
     if(lettre=="a" || lettre=="e" || lettre=="i" || lettre=="o" || lettre=="u" || lettre=="y")
     {
         cpt++;
         mot.substr(i);
     }
     i++;
 }
 console.log(cpt);