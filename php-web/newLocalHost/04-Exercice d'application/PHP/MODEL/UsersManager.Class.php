<?php

class UsersManager 
{
	public static function add(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Users (nomUser,prenomUser,pseudo,motDePasse,idRole) VALUES (:nomUser, :prenomUser, :pseudo, :motDePasse, :idRole)");
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Users SET idUser=:idUser, nomUser=:nomUser, prenomUser=:prenomUser, pseudo=:pseudo, motDePasse=:motDePasse, idRole=:idRole WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":pseudo", $obj->getPseudo());
		$q->bindValue(":motDePasse", $obj->getMotDePasse());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}
	public static function delete(Users $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Users WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Users WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Users($results);
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
		$q = $db->query("SELECT * FROM Users");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Users($donnees);
			}
		}
		return $liste;
	}

	public static function getListByRole(Roles $roles)
	{
		$id = (int) $roles->getIdRole();
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Users WHERE idRole=$id");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Users($donnees);
			}
		}
		return $liste;
	}

    public static function findByPseudo($pseudo)
	{
		 $db=DbConnect::getDb();
		 if (!in_array(";",str_split($pseudo)))
		 {
			$q=$db->query("SELECT * FROM Users WHERE pseudoUser ='" . $pseudo . "'");
			$results = $q->fetch(PDO::FETCH_ASSOC);
			if($results != false)
			{
				return new Users($results);
			}
			else
			{
				return false;
			}
		 }
	}
}