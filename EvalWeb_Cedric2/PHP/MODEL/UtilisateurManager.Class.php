<?php

class UtilisateurManager
{
    public static function add(Utilisateur $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO utilisateurs (nomUtilisateur, prenomUtilisateur, role, idMatiere, login, motDePasse) VALUES(:nomUtilisateur, :prenomUtilisateur, :role, :idMatiere, :login, :motDePasse)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":login", $obj->getLogin());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->execute();
    }

    public static function update(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
        $q=$db->prepare("UPDATE utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,role=:role,idMatiere=:idMatiere,login=:login,motDePasse=:motDePasse WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":role", $obj->getRole());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":login", $obj->getLogin());
        $q->bindValue(":motDePasse", $obj->getMotDePasse());
        $q->execute();
    }

    public static function delete(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM utilisateurs WHERE idUtilisateur=". $obj->getIdUtilisateur());
    }

    public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM utilisateurs WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateur($results);
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
		$q = $db->query("SELECT * FROM utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateur($donnees);
			}
		}
		return $liste;
    }
    
    public static function getByPseudo($login)
    {
        $db=DbConnect::getDb();
		 if (!in_array(";",str_split($login)))
		 {
			$q=$db->query("SELECT * FROM Utilisateurs WHERE login ='" . $login . "'");
			$results = $q->fetch(PDO::FETCH_ASSOC);
			if($results != false)
			{
				return new Utilisateur($results);
			}
			else
			{
				return false;
			}
		 }
	}
}