-----------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS hotels;
CREATE DATABASE hotels;
USE hotels;
#------------------------------------------------------------
# Table: stations
#------------------------------------------------------------

CREATE TABLE stations(
        idStation       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomStation      Varchar (50) NOT NULL ,
        altitudeStation Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hotels
#------------------------------------------------------------

CREATE TABLE hotels(
        idHotel        Int  Auto_increment  NOT NULL  PRIMARY KEY,
        nomHotel       Varchar (50) NOT NULL ,
        categorieHotel Varchar (50) NOT NULL ,
        adresseHotel   Varchar (50) NOT NULL ,
        villeHotel     Varchar (50) NOT NULL ,
        idStation      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambres
#------------------------------------------------------------

CREATE TABLE chambres(
        idChambre       Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroChambre   Int NOT NULL ,
        typeChambre     Varchar (50) NOT NULL ,
        capaciteChambre Varchar (50) NOT NULL ,
        idHotel         Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: clients
#------------------------------------------------------------

CREATE TABLE clients(
        idClient      Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient     Varchar (50) NOT NULL ,
        prenomClient  Varchar (50) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reserve
#------------------------------------------------------------

CREATE TABLE reservations(
        idReservation     Int Auto_increment NOT NULL PRIMARY KEY
        idChambre         Int NOT NULL ,
        idClient          Int NOT NULL ,
        dateReservation   Varchar (5) NOT NULL ,
        dateDebutSejour   Varchar (50) NOT NULL ,
        dateFinSejour     Varchar (50) NOT NULL ,
        prixReservation   Int NOT NULL ,
        arrhesReservation Int NOT NULL
)ENGINE= InnoDB;


ALTER TABLE hotels ADD CONSTRAINT hotels_stations_FK FOREIGN KEY (idStation) REFERENCES stations (idStation);
ALTER TABLE chambres ADD CONSTRAINT chambres_hotels_FK FOREIGN KEY (idHotel) REFERENCES hotels (idHotel);
ALTER TABLE reservations ADD CONSTRAINT reservations_chambres_FK FOREIGN KEY (idChambre) REFERENCES (idChambre);
ALTER TABLE reservations ADD CONSTRAINT reserve_clients0_FK FOREIGN KEY (idClient) REFERENCES clients(idClient);

