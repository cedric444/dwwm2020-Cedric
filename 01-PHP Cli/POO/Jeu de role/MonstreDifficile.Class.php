<?php

class MonstreDifficile extends MonstreFacile
{

    /*****************Attributs***************** */
    private const DEGATSORT = 5;
    private static $_nombreDifficile;

    /*****************Accesseurs***************** */
    public static function getNombreDifficile()
    {
        return self::$_nombreDifficile;
    }

    public static function setNombreDifficile($nombreDifficile)
    {
        self::$_nombreDifficile ++;
    }
    
    /*****************Constructeur***************** */

   

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
    public function attaque($joueur, $trace)
    {
        if ($trace)
        {
            echo"C'est un monstre difficile"."\n";
        }
        parent::attaque($joueur, $trace);
        $joueur->subitDegats($this->sortMagique($trace), $trace);
    }
    public function sortMagique($trace)
    {
        $valeur = $this->lancerDe();
        if ($trace)
        {
            echo"***               sort magique ".$valeur."\n";
        }
        if($valeur==6)
        {
            return 0;
        } 
        return (self::DEGATSORT * $valeur);        
    }

}