-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: hotels
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `hotels`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `hotels` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotels`;

--
-- Table structure for table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambres` (
  `idChambre` int(11) NOT NULL AUTO_INCREMENT,
  `numeroChambre` int(11) NOT NULL,
  `typeChambre` varchar(50) NOT NULL,
  `capaciteChambre` varchar(50) NOT NULL,
  `idHotel` int(11) NOT NULL,
  PRIMARY KEY (`idChambre`),
  KEY `chambres_hotels_FK` (`idHotel`),
  CONSTRAINT `chambres_hotels_FK` FOREIGN KEY (`idHotel`) REFERENCES `hotels` (`idHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambres`
--

LOCK TABLES `chambres` WRITE;
/*!40000 ALTER TABLE `chambres` DISABLE KEYS */;
/*!40000 ALTER TABLE `chambres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `adresseClient` varchar(50) NOT NULL,
  `villeClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'DOE','John','Rue Du General Leclerc','Chatenay Malabry'),(2,'HOMME','Josh','Rue Danton','Palm Desert'),(3,'PAUL','Weller','Rue Hoche','Londres'),(4,'WHITE','Jack','Allee Gustave Eiffel','Detroit'),(5,'CLAYPOOL','Les','Rue Jean Pierre Timbaud','San Francisco'),(6,'SQUIRE','Chris','Place Paul Vaillant Couturier','Londres'),(7,'WOOD','Ronnie','Rue Erevan','Londres'),(8,'THUNDERS','Johnny','Rue Du General Leclerc','New York'),(9,'JEUNEMAITRE','Eric','Rue Du General Leclerc','Chaville'),(10,'KARAM','Patrick','Rue Danton','Courbevoie'),(11,'RUFET','Corinne','Rue Hoche','Le Plessis Robinson'),(12,'SAINT JUST ','Wallerand','Allee Gustave Eiffel','Marnes La Coquette'),(13,'SANTINI','Jean-Luc','Rue Jean Pierre Timbaud','Chatenay Malabry'),(14,'AIT','Eddie','Place Paul Vaillant Couturier','Le Plessis Robinson'),(15,'BARBOTIN','Eddie','Rue Erevan','Chatenay Malabry'),(16,'BERESSI','Isabelle','Rue Du General Leclerc','Londres'),(17,'CAMARA','Lamine','Rue Ernest Renan','Antony'),(18,'CECCONI','Frank','Rue Georges Marie','Chatenay Malabry'),(19,'CHEVRON','Eric','Boulevard Gallieni','Suresnes'),(20,'CIUNTU','Marie-Carole','Esplanade Du Belvedere','Meudon');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(50) NOT NULL,
  `categorieHotel` varchar(50) NOT NULL,
  `adresseHotel` varchar(50) NOT NULL,
  `villeHotel` varchar(50) NOT NULL,
  `idStation` int(11) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `hotels_stations_FK` (`idStation`),
  CONSTRAINT `hotels_stations_FK` FOREIGN KEY (`idStation`) REFERENCES `stations` (`idStation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `idChambre` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `dateReservation` varchar(5) NOT NULL,
  `dateDebutSejour` varchar(50) NOT NULL,
  `dateFinSejour` varchar(50) NOT NULL,
  `prixReservation` int(11) NOT NULL,
  `arrhesReservation` int(11) NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `reservations_chambres_FK` (`idChambre`),
  KEY `reserve_clients0_FK` (`idClient`),
  CONSTRAINT `reservations_chambres_FK` FOREIGN KEY (`idChambre`) REFERENCES `chambres` (`idChambre`),
  CONSTRAINT `reserve_clients0_FK` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stations`
--

DROP TABLE IF EXISTS `stations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stations` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `nomStation` varchar(50) NOT NULL,
  `altitudeStation` int(11) NOT NULL,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stations`
--

LOCK TABLES `stations` WRITE;
/*!40000 ALTER TABLE `stations` DISABLE KEYS */;
INSERT INTO `stations` VALUES (1,'La Montagne',2500),(2,'Le Sud',200),(3,'La Plage',10),(4,'Alpe d Huez',1860),(5,'Areches',1200),(6,'Beaufort',1200),(7,'Aussois',1500),(8,'Avoriaz',1800);
/*!40000 ALTER TABLE `stations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-02 12:25:40
