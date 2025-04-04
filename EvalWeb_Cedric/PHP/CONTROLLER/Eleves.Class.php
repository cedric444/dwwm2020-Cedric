<?php

class Eleves
{

    /*****************Attributs***************** */
    private $_idEleve;
    private $_nomEleve;
    private $_prenomEleve;
    private $_classe;

    /*****************Accesseurs***************** */
    public function getIdEleve()
    {
        return $this->_idEleve;
    }

    public function setIdEleve(int $idEleve)
    {
        $this->_idEleve = $idEleve;
    }

    public function getNomEleve()
    {
        return $this->_nomEleve;
    }

    public function setNomEleve($nomEleve)
    {
        $this->_nomEleve = $nomEleve;
    }

    public function getPrenomEleve()
    {
        return $this->_prenomEleve;
    }

    public function setPrenomEleve($prenomEleve)
    {
        $this->_prenomEleve = $prenomEleve;
    }

    public function getClasse()
    {
        return $this->_classe;
    }

    public function setClasse($classe)
    {
        $this->_classe = $classe;
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
        return "Nom : ".$this->getNomEleve()."\tprenom : ".$this->getPrenomEleve()."\tclasse : ".$this->getClasse();
    }

    
}