<?php

class SuiviManager
{
    public static function add(Suivi $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO suivis (idMatiere, idEleve, note, coefficient) VALUES(:idMatiere,:idEleve,:note,:coefficient)");
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":idEleve", $obj->getIdEleve());
        $q->bindValue(":note", $obj->getNote());
        $q->bindValue(":coefficient", $obj->getCoefficient());
        $q->execute();
    }

    public static function update(Suivi $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE suivis SET idSuivi=:idSuivi, idMatiere=:idMatiere, idEleve=:idEleve, note=:note, coefficient=:coefficient WHERE idSuivi=:idSuivi");
        $q->bindValue(":idSuivi", $obj->getIdSuivi());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":idEleve", $obj->getIdEleve());
        $q->bindValue(":note", $obj->getNote());
        $q->bindValue(":coefficient", $obj->getCoefficient());
        $q->execute();
    }

    public static function delete(Suivi $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM suivis WHERE idSuivi=". $obj->getIdSuivi());
    }

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM suivis WHERE idSuivi =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivi($results);
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
		$q = $db->query("SELECT * FROM suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
    }
}
