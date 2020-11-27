<?php

class Utilisateurs
{

    /*****************Attributs***************** */
    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_mdp;
    private $_mail;
    private $_roleUtilisateur;
    private $_pseudo;

    /*****************Accesseurs***************** */
    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }

    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->_nomUtilisateur = $nomUtilisateur;
    }

    public function getPrenomUtilisateur()
    {
        return $this->_prenomUtilisateur;
    }

    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->_prenomUtilisateur = $prenomUtilisateur;
    }

    public function getMdp()
    {
        return $this->_mdp;
    }

    public function setMdp($mdp)
    {
        $this->_mdp = $mdp;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    public function getRoleUtilisateur()
    {
        return $this->_roleUtilisateur;
    }

    public function setRoleUtilsateur($roleUtilisateur)
    {
        $this->_role = $roleUtilisateur;
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
        return 'Nom: '.$this->getNomUtilisateur().'<br>Prenom; '.$this->getPrenomUtilisateur().'<br>mail: '.$this->getMail().'<br>
        role: '.$this->getRoleUtilisateur().'<br> pseudo: '.$this->getPseudo(); 
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