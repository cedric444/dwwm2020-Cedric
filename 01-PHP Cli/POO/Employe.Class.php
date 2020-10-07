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
    private $_listeEnfant =[];

    /*****************Accesseurs***************** */
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = ucfirst($nom);
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = ucfirst($prenom);
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
        $this->_poste = ucfirst($poste);
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
        $this->_service = ucfirst($service);
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

    public function setAgenceRattache(Agence $agenceRattache)
    {
        $this->_agenceRattache = $agenceRattache;
    }
    public function getListeEnfant()
    {
        return $this->_listeEnfant;
    }

    public function setListeEnfant(Array $listeEnfant)
    {
        $this->_Enfant = $listeEnfant;
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
        $aff = "\n\n*** SALARIE ***\n";
        $aff .="L'employé s'appelle ".$this->getNom()." ".$this->getPrenom().". Il a été embauché le ".$this->getDateEmbauche()->format('d/m/y')." au poste de ".$this->getPoste();
        $aff .= " dans le service ".$this->getService().". Il est rattaché à l'agence ".$this->getAgenceRattache()->toString().". Son salaire annuel s'élève à ".$this->getSalaire()."000 euros.";
        $aff .= $this->recoitChequeVacances()? "Ce salarié bénéficie de chèques vacances\n" : "Ce salarié ne bénéficie pas de chèque vacances.\n";
        $aff .= "\n***ENFANTS***\n";
        if (count($this->getListeEnfant() >0)
        {
            foreach($this->getListeEnfant() as $enfant)
            {
                $aff .= $enfant->toString;
            }
        }
        else
        {
            $aff .= "Pas d'enfant";
        }
        $aff .= "\n*** CHEQUES NOEL***\n";
        $cheques = $this->recoitChequeNoel();
        if (array_sum($cheques) > 0)
        {
            foreach ($cheques as $key=>$nbCheque) // on parcours le tableau de chèques
            {
                if ($nbCheque > 0)    //  si le nombre de chèque est supérieur à 0
                {
                    $aff .= $nbCheque . " chèque(s) de ".$key."\n";   //$nbCheque contient le nombre de chèques  et $key, la valeur du chèque
                }
            }
        }
        else
        {
            $aff .= "Pas de chèques de Noël";
        }
        return $aff;
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
    public static function compareToNomPrenom($obj1, $obj2)                     //méthode qui compare deux objets en fonction du nom des employés
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
    public function anciennete()                                    //On crée une méthode pour calculer l'ancienneté de l'employé
    {   
        $dateActu = new DateTime("now");                            //On appelle la classe DateTime pour générer la date d'aujourd'hui
        $diff = $dateActu->diff($this->getDateEmbauche());          //On utilise la fonction diff() pour calculer la différence entre la date actuelle et la date d'embauche
        $anciennete = $diff->format("%Y")*1;                        //On met la différence au format année
        return $anciennete;  
    }
    private function primeSalaire()                                 //méthode qui va renvoyer la prime basée sur le salaire
    {
        $primeSalaire = $this->getSalaire() * 1000 * 5 / 100;
        return $primeSalaire;
    }
    private function primeAnciennete()                              //méthode qui renvoie la prime basée sur l'ancienneté
    {
        $primeAnciennete = $this->getSalaire() * 1000 * 2 / 100 * $this->anciennete();
        return $primeAnciennete;
    }
    public function prime()                                         //méthode qui renvoie la prime totale
    {
        $prime = $this->primeSalaire() + $this->primeAnciennete();
        return $prime;
    }
    static public function compareToServiceNomPrenom($obj1, $obj2)  //on crée une méthode qui compare deux objet en fonction du service de l'employé, qui va permettre de trier le tableau
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
    public function masseSalariale()                                //méthode qui renvoie la masse salariale d'un employé
    {
        return $this->getSalaire()*1000 + $this->prime();
    }
    public function recoitChequeVacances()                                //méthode qui permet de savoir si un employé a droit au chèque vacance
    {
        return ($this->anciennete() >= 1);
        
    }
    
    public function recoitChequeNoel()
    {
        $cheque = ["0"=>0, "20"=>0, "30"=>0,"50"=>0];
        foreach($this->getListeEnfant() as $enfant)
        {
            $cheque[$enfant->montantChequeNoel()]+=1;
        }
        $cheque["0"]= 0;
        return $cheque;
    }
    
}
