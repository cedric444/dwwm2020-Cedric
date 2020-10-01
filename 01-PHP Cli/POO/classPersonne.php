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

}