var cpt20 = 0;
var cpt40 = 0;
var cptAutre = 0;
do{
    var age= prompt("Entrer l'âge");
    if(age<20)
    {
        cpt20++
    }
    else if(age>40)
    {
        cptAutre++;
    }
    else{
        cpt40++;
    }

}while(age <=100);
console.log(cpt20);
console.log(cpt40);
console.log(cptAutre);