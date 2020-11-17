<?php
class ClientsManager
{
    public static function add(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Clients (nomClient, prenomClient, codePostal, ville) VALUES (:nomClient, :prenomClient, :codePostal, :ville)");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->bindValue(":ville", $obj->getVille());
        $q->execute();
    }

    public static function update(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Clients SET nomClient=:nomClient, prenomClient=:prenomClient, codePostal=:codePostal, ville=:ville WHERE idClient=:idClient");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":codePostal", $obj->getCodePostal());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $db =DbConnect::getDb();
        $db->exec("DELETE FROM Clients WHERE idClient=".$obj->getIdClient());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Clients WHERE idClient=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if($results != false)
        {
            return new Clients($results);    
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
        $q = $db->query("SELECT *FROM Clients");
        while ($donnees =$q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[]= new Clients($donnees);
            }
        }
        return $liste;
    }

}