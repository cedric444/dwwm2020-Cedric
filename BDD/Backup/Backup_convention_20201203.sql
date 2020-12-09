-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: convention
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
-- Current Database: `convention`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `convention` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `convention`;

--
-- Table structure for table `animateurs`
--

DROP TABLE IF EXISTS `animateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animateurs` (
  `idAnimateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomAnimateur` varchar(50) NOT NULL,
  `prenomAnimateur` varchar(50) NOT NULL,
  `titreAnimateur` varchar(50) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idEmplacement` int(11) NOT NULL,
  PRIMARY KEY (`idAnimateur`),
  KEY `FK_animateurs_emplacements` (`idEmplacement`),
  CONSTRAINT `FK_animateurs_emplacements` FOREIGN KEY (`idEmplacement`) REFERENCES `emplacements` (`idEmplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animateurs`
--

LOCK TABLES `animateurs` WRITE;
/*!40000 ALTER TABLE `animateurs` DISABLE KEYS */;
INSERT INTO `animateurs` VALUES (1,'Cugnyssssssssssss','Maxime','Vendeur','2020-12-25','2020-12-20',1),(2,'Hovelynck','Bryan','Présentateur','2020-12-25','2020-12-20',2);
/*!40000 ALTER TABLE `animateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conventions`
--

DROP TABLE IF EXISTS `conventions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conventions` (
  `idConvention` int(11) NOT NULL AUTO_INCREMENT,
  `nomConvention` varchar(50) NOT NULL,
  `categorieConvention` varchar(50) NOT NULL,
  `idSalle` int(11) NOT NULL,
  PRIMARY KEY (`idConvention`),
  KEY `FK_conventions_salles` (`idSalle`),
  CONSTRAINT `FK_conventions_salles` FOREIGN KEY (`idSalle`) REFERENCES `salles` (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conventions`
--

LOCK TABLES `conventions` WRITE;
/*!40000 ALTER TABLE `conventions` DISABLE KEYS */;
INSERT INTO `conventions` VALUES (1,'PGW','Jeux vidéos',1),(2,'PHP Conference','Informatique',2),(3,'Portes ouvertes AFPA','Portes ouvertes',3);
/*!40000 ALTER TABLE `conventions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emplacements`
--

DROP TABLE IF EXISTS `emplacements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emplacements` (
  `idEmplacement` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEmplacement` varchar(50) NOT NULL,
  `idSalle` int(11) NOT NULL,
  PRIMARY KEY (`idEmplacement`),
  KEY `FK_emplacements_salles` (`idSalle`),
  CONSTRAINT `FK_emplacements_salles` FOREIGN KEY (`idSalle`) REFERENCES `salles` (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emplacements`
--

LOCK TABLES `emplacements` WRITE;
/*!40000 ALTER TABLE `emplacements` DISABLE KEYS */;
INSERT INTO `emplacements` VALUES (1,'258',1),(2,'999',2),(3,'666',3);
/*!40000 ALTER TABLE `emplacements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salles`
--

DROP TABLE IF EXISTS `salles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salles` (
  `idSalle` int(11) NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `adresseSalle` varchar(100) NOT NULL,
  `villeSalle` varchar(50) NOT NULL,
  PRIMARY KEY (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salles`
--

LOCK TABLES `salles` WRITE;
/*!40000 ALTER TABLE `salles` DISABLE KEYS */;
INSERT INTO `salles` VALUES (1,'AccorHotelArenasss','128 rue de toto','Paris'),(2,'Bercy','38 rue OUI','Dunkerque'),(3,'AFPA','158 avenue de la gironde','Lyon');
/*!40000 ALTER TABLE `salles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visite`
--

DROP TABLE IF EXISTS `visite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visite` (
  `idVisite` int(11) NOT NULL AUTO_INCREMENT,
  `dateVisite` date NOT NULL,
  `idVisiteur` int(10) NOT NULL,
  `idConvention` int(10) NOT NULL,
  PRIMARY KEY (`idVisite`),
  KEY `FK_visites_visiteurs` (`idVisiteur`),
  KEY `FK_visites_conventions` (`idConvention`),
  CONSTRAINT `FK_visites_conventions` FOREIGN KEY (`idConvention`) REFERENCES `conventions` (`idConvention`),
  CONSTRAINT `FK_visites_visiteurs` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteurs` (`idVisiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visite`
--

LOCK TABLES `visite` WRITE;
/*!40000 ALTER TABLE `visite` DISABLE KEYS */;
INSERT INTO `visite` VALUES (1,'2020-12-22',1,2),(2,'2020-12-22',2,3),(3,'2020-12-22',3,1);
/*!40000 ALTER TABLE `visite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visiteurs` (
  `idVisiteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomVisiteur` varchar(50) NOT NULL,
  `prenomVisiteur` varchar(50) NOT NULL,
  `adresseVisiteur` varchar(100) NOT NULL,
  `codePostalVisiteur` varchar(10) NOT NULL,
  `villeVisiteur` varchar(50) NOT NULL,
  PRIMARY KEY (`idVisiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteurs`
--

LOCK TABLES `visiteurs` WRITE;
/*!40000 ALTER TABLE `visiteurs` DISABLE KEYS */;
INSERT INTO `visiteurs` VALUES (1,'Toto','Titi','125 rue de la rue','52689','Dunkerque'),(2,'Tuto','Tutu','265 rue de la rue','62100','Calais'),(3,'Totu','Tata','323 rue des avenues','323232','Paris');
/*!40000 ALTER TABLE `visiteurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-03 17:15:31
