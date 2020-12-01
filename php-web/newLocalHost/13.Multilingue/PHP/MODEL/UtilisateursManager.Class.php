<?php
class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Utilisateurs (nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, role, pseudo) VALUES (:nomUtilisateur, :prenomUtilisateur, :motDePasse, :adresseMail, :role, :pseudo)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, motDePasse=:motDePasse, adresseMail=:adresseMail, roleUtilisateur=:roleUtilisateur, pseudo=:pseudo   WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->bindValue(":adresseMail", $obj->getAdresseMail());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function delete(Utilisateurs $obj)
    {
        $db =DbConnect::getDb();
        $db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=".$obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM utilisateurs WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if($results != false)
        {
            return new Utilisateurs($results);    
        }
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db =DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM utilisateurs");
        while ($donnees =$q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[]= new Utilisateurs($donnees);
            }
        }
        return $liste;
    }
    
    public static function findByAdresseMail($adresseMail)
    {
        $db=DbConnect::getDb(); 
        $q= $db->query("SELECT * FROM utilisateurs WHERE adresseMail=". $adresseMail);
        $results= $q->fetch(PDO::FETCH_ASSOC);
        if($results !=false)
        {
            return new Utilisateurs($results);
        }
        else
        { 
            return false;
        }
    }

    public static function findByPseudo($pseudo)
    {
        $db = DbConnect::getDb();
        if(!in_array(";",str_split($pseudo)))
        {
            $q = $db->query("SELECT * FROM utilisateurs WHERE pseudo ='" . $pseudo. "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}