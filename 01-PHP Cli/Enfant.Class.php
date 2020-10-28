<?php
class Enfant
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_age;
    

    /*****************Accesseurs***************** */
    public function get_nom()
    {
        return $this->_nom;
    }
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }
    public function get_prenom()
    {
        return $this->_prenom;
    }
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
    public function get_age()
    {
        return $this->_age;
    }    
    public function set_age($_age)
    {
        $this->_age = $_age;

        return $this;
    }
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty(options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate(options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst(key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([this, methode]))) // is_callable verifie que la methode existe
            {
                $this->methode(value);
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
     * @param [type] obj
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
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }   
}