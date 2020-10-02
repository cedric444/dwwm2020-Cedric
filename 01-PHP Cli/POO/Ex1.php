<?php
class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
    private $_adresse;

    //Constructeurs
    public function __construct()
    {

    }

    //Assesseurs

    //GETTER
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getDatedeNaissance()
    {
        return $this->_dateDeNaissance;
    }
    public function getAdresse()
    {
        return $this->_adresse;
    }

    //SETTER
    
}