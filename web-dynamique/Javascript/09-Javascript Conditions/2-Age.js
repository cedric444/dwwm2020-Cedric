var actu= new Date();
var annee =prompt("Quel est votre année de naissance?");
var age = actu.getFullYear() - annee;
if (age<18)
{
    alert(age+" ans. Vous êtes mineur");
}
else
{
    alert(age+" ans. Vous êtes majeur");
}