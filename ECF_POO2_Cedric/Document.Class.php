<?php

class Document
{

    /*****************Attributs***************** */
    private $_auteur;                                                       //On définit les attributs
    private $_titre;
    private $_estEmprunte = true;


    /*****************Accesseurs***************** */
    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur(Auteur $auteur)
    {
        $this->_auteur = $auteur;
    }
    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = ucfirst($titre);
    }
    public function getEstEmprunte()
    {
        return $this->_estEmprunte;
    }

    public function setEstEmprunte($estEmprunte)
    {
        $this->_estEmprunte = $estEmprunte;
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
    public function toString()                                                                                      //méthode qui présente le document
    {
        $presentation = "Auteur: ".$this->getAuteur()->toString()."\nTitre: ".$this->getTitre();
        if ($this->getEstEmprunte())
        {
             $presentation .= $this->setEmprunte();
        }
        
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($object0)                                                                              //vérifie si les documents sont identiques.
    {
        if ($this->getTitre() == $object0->getTitre() && $this->getAuteur() == $object0->getAuteur())
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
    public function setEmprunte()                               //méthode qui renvoie "E" pour marquer que le document est emprunté
    {
        if ($this->getEstEmprunte())
        {
            return "E";
        }
    }

}