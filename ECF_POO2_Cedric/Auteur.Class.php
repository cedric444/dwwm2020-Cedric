<?php

class Auteur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
    private $_dateDeDeces;
    private $_estVivant = true;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }

    public function getDateDeDeces()
    {
        return $this->_dateDeDeces;
    }

    public function setDateDeDeces(DateTime $dateDeDeces)
    {
        $this->_dateDeDeces = $dateDeDeces;
    }

    public function getEstVivant()
    {
        return $this->_estVivant;
    }

    public function setEstVivant($estVivant)
    {
        $this->_estVivant = $estVivant;
    }
    
    /*****************Constructeur***************** */

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

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        $aff = "Nom: ".$this->getNom()."\nPrénom: ".$this->getPrenom()."\nDate de Naissance: ".$this->getDateDeNaissance();
        if (!($this->getEstVivant()))
        {
            return $aff .= $this->getDateDeDeces();
        }
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($object0)                                                      
    {                   //on vérifie l'égalité de tous les attributs
        if ($this->getNom() == $object0->getNom() && $this->getPrenom() == $object0->getPrenom() && $this->getDateDeNaissance() == $object0->getDateDeNaissance() && $this->getDateDeDeces() == $object0->getDateDeDeces())
        {
            return true;
        }
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }
}