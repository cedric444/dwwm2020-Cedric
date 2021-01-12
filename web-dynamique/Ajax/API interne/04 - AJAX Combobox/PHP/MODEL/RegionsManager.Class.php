<?php

Class RegionsManager

{
    public static function add(Regions $obj)
    {
        $db = DbConnect::getDb();
        $q= $db->prepare("INSERT INTO regions (libelleRegion) VALUES (:libelleRegion)");
        $q->bindValue(":libelleRegion", $obj->getLibelleRegion());
        $q->execute();
    }

    public static function update(Regions $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Regions SET idRegion=:idRegion, libelleRegion=:libelleRegion WHERE idRegion=:idRegion");
        $q->bindValue(":idRegion", $obj->getIdRegion());
        $q->bindValue(":libelleRegion", $obj->getLibelleRegion());
        $q->execute();
    }

    public static function delete(Regions $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM regions WHERE idRegion=".$obj->getIdRegion());
    }

    public static function findById($id)
    {
        $db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM regions WHERE idRegion =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Regions($results);
		}
		else
		{
			return false;
		}
    }

    public static function getList($api)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM regions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
                $liste[] = new Regions($donnees);
                $json[] = $donnees;
			}
		}
        if(!$api) return $liste;
        return $json;
	}
}