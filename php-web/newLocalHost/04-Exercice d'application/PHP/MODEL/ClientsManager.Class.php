<?php

Class ClientsManager

{
    public static function add(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q= $db->prepare("INSERT INTO clients (nomClient, villeClient) VALUES (:nomClient, :villeClient)");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":villeClient", $obj->getVilleClient());
        $q->execute();
    }

    public static function update(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE clients SET idClient=:idClient, nomClient=:nomClient, villeClient=:villeClient WHERE idClient=:idClient");
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":villeClient", $obj->getVilleClient());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM clients WHERE idClient=".$obj->getIdClient());
    }

    public static function findById($id)
    {
        $db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM clients WHERE idClient =".$id);
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
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM clients");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Clients($donnees);
			}
		}
		return $liste;
	}
}