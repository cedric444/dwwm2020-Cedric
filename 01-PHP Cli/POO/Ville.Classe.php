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
    public function getNom($nom)
    {
        return $this->_nom;
    }
    public function getRegion($region)
    {
        return $this->_region;
    }
    public function getPays($pays)
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
        $reponse = "La ville $this->_nom se situe dans la région $this->_region en $this->_pays.";
        return $reponse;
    }
    public function equalsTo($objet)
    {
        if($this->_nom == $objet->getNom() && $this->_region == $objet->getRegion() && $this->_pays == $objet->getPays())
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