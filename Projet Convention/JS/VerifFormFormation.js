var select = document.getElementsByTagName("select")[0];
select.addEventListener("input", inputSelect);
function inputSelect(e)
{
    result="";
    valeurs = select.selectedOptions;
    for (let i = 0; i < valeurs.length; i++) {
        result += valeurs[i].value + ",";
        
    }
    console.log(result.substring(0, result.length - 1));
    document.getElementsByName("utilisateur")[0].value=result;
    
}