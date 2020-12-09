var PU = parseInt(prompt("Entrer le prix du produit"));
var QTECOM = parseInt(prompt("Quelle quantité a été commandée?"));
var TOT = PU * QTECOM;
var REM =0;
var PORT = 0;
if(TOT < 500)
{
    if (PORT < 6)
    {
        PORT = 6;
    }
    else
    {
        PORT = TOT * 2 / 100;
    }
    
}
if (TOT > 100 && TOT <200)
    {
        var REM = TOT * 5 / 100;
    }
else if (TOT > 200)
    {
        var REM= TOT * 10 / 100;
    }
alert("remise : "+REM);
alert("port : "+PORT);
var PAP = TOT - REM + PORT;
alert ("prix à payer : "+PAP);
