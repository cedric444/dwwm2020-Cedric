<?php

class EleveManager
{

    public static function add(Eleve $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO eleves (nomEleve, prenomEleve, classe) VALUES (:nomEleve, :prenomEleve, :classe)");
        $q->bindValue(":nomEleve", $obj->getNomEleve());
        $q->bindValue(":prenomEleve", $obj->getPrenomEleve());
        $q->bindValue(":classe", $obj->getClasse());
		$q->execute();
	}

    public static function update(Eleve $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE eleves SET nomEleve=:nomEleve,prenomEleve=:prenomEleve,classe=:classe WHERE idEleve=:idEleve");
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":nomEleve", $obj->getNomEleve());
        $q->bindValue(":prenomEleve", $obj->getPrenomEleve());
        $q->bindValue(":classe", $obj->getClasse());
		$q->execute();
    }
    
    public static function delete(Eleve $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM eleves WHERE idEleve=" .$obj->getIdEleve());
    }
    
    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM eleves WHERE idEleve =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Eleve($results);
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
		$q = $db->query("SELECT * FROM eleves");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Eleve($donnees);
			}
		}
		return $liste;
	}
}