<?php

class Voiture
{
    //Attributs
    private $_marque;
    private $_modele;
    private $_annee;
    private $_immat;

    //Méthodes
    //Constructeur
    public function __construct($marque, $modele, $annee, $immat)
    {
        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setAnnee($annee);
        $this->setImmat($immat); 
    }

    //getter
    public function getMarque()
    {
        return $this->_marque;
    }
    public function getModele()
    {
        return $this->_modele;
    }
    public function getAnnee()
    {
        return $this->_annee;
    }
    public function getImmat()
    {
        return $this->_immat;
    }

    //setter
    public function setMarque($marque)
    {
        $this->_marque = ucfirst($marque);
    }
    public function setModele($modele)
    {
        $this->_modele = strtoupper($modele);
    }
    public function setAnnee($annee)
    {
        $this->_annee = $annee;
    }
    public function setImmat($immat)
    {
        $this->_immat = strtoupper($immat);
    }

    //Autres méthodes

    public function toString()
    {
        $reponse = "La voiture est de marque $this->getMarque(), de modèle $this->getModele() de l'année $this->getAnnee(). Son immatriculation est $this->getImmat().";
        return $reponse;
    }
    public function equalsTo($objet)
    {
        if ($this->getMarque() == $objet->getMarque() && $this->getModele() == $objet->getModele() && $this->getAnnee == $objet->getAnnee() && $this->getImmat() == $objet->getAnnee())
        {
            return true;
        }
        return false;
    }
    public function compareTo($objet)
    {
        if ($this->getAnnee()< $objet->getAnnee())
        {
            return 1;
        }
        if ($this->getAnnee() == $objet->getAnnee()) {
            return 0;
        }
        else
        {
            return -1;
        }
    }
}