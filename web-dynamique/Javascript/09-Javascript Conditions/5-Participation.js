var prixRepas = prompt("Prix du repas");
var situation = prompt("Etes-vous marié?");
var enf = prompt("Combien avez-vous des enfants?");
var salaire= prompt("Quel est votre salaire?");
var participation;

if(situation == "oui")
{
      participation = prixRepas * 25 /100
      if (enf > 0)
      {
          participation = prixRepas *(25/100 + (10/100 * enf));
          if(participation > prixRepas * 50/100)
          {
              participation = prixRepas * 50/100;
          }
          if (salaire < 1200)
          {
              participation += participation * 10 /100;
          }
      }
}
else
{
    participation = prixRepas * 20 / 100;
    if (enf > 0)
    {
        participation = prixRepas *(20/100 + (10/100 * enf));
        if(participation > prixRepas * 50/100)
        {
            participation = prixRepas * 50/100;
        }
        if (salaire < 1200)
        {
            participation += participation * 10 /100;
        }
    }
}
alert(participation);