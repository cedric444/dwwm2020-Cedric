
--
-- Base de données : baseproduits
--
DROP DATABASE IF EXISTS baseproduits;
CREATE DATABASE IF NOT EXISTS baseproduits;
USE baseproduits;

DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
    idProduit int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelleProduit varchar(50) NOT NULL,
    prix int(11) NOT NULL,
    dateDePeremption date NOT NULL 
) ENGINE=InnoDB;

DROP TABLE IF EXISTS clients;
CREATE TABLE IF NOT EXISTS clients (
    idClient int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomClient varchar(50) NOT NULL,
    prenomClient varchar(50) NOT NULL,
    codePostal varchar(50) NOT NULL,
    ville varchar(50) NOT NULL
) ENGINE=InnoDB;

DROP TABLE IF EXISTS utilisateurs;
CREATE TABLE IF NOT EXISTS utilisateurs (
    idUtilisateur int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomUtilisateur varchar(50) NOT NULL,
    prenomUtilisateur varchar(50) NOT NULL,
    motDePasse varchar(50) NOT NULL,
    adresseMail varchar(50) NOT NULL,
    role int(2) NOT NULL,
    pseudo varchar(50) NOT NULL
) ENGINE=InnoDB;

DROP TABLE IF EXISTS texte;
CREATE TABLE IF NOT EXISTS texte (
    idTexte int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codeTexte varchar(5) NOT NULL,
    codeLangue varchar(5) NOT NULL,
    texte text NOT NULL
) ENGINE=InnoDB;
--
-- Chargement des données de la table produits
--

INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(1, 'gomme', 2, '2020-11-30');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(2, 'crayon', 1, '2020-11-30');

--
-- Chargement des données de la table clients
--

INSERT INTO clients (idClient, nomClient, prenomClient, CodePostal, ville) VALUES(1,'Dubois', 'Paul', '59000', 'Lille');
INSERT INTO clients (idClient, nomClient, prenomClient, CodePostal, ville) VALUES(2,'Martin', 'Denis', '62000', 'Arras');

INSERT INTO utilisateurs(idUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasse, adresseMail, role, pseudo) VALUES (1,'Pietka','Cedric','toto','too@mail.com',1,'Isdkozp');