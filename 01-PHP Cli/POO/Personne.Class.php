<?php

class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_voiturePrincipale;

    //Méthodes

    //Constructeur
    public function __construct($nom, $prenom, $age, $voiturePrincipale, $villeDeResidence)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setvoiturePrincipale($voiturePrincipale);
        $this->setVille($villeDeResidence);
    }

    //Assesseurs
    //Getter
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getVoiturePrincipale()
    {
        return $this->_voiturePrincipale;
    }
    public function getVille()
    {
        return $this->_villeDeResidence;
    }
    
    //Setter
    public function setNom($nom)
    {
        $this->_nom = ucfirst($nom);
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }
    public function setAge($age)
    {
        $this->_age = $age > 0 ? $age : null;
    }
    public function setVoiturePrincipale(Voiture $voiturePrincipale)
    {
        $this->_voiturePrincipale = $voiturePrincipale;
    }
    public function setVille($villeDeResidence)
    {
        $this->_villeDeResidence = $villeDeResidence;
    }

    // Autres méthodes

    public function toString()
    {
        $reponse = "le nom de la personne est $this->getNom(), son prénom $this->getPrenom() et son âge $this->getAge(). Elle possède comme voiture : $this->getVoiturePrincipale(). Elle réside à : $this->getVille().";
        return $reponse;
    }
    public function equalsTo($objet)
    {
        if($this->getNom() == $objet->getNom() && $this->getPrenom() == $objet->getPrenom() && $this->getAge() == $objet->getAge())
        {
            return true;
        }
        return false;
    }
    public function compareTo($objet)
    {
        if($this->getNom() > $objet->getNom())
        {
            return 1;
        }
        else if($this->getNom() < $objet->getNom())
        {
            return -1;
        }
        else
        {
            if($this->getPrenom() > $objet->getPrenom())
            {
                return 1;
            }
            else if($this->getPrenom() < $objet->getPrenom())
            {
                return -1;
            }
            else{
                return 0;
            }
        }
        
    }
}