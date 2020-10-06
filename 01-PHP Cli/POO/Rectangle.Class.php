<?php
class Rectangle
{
    //Attributs
    private $_longueur;
    private $_largeur;

    //Assesseurs
    public function setLongueur($long)
    {
        $this->_longueur = $long;
    }
    public function getLongueur()
    {
        return $this->_longueur;
    }
    public function setLargeur($larg)
    {
        $this->_largeur = $larg;
    }
    public function getLargeur()
    {
        return $this->_largeur;
    }

    //constructeur
    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    //Méthodes
    public function perimetre()
    {
        $perimetre = $this->getLongueur() + $this->getLargeur();
        return $perimetre;
    }
    public function aire()
    {
        $aire = $this->getLongueur() * $this->getLargeur();
        return $aire;
    }
    public function estCarre()
    {
        return($this->getLongueur() == $this->getLargeur());
    }
    public function afficherRectangle()
    {
        echo "Longueur : [$this->getLongueur()]  Largeur : [$this->getLargeur()]  Périmètre : [$this->perimetre()]  Aire : [$this->aire()] - ";
    }

}