<?php
class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Utilisateurs (nomUtilisateur, prenomUtilisateur, mdp, mail, roleUtilisateur, pseudo) VALUES (:nomUtilisateur, :prenomUtilisateur, :mdp, :mail, :roleUtilisateur, :pseudo)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, mdp=:mdp, mail=:mail, roleUtilisateur=:roleUtilisateur, pseudo=:pseudo   WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":mdp", $obj->getMdp());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":roleUtilisateur", $obj->getRoleUtilisateur());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->execute();
    }

    public static function delete(Utilisateurs $obj)
    {
        $db =DbConnect::getDb();
        $db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=".$obj->getIdUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur=" . $id);
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
        $q = $db->query("SELECT * FROM Utilisateurs");
        while ($donnees =$q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[]= new Utilisateurs($donnees);
            }
        }
        return $liste;
    }
    
    public static function findByMail($mail)
    {
        $db=DbConnect::getDb(); 
        $q= $db->query("SELECT * FROM utilisateurs WHERE mail=". $mail);
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
}