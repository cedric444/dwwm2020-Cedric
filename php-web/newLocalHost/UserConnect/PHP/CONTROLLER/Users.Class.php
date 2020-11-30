<?php

class Users
{

    /*****************Attributs***************** */
    private $_idUser;
    private $_nomUser;
    private $_prenomUser;
    private $_motDePasse;
    private $_adresseMail;
    private $_role;
    private $_pseudo;

    /*****************Accesseurs***************** */
    public function getIdUser()
    {
        return $this->_idUser;
    }

    public function setIdUser($idUser)
    {
        $this->_idUser = $idUser;
    }

    public function getNomUser()
    {
        return $this->_nomUser;
    }

    public function setNomUser($nomUser)
    {
        $this->_nomUser = $nomUser;
    }

    public function getPrenomUser()
    {
        return $this->_prenomUser;
    }

    public function setPrenomUser($prenomUser)
    {
        $this->_prenomUser = $prenomUser;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }

    public function setMotDePasse($motDePasse)
    {
        $this->_motDePasse = $motDePasse;
    }

    public function getAdresseMail()
    {
        return $this->_adresseMail;
    }

    public function setAdresseMail($adresseMail)
    {
        $this->_adresseMail = $adresseMail;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($role)
    {
        $this->_role = $role;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
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
        return "IdUser : ".$this->getIdUser()."Nom : ".$this->getNomUser()."Prenom : ".$this->getPrenomUser()."MotDePasse : ".$this->getMotDePasse()."AdresseMail : ".$this->getAdresseMail()."Role : ".$this->getRole()."Pseudo : ".$this->getPseudo()."\n";
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