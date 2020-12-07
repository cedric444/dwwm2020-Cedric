<?php

class Produits
{

    /*****************Attributs***************** */
    private $_idProduit;
    private $_nomProduit;
    private $_couleurProduit;
    private $_poidsProduit;

    /*****************Accesseurs***************** */
    public function getIdProduit()
    {
        return $this->_idProduit;
    }

    public function setIdProduit($idProduit)
    {
        $this->_idProduit = $idProduit;
    }

    public function getNomProduit()
    {
        return $this->_nomProduit;
    }

    public function setNomProduit($nomProduit)
    {
        $this->_nomProduit = $nomProduit;
    }

    public function getCouleurProduit()
    {
        return $this->_couleurProduit;
    }

    public function setCouleurProduit($couleurProduit)
    {
        $this->_couleurProduit = $couleurProduit;
    }

    public function getPoidsProduit()
    {
        return $this->_poidsProduit;
    }

    public function setPoidsProduit($poidsProduit)
    {
        $this->_poidsProduit = $poidsProduit;
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
        return "Nom : ".$this->getNomProduit()."\nCouleur: ".$this->getCouleurProduit()."\nPoids : ".$this->getPoidsProduit()."\n";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
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