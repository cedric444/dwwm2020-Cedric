<?php
class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_date;
    private $_poste;
    private $_salaire;
    private $_service;
    static private $_listeSalaries;
    static private $_compteur = 0;
    private $_agenceRattache;

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_date;
    }

    public function setDateEmbauche(DateTime $date)
    {
        $this->_date = $date;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function setSalaire($salaire)
    {
        $this->_salaire = $salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }
    public static function getListeSalaries()
    {
        return self::$_listeSalaries;
    }

    public static function setListeSalaries($listeSalaries)
    {
        self::$_listeSalaries = $listeSalaries;
    }
    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }
    public function getAgenceRattache()
    {
        return $this->_agenceRattache;
    }

    public function setAgenceRattache($agenceRattache)
    {
        $this->_agenceRattache = $agenceRattache;
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
        return "L'employé s'appelle $this->getNom() $this->getPrenom(). Il a été embauché le $this->getDate() au poste de $this->getPoste() dans le service $this->getService(). Son salaire s'élève à $this->getSalaire().";
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
    public static function compareToNomPrenom($obj1, $obj2)
    {
        if($obj1->getNom() < $obj2->getNom())
        {
            return -1;
        }
        else if ($obj1->getNom() > $obj2->getNom())
        {
            return 1;
        }
        if ($obj1->getPrenom() < $obj2->getPrenom())
        {
            return -1;
        }
        else if ($obj1->getPrenom() > $obj2->getPrenom())
        {
            return 1;
        } 
        else
        {
            return 0;
        }
    }
    public function anciennete()
    {
        $dateActu = new DateTime("now");
        $diff = $dateActu->diff($this->getDateEmbauche());
        $anciennete = $diff->format("%Y")*1;
        return $anciennete;  
    }
    private function primeSalaire()
    {
        $primeSalaire = $this->getSalaire() * 1000 * 5 / 100;
        return $primeSalaire;
    }
    private function primeAnciennete()
    {
        $primeAnciennete = $this->getSalaire() * 1000 * 2 / 100 * $this->anciennete();
        return $primeAnciennete;
    }
    public function prime()
    {
        $prime = $this->primeSalaire() + $this->primeAnciennete();
        return $prime;
    }
    static public function compareToServiceNomPrenom($obj1, $obj2)
    {
        
        if ($obj1->getService() < $obj2->getService())
        {
            return -1;
        }
        else if($obj1->getService() > $obj2->getService())
        {
            return 1;
        }
        else
        {
            return self::compareToNomPrenom($obj1, $obj2);
        }
    }
    public function masseSalariale()
    {
        return $this->getSalaire()*1000 + $this->prime();
    }
    public function chequeVacances()
    {
        if ($this->getAnciennete() > 1)
        {
            return 1;
        }
        else
        return 0;
    }

}