<?php

Class Ville
{
    //Attributs
    private $_nom;
    private $_region;
    private $_pays;

    //Méthodes
    //Constructeur
    public function __construct($nom, $region, $pays)
    {
        $this->setNom($nom);
        $this->setRegion($region);
        $this->setPays($pays);
    }

    //getter
    public function getNom()
    {
        return $this->_nom;
    }
    public function getRegion()
    {
        return $this->_region;
    }
    public function getPays()
    {
        return $this->_pays;
    }

    //setter
    public function setNom($nom)
    {
        $this->_nom = ucfirst($nom);
    }
    public function setRegion($region)
    {
        $this->_region = ucfirst($region);
    }
    public function setPays($pays)
    {
        $this->_pays = strtoupper($pays);
    }

    //Autres fonctions
    public function toString()
    {
        $reponse = "La ville $this->getNom() se situe dans la région $this->getRegion() en $this->getPays().";
        return $reponse;
    }
    public function equalsTo($objet)
    {
        if($this->getNom() == $objet->getNom() && $this->getRegion() == $objet->getRegion() && $this->getPays() == $objet->getPays())
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
        else if($this->getNom() == $objet->getNom())
        {
            return 0;
        }
        else
        {
            return -1;
        }
    }
}