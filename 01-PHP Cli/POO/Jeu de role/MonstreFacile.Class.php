<?php

class MonstreFacile
{

    /*****************Attributs***************** */
    private const DEGATS = 10;
    protected $_estVivant = true;
    private static $_nombreFacile;

    /*****************Accesseurs***************** */
    public function getLancerDe()
    {
        return $this->_lancerDe;
    }

    public function setLancerDe($lancerDe)
    {
        $this->_lancerDe = $lancerDe;
    }    
    public function getDegats()
    {
        return $this->_degats;
    }

    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }
    public function getEstVivant()
    {
        return $this->_estVivant;
    }

    public function setEstVivant($estVivant)
    {
        $this->_estVivant = $estVivant;
    }
    public static function getNombreFacile()
    {
        return self::$_nombreFacile;
    }

    public static function incrementNombreFacile()
    {
        self::$_nombreFacile ++;
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
    public function lancerDE()
    {
        return De::lancerDe();
    }
    public function estVivant()
    {

    }
    public function attaque(Joueur $joueur, $trace)
    {
        $valMonstre = $this->lancerDe();
        $valJoueur = $joueur->lancerDe();
        if ($trace)
        {
            echo"Monstre attaque: ".$valMonstre."\t".$joueur->getNom().": ".$valJoueur;
        }
        if($valMonstre > $valJoueur)
        {
            $joueur->subitDegats(self::DEGATS, $trace);
        }
    }
    public function subitDegats()
    {
        $this->setEstVivant(false);
        self::incrementNombreFacile();
    }

}