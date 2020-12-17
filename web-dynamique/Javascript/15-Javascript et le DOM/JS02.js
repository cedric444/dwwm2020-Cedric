function afficherdate()
{
    var date = new Date();
    var todayDate = ((date.getDate()<10)?"0":"")+date.getDate()+"/"+((date.getMonth()<10)?"0":"")+(date.getMonth()+1)+"/"+date.getFullYear();
    
    return todayDate.value;    
}
function afficherheure()
{
    var heure = new Date();
    var heureActu = date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();
    
    return heureActu.innerHtml;    
}
var date = document.getElementById("date");
date =date.addEventListener("click",afficherdate);