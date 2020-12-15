-- Base de données '9510'

DROP DATABASE IF EXISTS `9510`;
CREATE DATABASE IF NOT EXISTS `9510`;
USE `9510`;

-- structures des tables

DROP TABLE IF EXISTS Eleves;
CREATE TABLE IF NOT EXISTS Eleves (
    idEleve int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomEleve varchar(50),
    prenomEleve varchar(50),
    classe varchar(50)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Matieres;
CREATE TABLE IF NOT EXISTS Matieres (
    idMatiere int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    libelleMatiere varchar(50)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Suivis;
CREATE TABLE IF NOT EXISTS Suivis (
    idSuivi int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idMatiere int(11) NOT NULL,
    idEleve int(11) NOT NULL,
    note int(11) NOT NULL,
    coefficient int(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS Utilisateurs;
CREATE TABLE IF NOT EXISTS Utilisateurs (
    idUtilisateur int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    login varchar(50) NOT NULL,
    nomUtilisateur varchar(50) NOT NULL,
    prenomUtilisateur varchar(50) NOT NULL,
    motDePasse varchar(50) NOT NULL,
    role int(11) NOT NULL,
    idMatiere int(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;


ALTER TABLE Suivis ADD CONSTRAINT FK_Suivis_Matieres FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);
ALTER TABLE Suivis ADD CONSTRAINT FK_Suivis_Eleves FOREIGN KEY (idEleve) REFERENCES Eleves(idEleve);
ALTER TABLE Utilisateurs ADD CONSTRAINT FK_Utilisateurs_Matieres FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);
