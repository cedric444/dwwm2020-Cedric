<?php

class Joueur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_pV;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public function getPV()
    {
        return $this->_pV;
    }

    public function setPV($pV)
    {
        $this->_pV = $pV;
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
    public function lancerDe()
    {
        return De::LancerDe();
    }
    public function estVivant()
    {
        return ($this->getPV() >0);
    }
    public function attaque(MonstreFacile $monstre, $trace)
    {
        $valJoueur = $this->lancerDe();
        $valMonstre = $monstre->lancerDe();
        if ($trace)
        {
            echo $this->getNom()."attaque: ".$valJoueur."\tle Monstre: ".$valMonstre."\n";
        }
        if($valJoueur > $valMonstre)
        {
            if($trace)
            {
                return $monstre->subitDegats();
                echo"***            ".$this->getNom()." gagne"."\n";
            }
        }
    }
    public function subitDegats($degats, $trace)
    {
        if (!$this->bouclierFonctionne($trace))
        {
            $this->setPV($this->getPV() - $degats);
            if ($trace)
            {
                echo"***             ".$this->getNom()." subit des dégats ".$degats. " reste: ".$this->getPV()."\n";
            }
        }
    }
    private function bouclierFonctionne($trace)
    {
        $bouclier = De::lancerDe();
        if ($trace)
        {
            echo"***              bouclier".$bouclier."\n";
        }
        return ($bouclier <= 2);
    }
}