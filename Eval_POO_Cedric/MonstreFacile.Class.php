<?php

class MonstreFacile
{

    /*****************Attributs***************** */
    private $_estVivant;
    private $_joueur;
    private $_lanceLeDe;
    private static $_compteur = 0;
    private $_degats;

    /*****************Accesseurs***************** */
    public function getEstVivant()
    {
        return $this->_estVivant;
    }

    public function setEstVivant($estVivant)
    {
        $this->_estVivant = $estVivant;
    }
    public function getJoueur()
    {
        return $this->_joueur;
    }

    public function setJoueur($joueur)
    {
        $this->_joueur = $joueur;
    }
    public function getLanceLeDe()
    {
        return $this->_lanceLeDe;
    }

    public function setLanceLeDe($lanceLeDe)
    {
        $this->_lanceLeDe = $lanceLeDe;
    }
    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
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
        self::$_compteur++;
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
    public function attaque($joueur, $degats)
    {
        if ($this->getLanceLeDe() > $joueur->getLanceLeDe())
        {
            return $degats;
        }
    }
    public function estVivant($joueur)
    {
        if ($joueur->getLanceLeDe() > $this->getLanceLeDe())
        {
            return 0;
        }
    }
}