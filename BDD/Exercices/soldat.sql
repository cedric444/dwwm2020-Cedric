#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS premiereGuerre;
CREATE DATABASE pemiereGuerre;
USE premiereGuerre;

#------------------------------------------------------------
# Table: Blessures
#------------------------------------------------------------

CREATE TABLE pemiereGuerre.Blessures(
        idBlessure   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL ,
        dateBlessure Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Batailles
#------------------------------------------------------------

CREATE TABLE pemiereGuerre.Batailles(
        idBataille  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomBataille Varchar (50) NOT NULL ,
        dateDebut   Date NOT NULL ,
        dateFin     Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Grades
#------------------------------------------------------------

CREATE TABLE pemiereGuerre.Grades(
        idGrade       Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleGrade  Varchar (50) NOT NULL ,
        dateObtention Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Unites
#------------------------------------------------------------

CREATE TABLE pemiereGuerre.Unites(
        idUnite             Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleUnite        Varchar (50) NOT NULL ,
        dateRattachement    Date NOT NULL ,
        dateFinRattachement Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldats
#------------------------------------------------------------

CREATE TABLE premiereGuerre.Soldats(
        idSoldat        Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomSoldat       Varchar (50) NOT NULL ,
        prenomSoldat    Varchar (50) NOT NULL ,
        ddnSoldat       Date NOT NULL ,
        dateDecesSoldat Date NOT NULL ,
        idUnite         Int NOT NULL ,
        idGrade         Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reception
#------------------------------------------------------------

CREATE TABLE premiereGuerre.reception(
        idReception int Auto_increment not null PRIMARY KEY,
        idBlessure Int NOT NULL PRIMARY KEY,
        idSoldat   Int NOT NULL	
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participation
#------------------------------------------------------------

CREATE TABLE premiereGuerre.participation(
        idParticipation int Auto_increment not null PRIMARY KEY,
        idBataille Int NOT NULL PRIMARY KEY,
        idSoldat   Int NOT NULL
)ENGINE=InnoDB;

#-----------------------------------------------------------
# Clés étrangères
#-----------------------------------------------------------
ALTER TABLE Soldats ADD CONSTRAINT Soldats_Unites_FK FOREIGN KEY (idUnite) REFERENCES Unites(idUnite);
ALTER TABLE Soldats ADD CONSTRAINT Soldats_Grades0_FK FOREIGN KEY (idGrade) REFERENCES Grades(idGrade);

ALTER TABLE reception ADD CONSTRAINT reception_Blessures_FK FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);
ALTER TABLE reception ADD CONSTRAINT reception_Soldats0_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);

ALTER TABLE participation ADD CONSTRAINT participation_Batailles_FK FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
ALTER TABLE participation ADD CONSTRAINT participation_Soldats0_FK FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);