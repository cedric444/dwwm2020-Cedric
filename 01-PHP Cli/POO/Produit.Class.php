<?php

class Produit
{

    /*****************Attributs***************** */
    private $_numero;
    private $_prixHT;
    private $_TVA;
    private $_designation;
    private $_couleur;
    private $_dateValidite;
    private $_categorie;
    private $_lieuxStockage =[];
    private $_compteur=0;
    

    /*****************Accesseurs***************** */
    public function getNumero()
    {
        return $this->_numero;
    }

    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }
    public function getPrixHT()
    {
        return $this->_prixHT;
    }

    public function setPrixHT($prixHT)
    {
        $this->_prixHT = $prixHT;
    }
    public function getTVA()
    {
        return $this->_TVA;
    }

    public function setTVA(Categorie $TVA)
    {
        $this->_TVA = $TVA;
    }
    public function getDesignation()
    {
        return $this->_designation;
    }

    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }
    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }
    public function getDateValidite()
    {
        return $this->_dateValidite;
    }

    public function setDateValidite($dateValidite)
    {
        $this->_dateValidite = $dateValidite;
    }
    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie(Categorie $categorie)
    {
        $this->_categorie = $categorie;
    }
    public function getLieuxStockage()
    {
        return $this->_lieuxStockage;
    }

    public function setLieuxStockage(LieuStockage $lieuxStockage)
    {
        $this->_lieuxStockage = $lieuxStockage;
    }
    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur++;
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
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
        return "";
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
    public function estPerime()                                                     // On génère la date actuelle, on fait la différence avec la date de validité
    {                                                                               // si la différence est inférieure à 0, le produit est périmé
        $dateActu = new DateTime('now');
        $diff = ($dateActu->diff($this->getDateValidite()))->format('d');
        return $diff < 0; 
    }
    public function entreEnStock() 
    {
        
    }
    public function prixTTC()                                                      // méthode qui calcule le prix TTC à partir du prix HT et de la TVA
    {
        $prixTTC = $this->getPrixHT() + ($this->getPrixHT() * $this->getTVA());
        return $prixTTC; 
    }
    public function triCategorieDesignation($obj1, $obj2)                                      // méthode qui va trier les produit par catégorie puis par désignation
    {
        if($obj1->getCategorie() < $obj2->getCategorie())
        {
            return 1;
        }
        else if ($obj1->getCategorie() > $obj2->getCategorie())
    
        {
            return -1;
        }
        else if ($obj1->getCategori() == $obj2->getCategorie())
        {
            if($obj1->getDesignation()< $obj2->getDesignation())
            {
                return 1;
            }
            else if ($obj1->getDesignation()>$obj2->getDesignation())
            {
                return -1;
            }
        }
        else
            return 0;
    }

    
}
