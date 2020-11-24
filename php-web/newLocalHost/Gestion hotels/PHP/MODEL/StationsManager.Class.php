<?php

class StationsManager
{
    public static function add(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stations (nomStation,AltitudeStation,adresseStation,villeStation,idStation) VALUES (:nomStation,:AltitudeStation,:adresseStation,:villeStation,:idStation)");
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":AltitudeStation", $obj->getAltitudeStation());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->execute();
	}

	public static function update(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stations SET idStation=:idStation,nomStation=:nomStation,AltitudeStation=:AltitudeStation,adresseStation=:adresseStation,villeStation=:villeStation,idStation=:idStation WHERE idStation=:idStation");
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":AltitudeStation", $obj->getAltitudeStation());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->execute();
	}
	public static function delete(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stations WHERE idStation=" .$obj->getIdStation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stations WHERE idStation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stations($results);
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
		$q = $db->query("SELECT * FROM Stations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stations($donnees);
			}
		}
		return $liste;
	}
}