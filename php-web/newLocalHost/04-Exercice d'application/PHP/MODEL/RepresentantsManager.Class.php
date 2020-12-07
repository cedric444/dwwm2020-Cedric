<?php

Class RepresentantsManager

{
    public static function add(Representants $obj)
    {
        $db = DbConnect::getDb();
        $q= $db->prepare("INSERT INTO Representants (nomRepres, villeRepres) VALUES (:nomRepres, :villeRepres)");
        $q->bindValue(":nomRepres", $obj->getNomRepres());
        $q->bindValue(":villeRepres", $obj->getVilleRepres());
        $q->execute();
    }

    public static function update(Representants $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Representants SET idRepres=:idRepres, nomRepres=:nomRepres, villeRepres=:villeRepres WHERE idRepres=:idRepres");
        $q->bindValue(":idRepres", $obj->getIdRepres());
        $q->bindValue(":nomRepres", $obj->getNomRepres());
        $q->bindValue(":villeRepres", $obj->getVilleRepres());
        $q->execute();
    }

    public static function delete(Representants $obj)
    {
        $db = DbConnect::getDb();
        $ventes=VentesManager::getListByRepresentant($obj->getIdRepres());
        foreach($ventes as $uneVente)
        {
            $uneVente->setIdRepres(5);
            VentesManager::update($uneVente);
        }
        
        $db->exec("DELETE FROM Representants WHERE idRepres=".$obj->getIdRepres());
    }

    public static function findById($id)
    {
        $db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Representants WHERE idRepres =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Representants($results);
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
		$q = $db->query("SELECT * FROM Representants");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Representants($donnees);
			}
		}
		return $liste;
	}
}