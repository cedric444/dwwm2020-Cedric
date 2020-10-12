<?php

class Joueur
{

    /*****************Attributs***************** */
    private $_nom;
    private static $_pointsDeVie;
    private $_lanceLeDe;
    private $_monstre;    
    private $_degats;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public static function getPointsDeVie()
    {
        return self::$_pointsDeVie;
    }

    public static function setPointsDeVie($pointsDeVie)
    {
        self::$_pointsDeVie = $pointsDeVie;
    }
    public function getLanceLeDe()
    {
        return $this->_lanceLeDe;
    }

    public function setLanceLeDe(De $lanceLeDe)
    {
        $this->_lanceLeDe = $lanceLeDe;
    }
    public function getMonstre()
    {
        return $this->_monstre;
    }

    public function setMonstre(MonstreFacile $monstre)
    {
        $this->_monstre = $monstre;
    }

    public function getDegats()
    {
        return $this->_degats;
    }

    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_pointsDeVie = 50;           //on initialise les points de vie du joueur
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
    public function estVivant()                                                              //Méthode qui vérifie que le joueur possède encore des points de vie
    {
        if (self::$_pointsDeVie > 0)
        {
            return 1;
        }
    }
    public function attaque($monstre)                                                       //Méthode qui vérifie si l'attaque du joueur réussie
    {
        if ($this->getLanceLeDe() >= $monstre->getLanceLeDe())
        {
            return 1;
        }
    }
    public function subitDegats($degats)                                          // Methode qui renvoie les degats subie selon les monstres
    {
        
        
            
    }
}