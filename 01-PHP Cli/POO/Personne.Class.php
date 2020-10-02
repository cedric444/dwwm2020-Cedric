<?php

class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;

    //Méthodes

    //Constructeur
    public function __construct($nom, $prenom, $age)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
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

    // Autres méthodes

    public function toString()
    {
        $reponse = "le nom de la personne est $this->_nom, son prénom $this->_prenom et son âge $this->_age.";
        return $reponse;
    }
    public function equalsTo($objet)
    {
        if($this->_nom == $objet->getNom() && $this->_prenom == $objet->getPrenom() && $this->_age == $objet->getAge())
        {
            return true;
        }
        return false;
    }
    public function compareTo($objet)
    {
        if($this->_nom > $objet->getNom())
        {
            return 1;
        }
        else if($this->_nom == $objet->getNom())
        {
            return 0;
        }
        else
        {
            return -1;
        }
    }
}