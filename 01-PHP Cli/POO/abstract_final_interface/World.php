<?php

 interface World
 {
 
    //  /*****************Attributs***************** */
    //  private $_toto;
 
    //  /*****************Accesseurs***************** */
    //  public function getToto()
    //  {
    //       return $this->_toto;
    //  }

    //  public function setToto($toto)
    //  {
    //       $this->_toto = $toto;
    //  }
     
    //  /*****************Constructeur***************** */
 
    //  public function __construct(array $options = [])
    //  {
    //      if (!empty($options)) // empty : renvoi vrai si le tableau est vide
    //      {
    //          $this->hydrate($options);
    //      }
    //  }
    //  public function hydrate($data)
    //  {
    //      foreach ($data as $key => $value)
    //      {
    //          $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
    //          if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
    //          {
    //              $this->$methode($value);
    //          }
    //      
    public function world();
     
 }