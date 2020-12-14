var date = document.getElementById("date");
var btn = document.getElementsByClassName("btn");
for(i=0; i<btn; i++)
{
    btn[i].addEventListener("click",afficherdate);
}
function afficherdate()