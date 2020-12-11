function nbLettres(phrase, lettre)
{
    for (i=0; i<phrase.length; i++)
    {
        if(mot[i] == lettre)
        {
            cpt++;
            mot = mot.substring(indexOf(mot[i]+1), mot.length);
        }
    }
    console.log(cpt);
}