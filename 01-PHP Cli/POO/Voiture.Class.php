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
    }
}