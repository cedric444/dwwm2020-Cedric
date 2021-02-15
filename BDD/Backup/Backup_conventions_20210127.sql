-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: conventions
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
-- Current Database: `conventions`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `conventions` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `conventions`;

--
-- Table structure for table `animations`
--

DROP TABLE IF EXISTS `animations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animations` (
  `idAnimation` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  PRIMARY KEY (`idAnimation`),
  KEY `FK_Animation_Formations` (`idFormation`),
  KEY `FK_Animation_Utilisateurs` (`idUtilisateur`),
  CONSTRAINT `FK_Animation_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`),
  CONSTRAINT `FK_Animation_Utilisateurs` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animations`
--

LOCK TABLES `animations` WRITE;
/*!40000 ALTER TABLE `animations` DISABLE KEYS */;
/*!40000 ALTER TABLE `animations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departements`
--

DROP TABLE IF EXISTS `departements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departements` (
  `idDepartement` char(3) NOT NULL,
  `libelleDepartement` varchar(100) NOT NULL,
  `idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idDepartement`),
  KEY `FK_Departements_Regions` (`idRegion`),
  CONSTRAINT `FK_Departements_Regions` FOREIGN KEY (`idRegion`) REFERENCES `regions` (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table des départements français';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departements`
--

LOCK TABLES `departements` WRITE;
/*!40000 ALTER TABLE `departements` DISABLE KEYS */;
/*!40000 ALTER TABLE `departements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entreprises` (
  `idEntreprise` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(50) NOT NULL,
  `statutJuridiqueEnt` varchar(50) NOT NULL,
  `adresseEnt` varchar(50) NOT NULL,
  `numSiretEnt` varchar(14) NOT NULL,
  `telEnt` varchar(10) NOT NULL,
  `assureurEnt` varchar(50) NOT NULL,
  `numSocietaire` varchar(20) NOT NULL,
  `nomRepresentant` varchar(50) NOT NULL,
  `prenomRepresentant` varchar(50) NOT NULL,
  `fctRepresentant` varchar(50) NOT NULL,
  `telRepresentant` varchar(10) NOT NULL,
  `mailRepresentant` varchar(100) NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idEntreprise`),
  UNIQUE KEY `email` (`mailRepresentant`),
  UNIQUE KEY `numSiret` (`numSiretEnt`),
  KEY `FK_Entreprises_Villes` (`idVille`),
  CONSTRAINT `FK_Entreprises_Villes` FOREIGN KEY (`idVille`) REFERENCES `villes` (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entreprises`
--

LOCK TABLES `entreprises` WRITE;
/*!40000 ALTER TABLE `entreprises` DISABLE KEYS */;
INSERT INTO `entreprises` VALUES (1,'Pellentesque Habitant Morbi Institute','EURL','7071 Suspendisse Road','81897909800006','0725101214','Et Malesuada Limited','7880782597146189','Hall','Ingrid','ouvrier ','0785101214','diam.Pellentesque.habitant@pretiumaliquetmetus.net',1),(2,'Ligula Limited','SARL','715-7324 Erat. Road','47906057600002','0621548774','Duis Dignissim Company','3556707340853576','Perez','Timon','secretaire ','0621548714','nisi.magna@Phasellusdolor.org',56),(3,'Eu Elit Nulla PC','EURL','870-3416 Vel Ave','82642455800003','0741526325','Curabitur LLC','1995715917806923','Ford','Kitra','developpeur ','0741521325','scelerisque.scelerisque@DonecnibhQuisque.net',41),(4,'Lectus Pede PC','SARL','Ap #149-9089 Pellentesque St.','79366437600001','0752654821','Sapien Corp.','4317780658754571','Petersen','Ciaran','manager ','0752554821','quis.pede.Praesent@elitAliquam.net',23),(5,'Vulputate Limited','SARL','P.O. Box 990, 7949 Turpis Avenue','11611820900000','0652584798','Mauris Vestibulum Neque Corporation','6240692052903041','Jones','Barry','ouvrier ','0652874798','non@augueporttitor.co.uk',14),(6,'Facilisis Facilisis Magna Limited','SARL','224-578 Egestas Road','99374788000009','0754842315','Et Commodo LLC','5215714382014296','Indigo','Raymond','secretaire ','0752342315','est.congue.a@risusNullaeget.net',8),(7,'Enim Non Company','EURL','4230 Nunc. Av.','12131422300003','0614398480','Felis Institute','4506729184122608','Delaney','Ima','manager ','0614698480','Nunc@indolorFusce.net',254),(8,'Arcu Sed Incorporated','SARL','2163 Faucibus Street','19549927200001','0328514565','Nascetur Ridiculus Mus Inc.','7121956427995593','Miles','Wyoming','developpeur ','0328514465','Mauris.vel@eratnonummy.org',62),(9,'Ut Odio PC','EURL','Ap #597-5678 Aliquam Ave','26994707300004','0713455748','Maecenas Institute','1303925838857152','Lyons','Baxter','manager ','0713453248','consectetuer@Duisdignissim.net',21),(10,'Dui Inc.','SARL','830-8262 Laoreet, St.','93223710000007','0625241236','Donec Incorporated','4682031702470060','Mcleod','Elizabeth','ouvrier ','0621241236','interdum.Curabitur.dictum@feugiatplaceratvelit.org',85),(11,'Elit Sed LLP','SARL','Ap #747-2595 Sed St.','50298190500008','0752148496','Sem Ut Limited','4125639599419708','Wilson','Rajah','infirmier','0752348496','eget.odio.Aliquam@Craspellentesque.edu',36),(12,'Eu Associates','EURL','P.O. Box 493, 9197 Suspendisse Street','31535289800003','0240046261','Pede Company','1436809966716512','Todd','Brian','secretaire ','0240566261','pulvinar@convallis.co.uk',546),(13,'Aliquam Erat Volutpat Corporation','SARL','P.O. Box 169, 2848 Dictum Rd.','69689545700005','0147586521','At Corp.','964785268767808E','Mendez','Emerson','ouvrier ','0147574521','Sed.nulla.ante@necorciDonec.ca',225),(14,'Ut Eros Company','SARL','1892 Nisi. Avenue','89593574000004','0258636545','Sit Amet Dapibus Company','5034035006878489','Sears','Tarik','ouvrier ','0254536545','amet.dapibus@infaucibusorci.co.uk',852),(15,'Massa Limited','EURL','204-2195 Dui St.','17691561900009','0614851725','A Sollicitudin Orci Inc.','1773353246202368','Chavez','Erica','infirmier','0614561725','convallis.ante.lectus@neque.net',45),(16,'Commodo Hendrerit Donec LLC','EURL','Ap #445-5589 Dolor Av.','41086601600000','0725369514','Sagittis Felis Company','776848132E','Park','Ursa','infirmier','0725239514','molestie.Sed@volutpatNulla.co.uk',78),(17,'Posuere At Velit Inc.','SARL','P.O. Box 489, 7782 Et, Rd.','34085502200000','0624158795','Montes Institute','2153477651171995','Dennis','Garrett','ouvrier ','0624151495','non@cursusetmagna.net',25),(18,'Vitae Inc.','SARL','6923 Sed Street','33948339800006','0754563258','In PC','8548567751140816','Holloway','Fulton','infirmier','0754596258','sem.Pellentesque@vulputateposuere.net',41),(19,'Massa Institute','EURL','707-5099 Egestas. Road','85275111400004','0625458632','Libero Nec LLC','2440761','Bolton','Montana','ouvrier ','0625568632','elementum.lorem.ut@erategetipsum.org',32);
/*!40000 ALTER TABLE `entreprises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evaluations`
--

DROP TABLE IF EXISTS `evaluations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluations` (
  `idStage` int(11) NOT NULL,
  `dateEvaluation` date NOT NULL,
  `objectifAcquisition` int(11) NOT NULL,
  `comportementMt` int(11) NOT NULL,
  `satisfactionEnt` int(11) NOT NULL,
  `remarqueEnt` char(250) NOT NULL,
  `perspectiveEmb` int(11) NOT NULL,
  PRIMARY KEY (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evaluations`
--

LOCK TABLES `evaluations` WRITE;
/*!40000 ALTER TABLE `evaluations` DISABLE KEYS */;
/*!40000 ALTER TABLE `evaluations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formations`
--

DROP TABLE IF EXISTS `formations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formations` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `libelleFormation` varchar(200) NOT NULL,
  `grn` int(4) NOT NULL,
  `finaliteFormation` int(1) NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES (1,'ADMINISTRATEUR D’INFRASTRUCTURES SÉCURISÉES',0,0),(2,'INSTALLATEUR DE RÉSEAUX DE TÉLÉCOMMUNICATIONS',0,0),(3,'CONNAÎTRE ET APPLIQUER LA MÉTHODE 5S',0,0),(4,'AGENT DE FABRICATION D\'ENSEMBLE MÉTALLIQUE',0,0),(5,'CONDUCTEUR D\'INSTALLATION ET DE MACHINES AUTOMATISÉES',0,0),(6,'MÉCANICIEN DE MAINTENANCE AUTOMOBILE',0,0),(7,'PARCOURS CRÉATEURS D\'ENTREPRISE',0,0),(8,'DÉVELOPPEUR WEB ET WEB MOBILE',0,0),(9,'FLUIDES FRIGORIGÈNES : ATTESTATION D’APTITUDE CATÉGORIE I',0,0),(10,'AUTOMATES SIEMENS S7 300 - S7 400 AVEC STEP7 : ASSURER LA MAINTENANCE RÉSEAU PARTIE 1',0,0),(11,'FORMATION PRÉPARATOIRE AUX FORMATIONS DU TERTIAIRE NIVEAU V',0,0);
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libellescomportementsprofessionnels`
--

DROP TABLE IF EXISTS `libellescomportementsprofessionnels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libellescomportementsprofessionnels` (
  `idLibelleComportementProfessionnel` int(11) NOT NULL AUTO_INCREMENT,
  `ordreComportement` int(11) NOT NULL,
  `libelleComportement` varchar(100) NOT NULL,
  PRIMARY KEY (`idLibelleComportementProfessionnel`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libellescomportementsprofessionnels`
--

LOCK TABLES `libellescomportementsprofessionnels` WRITE;
/*!40000 ALTER TABLE `libellescomportementsprofessionnels` DISABLE KEYS */;
INSERT INTO `libellescomportementsprofessionnels` VALUES (1,1,'Ponctualité, respect des horaires et de la durée de travail '),(2,2,'Présentation, tenue compatible avec l’environnement professionnel '),(3,3,'Adaptation, intégration à l’équipe '),(4,4,'Établir des relations professionnelles avec l’environnement de travail '),(5,5,'Communiquer, rendre compte de son travail '),(6,6,'Réaliser des tâches de manière autonome '),(7,7,'Respecter les consignes '),(8,8,' Respecter le matériel et l’environnement technique '),(9,9,'Agir de façon organisée et méthodique '),(10,10,'Respecter les critères qualité de l’entreprise '),(11,11,'Respect des règles d’hygiène et de sécurité ');
/*!40000 ALTER TABLE `libellescomportementsprofessionnels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libelleshoraires`
--

DROP TABLE IF EXISTS `libelleshoraires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libelleshoraires` (
  `idLibelleHoraire` int(11) NOT NULL AUTO_INCREMENT,
  `ordreHoraire` int(11) NOT NULL,
  `libelleHoraire` varchar(40) NOT NULL,
  PRIMARY KEY (`idLibelleHoraire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libelleshoraires`
--

LOCK TABLES `libelleshoraires` WRITE;
/*!40000 ALTER TABLE `libelleshoraires` DISABLE KEYS */;
/*!40000 ALTER TABLE `libelleshoraires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libellestravauxdangereux`
--

DROP TABLE IF EXISTS `libellestravauxdangereux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `libellestravauxdangereux` (
  `idLibelleTravauxDangereux` int(11) NOT NULL AUTO_INCREMENT,
  `ordreTravaux` int(11) NOT NULL,
  `libelleTravaux` varchar(100) NOT NULL,
  PRIMARY KEY (`idLibelleTravauxDangereux`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libellestravauxdangereux`
--

LOCK TABLES `libellestravauxdangereux` WRITE;
/*!40000 ALTER TABLE `libellestravauxdangereux` DISABLE KEYS */;
INSERT INTO `libellestravauxdangereux` VALUES (1,1,'Agents chimiques dangereux '),(2,2,'Agents biologiques '),(3,3,'Vibrations mécaniques'),(4,4,'Rayonnements'),(5,5,'Milieu hyperbare '),(6,6,'Températures extrêmes'),(7,7,'Effondrement et ensevelissement'),(8,8,'Appareils sous pression'),(9,9,'Milieu confiné '),(10,10,'Travaux en contact avec du verre ou du métal en fusion'),(11,11,'Manutentions manuelles'),(12,12,'Risques électriques '),(13,13,'Utilisation de machines '),(14,14,'Travaux en hauteur '),(15,15,'Contact avec des animaux');
/*!40000 ALTER TABLE `libellestravauxdangereux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participations`
--

DROP TABLE IF EXISTS `participations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participations` (
  `idParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idSessionFormation` int(11) NOT NULL,
  `idStagiaire` int(11) NOT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `FK_Participation_SessionFormation` (`idSessionFormation`),
  KEY `FK_Participation_Stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Participation_SessionFormation` FOREIGN KEY (`idSessionFormation`) REFERENCES `sessionsformations` (`idSessionFormation`),
  CONSTRAINT `FK_Participation_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participations`
--

LOCK TABLES `participations` WRITE;
/*!40000 ALTER TABLE `participations` DISABLE KEYS */;
/*!40000 ALTER TABLE `participations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodesstages`
--

DROP TABLE IF EXISTS `periodesstages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodesstages` (
  `idPeriode` int(11) NOT NULL AUTO_INCREMENT,
  `idSessionFormation` int(11) NOT NULL,
  `dateDebutPAE` date NOT NULL,
  `dateFinPAE` date NOT NULL,
  `dateRapportSuivi` date NOT NULL,
  `objectifPAE` text NOT NULL,
  PRIMARY KEY (`idPeriode`),
  KEY `FK_PeriodesStages_SessionFormation` (`idSessionFormation`),
  CONSTRAINT `FK_PeriodesStages_SessionFormation` FOREIGN KEY (`idSessionFormation`) REFERENCES `sessionsformations` (`idSessionFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodesstages`
--

LOCK TABLES `periodesstages` WRITE;
/*!40000 ALTER TABLE `periodesstages` DISABLE KEYS */;
/*!40000 ALTER TABLE `periodesstages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRegion` varchar(50) NOT NULL,
  `nb_departs` int(11) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `libelleRole` varchar(25) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administration'),(2,'Formateur'),(3,'Tuteur'),(4,'Stagiaire');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessionsformations`
--

DROP TABLE IF EXISTS `sessionsformations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessionsformations` (
  `idSessionFormation` int(11) NOT NULL AUTO_INCREMENT,
  `numOffreFormation` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  PRIMARY KEY (`idSessionFormation`),
  KEY `FK_SessionFormation_Formations` (`idFormation`),
  CONSTRAINT `FK_SessionFormation_Formations` FOREIGN KEY (`idFormation`) REFERENCES `formations` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessionsformations`
--

LOCK TABLES `sessionsformations` WRITE;
/*!40000 ALTER TABLE `sessionsformations` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessionsformations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stages` (
  `idStage` int(11) NOT NULL AUTO_INCREMENT,
  `etape` int(11) NOT NULL COMMENT '1 stagiaire , 2 entreprise ,3 conditions, 4 sujet de stage, 5 evaluations',
  `dateVisite` date DEFAULT NULL,
  `nomVisiteur` varchar(200) DEFAULT NULL,
  `lieuRealisation` varchar(200) DEFAULT NULL,
  `deplacement` tinyint(1) DEFAULT NULL,
  `frequenceDeplacement` varchar(200) DEFAULT NULL,
  `modeDeplacement` varchar(200) DEFAULT NULL,
  `attFormReglement` tinyint(1) DEFAULT NULL,
  `libelleAttFormReg` varchar(200) DEFAULT NULL,
  `visiteMedical` tinyint(1) DEFAULT NULL,
  `travauxDang` tinyint(1) DEFAULT NULL,
  `dateDeclarationDerog` date DEFAULT NULL,
  `sujetStage` text,
  `travauxRealises` text,
  `objectifPAE` text,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idTuteur` int(11) NOT NULL,
  `idStagiaire` int(11) NOT NULL,
  `idPeriode` int(11) NOT NULL,
  PRIMARY KEY (`idStage`),
  KEY `FK_Stages_Stagiaires` (`idStagiaire`),
  KEY `FK_Stages_Tuteurs` (`idTuteur`),
  CONSTRAINT `FK_Stages_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Stages_Tuteurs` FOREIGN KEY (`idTuteur`) REFERENCES `tuteurs` (`idTuteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stages`
--

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `stagiaireformation`
--

DROP TABLE IF EXISTS `stagiaireformation`;
/*!50001 DROP VIEW IF EXISTS `stagiaireformation`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `stagiaireformation` AS SELECT 
 1 AS `idFormation`,
 1 AS `libelleFormation`,
 1 AS `idSessionFormation`,
 1 AS `numOffreFormation`,
 1 AS `idPeriode`,
 1 AS `dateDebutPAE`,
 1 AS `dateFinPAE`,
 1 AS `dateRapportSuivi`,
 1 AS `objectifPAE`,
 1 AS `idParticipation`,
 1 AS `dateDebut`,
 1 AS `dateFin`,
 1 AS `idStagiaire`,
 1 AS `genreStagiaire`,
 1 AS `nomStagiaire`,
 1 AS `prenomStagiaire`,
 1 AS `numSecuStagiaire`,
 1 AS `numBenefStagiaire`,
 1 AS `dateNaissanceStagiaire`,
 1 AS `emailStagiaire`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stagiaires`
--

DROP TABLE IF EXISTS `stagiaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stagiaires` (
  `idStagiaire` int(11) NOT NULL AUTO_INCREMENT,
  `genreStagiaire` varchar(1) DEFAULT NULL,
  `nomStagiaire` varchar(50) NOT NULL,
  `prenomStagiaire` varchar(50) NOT NULL,
  `numSecuStagiaire` varchar(15) DEFAULT NULL,
  `numBenefStagiaire` varchar(15) NOT NULL,
  `dateNaissanceStagiaire` date NOT NULL,
  `emailStagiaire` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `idVilleHabitation` int(5) NOT NULL,
  `idVilleNaissance` int(5) NOT NULL,
  `TelStagiaire` varchar(10) NOT NULL,
  PRIMARY KEY (`idStagiaire`),
  UNIQUE KEY `email` (`emailStagiaire`),
  KEY `FK_Stagiaires_VillesHabitation` (`idVilleHabitation`),
  KEY `FK_Stagiaires_VillesNaissance` (`idVilleNaissance`),
  CONSTRAINT `FK_Stagiaires_VillesHabitation` FOREIGN KEY (`idVilleHabitation`) REFERENCES `villes` (`idVille`),
  CONSTRAINT `FK_Stagiaires_VillesNaissance` FOREIGN KEY (`idVilleNaissance`) REFERENCES `villes` (`idVille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stagiaires`
--

LOCK TABLES `stagiaires` WRITE;
/*!40000 ALTER TABLE `stagiaires` DISABLE KEYS */;
/*!40000 ALTER TABLE `stagiaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuteurs`
--

DROP TABLE IF EXISTS `tuteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuteurs` (
  `idTuteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomTuteur` varchar(50) NOT NULL,
  `prenomTuteur` varchar(50) NOT NULL,
  `fonctionTuteur` varchar(100) DEFAULT NULL,
  `telTuteur` varchar(10) DEFAULT NULL,
  `emailTuteur` varchar(100) NOT NULL,
  `idEntreprise` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTuteur`),
  UNIQUE KEY `email` (`emailTuteur`),
  KEY `FK_Tuteurs_Entreprises` (`idEntreprise`),
  CONSTRAINT `FK_Tuteurs_Entreprises` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprises` (`idEntreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuteurs`
--

LOCK TABLES `tuteurs` WRITE;
/*!40000 ALTER TABLE `tuteurs` DISABLE KEYS */;
INSERT INTO `tuteurs` VALUES (1,'Tuteur','De fou','developpeur','0614151602','toto@gmail.com',1),(2,'Nico','sarko','PDG','0614475402','nico@gmail.com',2),(3,'Tuteur','De fou','developpeur','0614151602','tutu@gmail.com',1),(4,'Pierre','Lapin','developpeur','0445145402','pierre@gmail.com',1);
/*!40000 ALTER TABLE `tuteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(50) NOT NULL,
  `mdpUtilisateur` varchar(50) NOT NULL,
  `datePeremption` varchar(15) DEFAULT NULL,
  `idRole` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  UNIQUE KEY `email` (`emailUtilisateur`),
  KEY `FK_Utilisateurs_Roles` (`idRole`),
  CONSTRAINT `FK_Utilisateurs_Roles` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'POIX','Martine','martine.poix@gmail.com','toto',NULL,2),(2,'ZOZO','Thomas','thomas.zozo@gmail.com','toto',NULL,2),(3,'SIMS','Alfred','alfred.sims@gmail.com','toto',NULL,2),(4,'toto','TOTO','toto@gmail.com','user',NULL,1),(5,'RJEB','Zied','zied@gmail.com','user',NULL,4),(6,'BOSS','Tuteur','tuteur@gmail.com','user',NULL,3);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeursacquis`
--

DROP TABLE IF EXISTS `valeursacquis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeursacquis` (
  `idValeurAcquis` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `ordreAcquis` int(11) NOT NULL,
  `libelleAcquis` varchar(200) NOT NULL,
  `valeurAcquis` int(11) DEFAULT NULL,
  PRIMARY KEY (`idValeurAcquis`),
  KEY `FK_ValeurAcquis_Stages` (`idStage`),
  CONSTRAINT `FK_ValeurAcquis_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeursacquis`
--

LOCK TABLES `valeursacquis` WRITE;
/*!40000 ALTER TABLE `valeursacquis` DISABLE KEYS */;
/*!40000 ALTER TABLE `valeursacquis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurscomportementsprofessionnels`
--

DROP TABLE IF EXISTS `valeurscomportementsprofessionnels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurscomportementsprofessionnels` (
  `idComportementProfessionnel` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleComportementProfessionnel` int(11) NOT NULL,
  `valeurComportement` int(11) DEFAULT NULL,
  PRIMARY KEY (`idComportementProfessionnel`),
  KEY `FK_ValeurComportementsProfessionnels_Stages` (`idStage`),
  KEY `FK_ValeurCompProf_LibelleCompPro` (`idLibelleComportementProfessionnel`),
  CONSTRAINT `FK_ValeurCompProf_LibelleCompPro` FOREIGN KEY (`idLibelleComportementProfessionnel`) REFERENCES `libellescomportementsprofessionnels` (`idLibelleComportementProfessionnel`),
  CONSTRAINT `FK_ValeurComportementsProfessionnels_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurscomportementsprofessionnels`
--

LOCK TABLES `valeurscomportementsprofessionnels` WRITE;
/*!40000 ALTER TABLE `valeurscomportementsprofessionnels` DISABLE KEYS */;
/*!40000 ALTER TABLE `valeurscomportementsprofessionnels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurshoraires`
--

DROP TABLE IF EXISTS `valeurshoraires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurshoraires` (
  `idValeurHoraires` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleHoraire` int(11) NOT NULL,
  `valeurHoraire` time DEFAULT NULL,
  PRIMARY KEY (`idValeurHoraires`),
  KEY `FK_ValeurHoraires_Stages` (`idStage`),
  KEY `FK_ValeurHoraires_LibelleHoraires` (`idLibelleHoraire`),
  CONSTRAINT `FK_ValeurHoraires_LibelleHoraires` FOREIGN KEY (`idLibelleHoraire`) REFERENCES `libelleshoraires` (`idLibelleHoraire`),
  CONSTRAINT `FK_ValeurHoraires_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurshoraires`
--

LOCK TABLES `valeurshoraires` WRITE;
/*!40000 ALTER TABLE `valeurshoraires` DISABLE KEYS */;
/*!40000 ALTER TABLE `valeurshoraires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `valeurstravauxdangereux`
--

DROP TABLE IF EXISTS `valeurstravauxdangereux`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `valeurstravauxdangereux` (
  `idTravauxDangereux` int(11) NOT NULL AUTO_INCREMENT,
  `idStage` int(11) NOT NULL,
  `idLibelleTravauxDangereux` int(11) NOT NULL,
  `valeurTravaux` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTravauxDangereux`),
  KEY `FK_ValeurTravauxDangereux_Stages` (`idStage`),
  KEY `FK_ValeurTravauxDangereux_LibelleTravauxDangereux` (`idLibelleTravauxDangereux`),
  CONSTRAINT `FK_ValeurTravauxDangereux_LibelleTravauxDangereux` FOREIGN KEY (`idLibelleTravauxDangereux`) REFERENCES `libellestravauxdangereux` (`idLibelleTravauxDangereux`),
  CONSTRAINT `FK_ValeurTravauxDangereux_Stages` FOREIGN KEY (`idStage`) REFERENCES `stages` (`idStage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `valeurstravauxdangereux`
--

LOCK TABLES `valeurstravauxdangereux` WRITE;
/*!40000 ALTER TABLE `valeurstravauxdangereux` DISABLE KEYS */;
/*!40000 ALTER TABLE `valeurstravauxdangereux` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `villes`
--

DROP TABLE IF EXISTS `villes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `villes` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `nomVille` varchar(50) NOT NULL,
  `codePostal` int(11) NOT NULL,
  `idDepartement` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=1488 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `villes`
--

LOCK TABLES `villes` WRITE;
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` VALUES (1,'VILLE DU PONT',25650,NULL),(2,'VILLERS BUZON',25170,NULL),(3,'VILLERS GRELOT',25640,NULL),(4,'VORGES LES PINS',25320,NULL),(5,'VYT LES BELVOIR',25430,NULL),(6,'ALEYRAC',26770,NULL),(7,'ANDANCETTE',26140,NULL),(8,'ANNEYRON',26140,NULL),(9,'AUBRES',26110,NULL),(10,'BARSAC',26150,NULL),(11,'LA BATIE ROLLAND',26160,NULL),(12,'LA BAUME DE TRANSIT',26790,NULL),(13,'BEAUFORT SUR GERVANNE',26400,NULL),(14,'BOURDEAUX',26460,NULL),(15,'BREN',26260,NULL),(16,'BRETTE',26340,NULL),(17,'CHABEUIL',26120,NULL),(18,'CHAMARET',26230,NULL),(19,'CHAROLS',26450,NULL),(20,'CHARPEY',26300,NULL),(21,'CHASTEL ARNAUD',26340,NULL),(22,'CHATEAUNEUF SUR ISERE',26300,NULL),(23,'CHATEAUNEUF DU RHONE',26780,NULL),(24,'CHAUDEBONNE',26110,NULL),(25,'CHAUVAC LAUX MONTAUX',26510,NULL),(26,'CLEON D ANDRAN',26450,NULL),(27,'COBONNE',26400,NULL),(28,'COLONZELLE',26230,NULL),(29,'LA COUCOURDE',26740,NULL),(30,'ESTABLET',26470,NULL),(31,'EURRE',26400,NULL),(32,'EYROLES',26110,NULL),(33,'VAL MARAVEL',26310,NULL),(34,'GRANE',26400,NULL),(35,'GRIGNAN',26230,NULL),(36,'GUMIANE',26470,NULL),(37,'IZON LA BRUISSE',26560,NULL),(38,'JONCHERES',26310,NULL),(39,'LABOREL',26560,NULL),(40,'LUC EN DIOIS',26310,NULL),(41,'MANAS',26160,NULL),(42,'MONTAULIEU',26110,NULL),(43,'MONTELIER',26120,NULL),(44,'MONTFERRAND LA FARE',26510,NULL),(45,'MONTFROC',26560,NULL),(46,'MONTJOUX',26220,NULL),(47,'MONTVENDRE',26120,NULL),(48,'PELONNE',26510,NULL),(49,'PIEGROS LA CLASTRE',26400,NULL),(50,'PIERRELATTE',26700,NULL),(51,'PLAISIANS',26170,NULL),(52,'LE POET LAVAL',26160,NULL),(53,'PONT DE BARRET',26160,NULL),(54,'LES PRES',26310,NULL),(55,'PUYGIRON',26160,NULL),(56,'RATIERES',26330,NULL),(57,'RIMON ET SAVEL',26340,NULL),(58,'RIOMS',26170,NULL),(59,'ROCHEBRUNE',26110,NULL),(60,'ROCHEFORT EN VALDAINE',26160,NULL),(61,'ROCHE ST SECRET BECONNE',26770,NULL),(62,'LA ROCHE SUR GRANE',26400,NULL),(63,'ROUSSET LES VIGNES',26770,NULL),(64,'SAHUNE',26510,NULL),(65,'ST AGNAN EN VERCORS',26420,NULL),(66,'ST AGNAN EN VERCORS',26420,NULL),(67,'ST AUBAN SUR L OUVEZE',26170,NULL),(68,'ST AVIT',26330,NULL),(69,'ST BARTHELEMY DE VALS',26240,NULL),(70,'ST BENOIT EN DIOIS',26340,NULL),(71,'STE EUPHEMIE SUR OUVEZE',26170,NULL),(72,'ST FERREOL TRENTE PAS',26110,NULL),(73,'STE JALLE',26110,NULL),(74,'ST JEAN EN ROYANS',26190,NULL),(75,'ST MARCEL LES VALENCE',26320,NULL),(76,'ST NAZAIRE LE DESERT',26340,NULL),(77,'ST PANTALEON LES VIGNES',26770,NULL),(78,'ST SAUVEUR GOUVERNET',26110,NULL),(79,'SAOU',26400,NULL),(80,'SAVASSE',26740,NULL),(81,'SAVASSE',26740,NULL),(82,'SOUSPIERRE',26160,NULL),(83,'SUZE LA ROUSSE',26790,NULL),(84,'LES TOURRETTES',26740,NULL),(85,'TRUINAS',26460,NULL),(86,'TULETTE',26790,NULL),(87,'VACHERES EN QUINT',26150,NULL),(88,'VENTEROL',26110,NULL),(89,'VERS SUR MEOUGE',26560,NULL),(90,'ACLOU',27800,NULL),(91,'ACON',27570,NULL),(92,'AMFREVILLE ST AMAND',27370,NULL),(93,'AMFREVILLE ST AMAND',27370,NULL),(94,'ANDE',27430,NULL),(95,'ANGERVILLE LA CAMPAGNE',27930,NULL),(96,'AUTHEUIL AUTHOUILLET',27490,NULL),(97,'CHAMBOIS',27240,NULL),(98,'BACQUEVILLE',27440,NULL),(99,'BAILLEUL LA VALLEE',27260,NULL),(100,'BALINES',27130,NULL),(101,'BARC',27170,NULL),(102,'LES BAUX STE CROIX',27180,NULL),(103,'BEAUFICEL EN LYONS',27480,NULL),(104,'MESNIL EN OUCHE',27270,NULL),(105,'MESNIL EN OUCHE',27410,NULL),(106,'BEAUMONT LE ROGER',27170,NULL),(107,'BERNIENVILLE',27180,NULL),(108,'LES MONTS DU ROUMOIS',27370,NULL),(109,'BOIS LE ROI',27220,NULL),(110,'BOISNEY',27800,NULL),(111,'BOUCHEVILLIERS',27150,NULL),(112,'GRAND BOURGTHEROULDE',27520,NULL),(113,'GRAND BOURGTHEROULDE',27520,NULL),(114,'BRETEUIL',27160,NULL),(115,'CANAPPEVILLE',27400,NULL),(116,'CAORCHES ST NICOLAS',27300,NULL),(117,'CAPELLE LES GRANDS',27270,NULL),(118,'CHAMBRAY',27120,NULL),(119,'LA CHAPELLE GAUTHIER',27270,NULL),(120,'MARBOIS',27240,NULL),(121,'CLAVILLE',27180,NULL),(122,'COMBON',27170,NULL),(123,'CONCHES EN OUCHE',27190,NULL),(124,'CONTEVILLE',27210,NULL),(125,'COURCELLES SUR SEINE',27940,NULL),(126,'COURTEILLES',27130,NULL),(127,'CRESTOT',27110,NULL),(128,'CRIQUEBEUF LA CAMPAGNE',27110,NULL),(129,'CROSVILLE LA VIEILLE',27110,NULL),(130,'LES DAMPS',27340,NULL),(131,'MESNILS SUR ITON',27240,NULL),(132,'MESNILS SUR ITON',27240,NULL),(133,'MESNILS SUR ITON',27240,NULL),(134,'DARDEZ',27930,NULL),(135,'DAUBEUF LA CAMPAGNE',27110,NULL),(136,'DAUBEUF PRES VATTEVILLE',27430,NULL),(137,'ECAQUELON',27290,NULL),(138,'ECARDENVILLE LA CAMPAGNE',27170,NULL),(139,'VEXIN SUR EPTE',27510,NULL),(140,'VEXIN SUR EPTE',27510,NULL),(141,'VEXIN SUR EPTE',27630,NULL),(142,'VEXIN SUR EPTE',27630,NULL),(143,'VEXIN SUR EPTE',27630,NULL),(144,'VEXIN SUR EPTE',27630,NULL),(145,'EMALLEVILLE',27930,NULL),(146,'EMANVILLE',27190,NULL),(147,'ETURQUERAYE',27350,NULL),(148,'EZY SUR EURE',27530,NULL),(149,'FAVEROLLES LA CAMPAGNE',27190,NULL),(150,'LE FAVRIL',27230,NULL),(151,'LE FIDELAIRE',27190,NULL),(152,'FOLLEVILLE',27230,NULL),(153,'LA FORET DU PARC',27220,NULL),(154,'FOUQUEVILLE',27370,NULL),(155,'LE PERREY',27680,NULL),(156,'FRANQUEVILLE',27800,NULL),(157,'GASNY',27620,NULL),(158,'LA GOULAFRIERE',27390,NULL),(159,'GRAVIGNY',27930,NULL),(160,'HARDENCOURT COCHEREL',27120,NULL),(161,'HARQUENCY',27700,NULL),(162,'LA HAYE DE ROUTOT',27350,NULL),(163,'LA HAYE ST SYLVESTRE',27330,NULL),(164,'HEUBECOURT HARICOURT',27630,NULL),(165,'HEUDREVILLE EN LIEUVIN',27230,NULL),(166,'HONDOUVILLE',27400,NULL),(167,'HOUVILLE EN VEXIN',27440,NULL),(168,'IVILLE',27110,NULL),(169,'LA LANDE ST LEGER',27210,NULL),(170,'LAUNAY',27470,NULL),(171,'LERY',27690,NULL),(172,'LORLEAU',27480,NULL),(173,'LOUYE',27650,NULL),(174,'MEREY',27640,NULL),(175,'MESNIL ROUSSET',27390,NULL),(176,'MESNIL SOUS VIENNE',27150,NULL),(177,'MORAINVILLE JOUVEAUX',27260,NULL),(178,'MOUETTES',27220,NULL),(179,'MOUSSEAUX NEUVILLE',27220,NULL),(180,'MUZY',27650,NULL),(181,'NEUILLY',27730,NULL),(182,'LA NOE POULAIN',27560,NULL),(183,'LE VAL DORE',27190,NULL),(184,'PERRIERS SUR ANDELLE',27910,NULL),(185,'LE PLANQUAY',27230,NULL),(186,'PRESSAGNY L ORGUEILLEUX',27510,NULL),(187,'RENNEVILLE',27910,NULL),(188,'ROMILLY LA PUTHENAYE',27170,NULL),(189,'ROUVRAY',27120,NULL),(190,'ST AGNAN DE CERNIERES',27390,NULL),(191,'ST AUBIN SUR GAILLON',27600,NULL),(192,'ST BENOIT DES OMBRES',27450,NULL),(193,'ST CHRISTOPHE SUR AVRE',27820,NULL),(194,'LE VAUDREUIL',27100,NULL),(195,'ST DENIS DES MONTS',27520,NULL),(196,'ST GERMAIN DES ANGLES',27930,NULL),(197,'ST GERMAIN SUR AVRE',27320,NULL),(198,'ST JULIEN DE LA LIEGUE',27600,NULL),(199,'LA CHAPELLE LONGUEVILLE',27950,NULL),(200,'ST LEGER DU GENNETEY',27520,NULL),(201,'ST MARCEL',27950,NULL),(202,'ST MARDS DE FRESNE',27230,NULL),(203,'LE LESME',27160,NULL),(204,'ST MARTIN DU TILLEUL',27300,NULL),(205,'ST MARTIN LA CAMPAGNE',27930,NULL),(206,'ST MARTIN ST FIRMIN',27450,NULL),(207,'STE OPPORTUNE DU BOSC',27110,NULL),(208,'ST PAUL DE FOURQUES',27800,NULL),(209,'ST PHILBERT SUR BOISSEY',27520,NULL),(210,'ST PHILBERT SUR RISLE',27290,NULL),(211,'ST PIERRE LA GARENNE',27600,NULL),(212,'ST VIGOR',27930,NULL),(213,'SANCOURT',27150,NULL),(214,'SASSEY',27930,NULL),(215,'SEBECOURT',27190,NULL),(216,'SERQUIGNY',27470,NULL),(217,'SUZAY',27420,NULL),(218,'LE THEIL NOLENT',27230,NULL),(219,'THIBERVILLE',27230,NULL),(220,'TILLY',27510,NULL),(221,'TOURNEDOS BOIS HUBERT',27180,NULL),(222,'TOURVILLE SUR PONT AUDEMER',27500,NULL),(223,'LA TRINITE DE REVILLE',27270,NULL),(224,'TRIQUEVILLE',27500,NULL),(225,'LE VAL DAVID',27120,NULL),(226,'VANNECROCQ',27210,NULL),(227,'VENON',27110,NULL),(228,'VERNEUSSES',27390,NULL),(229,'VILLEGATS',27120,NULL),(230,'VILLERS EN VEXIN',27420,NULL),(231,'SYLVAINS LES MOULINS',27240,NULL),(232,'VIRONVAY',27400,NULL),(233,'VOISCREVILLE',27520,NULL),(234,'AMILLY',28300,NULL),(235,'ARDELLES',28170,NULL),(236,'COMMUNE NOUVELLE D ARROU',28220,NULL),(237,'COMMUNE NOUVELLE D ARROU',28290,NULL),(238,'AUNEAU BLEURY ST SYMPHORIEN',28700,NULL),(239,'BAIGNEAUX',28140,NULL),(240,'BAILLEAU ARMENONVILLE',28320,NULL),(241,'BAZOCHES LES HAUTES',28140,NULL),(242,'BERCHERES ST GERMAIN',28300,NULL),(243,'BERCHERES LES PIERRES',28630,NULL),(244,'BONCOURT',28260,NULL),(245,'BOUGLAINVAL',28130,NULL),(246,'BREZOLLES',28270,NULL),(247,'CHALLET',28300,NULL),(248,'CHARTRES',28000,NULL),(249,'CHATEAUDUN',28200,NULL),(250,'CHATEAUNEUF EN THYMERAIS',28170,NULL),(251,'LES CHATELETS',28270,NULL),(252,'CHATENAY',28700,NULL),(253,'CHAUDON',28210,NULL),(254,'COURVILLE SUR EURE',28190,NULL),(255,'DAMBRON',28140,NULL),(256,'DAMPIERRE SOUS BROU',28160,NULL),(257,'DANCY',28800,NULL),(258,'DANGEAU',28160,NULL),(259,'ECROSNES',28320,NULL),(260,'ESCORPAIN',28270,NULL),(261,'FAVEROLLES',28210,NULL),(262,'LA FERTE VIDAME',28340,NULL),(263,'FONTENAY SUR CONIE',28140,NULL),(264,'LA FRAMBOISIERE',28250,NULL),(265,'FRANCOURVILLE',28700,NULL),(266,'LE GAULT ST DENIS',28800,NULL),(267,'GELLAINVILLE',28630,NULL),(268,'LE GUE DE LONGROI',28700,NULL),(269,'HANCHES',28130,NULL),(270,'ILLIERS COMBRAY',28120,NULL),(271,'INTREVILLE',28310,NULL),(272,'JANVILLE EN BEAUCE',28310,NULL),(273,'LAMBLORE',28340,NULL),(274,'LEVES',28300,NULL),(275,'LOUVILLE LA CHENARD',28150,NULL),(276,'LUISANT',28600,NULL),(277,'MAILLEBOIS',28170,NULL),(278,'MAINTENON',28130,NULL),(279,'MARBOUE',28200,NULL),(280,'ARCISSES',28400,NULL),(281,'ARCISSES',28400,NULL),(282,'MEAUCE',28240,NULL),(283,'MEREGLISE',28120,NULL),(284,'MESLAY LE VIDAME',28360,NULL),(285,'MEZIERES EN DROUAIS',28500,NULL),(286,'MIGNIERES',28630,NULL),(287,'MOLEANS',28200,NULL),(288,'NOGENT LE ROI',28210,NULL),(289,'NOTTONVILLE',28140,NULL),(290,'OINVILLE ST LIPHARD',28310,NULL),(291,'ROUVRES',28260,NULL),(292,'ST AUBIN DES BOIS',28300,NULL),(293,'STE GEMME MORONVAL',28500,NULL),(294,'ST GERMAIN LE GAILLARD',28190,NULL),(295,'ST JEAN PIERRE FIXTE',28400,NULL),(296,'ST LEGER DES AUBEES',28700,NULL),(297,'ST LUBIN DE LA HAYE',28410,NULL),(298,'ST OUEN MARCHEFROY',28260,NULL),(299,'ST VICTOR DE BUTHON',28240,NULL),(300,'SAINVILLE',28700,NULL),(301,'SANDARVILLE',28120,NULL),(302,'SERVILLE',28410,NULL),(303,'SOREL MOUSSEL',28260,NULL),(304,'SOURS',28630,NULL),(305,'TERMINIERS',28140,NULL),(306,'THEUVILLE',28360,NULL),(307,'THIVILLE',28200,NULL),(308,'TREMBLAY LES VILLAGES',28170,NULL),(309,'UMPEAU',28700,NULL),(310,'UNVERRE',28160,NULL),(311,'VERT EN DROUAIS',28500,NULL),(312,'VIERVILLE',28700,NULL),(313,'VIEUVICQ',28120,NULL),(314,'VILLIERS LE MORHIER',28130,NULL),(315,'LES VILLAGES VOVEENS',28150,NULL),(316,'ARGOL',29560,NULL),(317,'BANNALEC',29380,NULL),(318,'BEUZEC CAP SIZUN',29790,NULL),(319,'BRENNILIS',29690,NULL),(320,'PLOUNEOUR BRIGNOGAN PLAGES',29890,NULL),(321,'CLOHARS CARNOET',29360,NULL),(322,'CLOHARS FOUESNANT',29950,NULL),(323,'COMMANA',29450,NULL),(324,'CONCARNEAU',29900,NULL),(325,'LE CONQUET',29217,NULL),(326,'CORAY',29370,NULL),(327,'LE DRENNEC',29860,NULL),(328,'LA FOREST LANDERNEAU',29800,NULL),(329,'FOUESNANT',29170,NULL),(330,'GOUESNACH',29950,NULL),(331,'GOULVEN',29890,NULL),(332,'GUILERS',29820,NULL),(333,'HANVEC',29460,NULL),(334,'HOPITAL CAMFROUT',29460,NULL),(335,'ILE DE SEIN',29990,NULL),(336,'ILE MOLENE',29259,NULL),(337,'ILE TUDY',29980,NULL),(338,'LANDEDA',29870,NULL),(339,'LANDREVARZEC',29510,NULL),(340,'LANGOLEN',29510,NULL),(341,'LOCQUENOLE',29670,NULL),(342,'MAHALON',29790,NULL),(343,'MELLAC',29300,NULL),(344,'MESPAUL',29420,NULL),(345,'MOELAN SUR MER',29350,NULL),(346,'PENCRAN',29800,NULL),(347,'PLOBANNALEC LESCONIL',29740,NULL),(348,'PLOGOFF',29770,NULL),(349,'PLOMODIERN',29550,NULL),(350,'PLOUEGAT MOYSAN',29650,NULL),(351,'PLOUGONVELIN',29217,NULL),(352,'PLOUIGNEAU',29610,NULL),(353,'PLOURIN LES MORLAIX',29600,NULL),(354,'PLOUYE',29690,NULL),(355,'PLOZEVET',29710,NULL),(356,'PONT AVEN',29930,NULL),(357,'PONT L ABBE',29120,NULL),(358,'PORSPODER',29840,NULL),(359,'POULLAN SUR MER',29100,NULL),(360,'POULLAOUEN',29246,NULL),(361,'POULLAOUEN',29690,NULL),(362,'ROSNOEN',29590,NULL),(363,'ROSPORDEN',29140,NULL),(364,'ST HERNIN',29270,NULL),(365,'ST NIC',29550,NULL),(366,'ST THURIEN',29380,NULL),(367,'SCRIGNAC',29640,NULL),(368,'SPEZET',29540,NULL),(369,'LE TREVOUX',29380,NULL),(370,'ALBITRECCIA',20128,NULL),(371,'ARBELLARA',20110,NULL),(372,'ARGIUSTA MORICCIO',20140,NULL),(373,'CIAMANNACCE',20134,NULL),(374,'COGGIA',20118,NULL),(375,'COGNOCOLI MONTICCHI',20166,NULL),(376,'COTI CHIAVARI',20138,NULL),(377,'FIGARI',20114,NULL),(378,'FOCE',20100,NULL),(379,'GIUNCHETO',20100,NULL),(380,'GUAGNO',20160,NULL),(381,'GUITERA LES BAINS',20153,NULL),(382,'MARIGNANA',20141,NULL),(383,'OLMETO',20113,NULL),(384,'PERI',20167,NULL),(385,'PIANOTTOLI CALDARELLO',20131,NULL),(386,'PIETROSELLA',20166,NULL),(387,'SERRA DI FERRO',20140,NULL),(388,'SOTTA',20146,NULL),(389,'TASSO',20134,NULL),(390,'ZERUBIA',20116,NULL),(391,'ZIGLIARA',20190,NULL),(392,'ZOZA',20112,NULL),(393,'ALANDO',20212,NULL),(394,'ALBERTACCE',20224,NULL),(395,'ALGAJOLA',20220,NULL),(396,'AMPRIANI',20272,NULL),(397,'BASTIA',20600,NULL),(398,'BIGUGLIA',20620,NULL),(399,'BRANDO',20222,NULL),(400,'CAGNANO',20228,NULL),(401,'CAMBIA',20244,NULL),(402,'CANARI',20217,NULL),(403,'CARTICASI',20244,NULL),(404,'CASABIANCA',20237,NULL),(405,'CASAMACCIOLI',20224,NULL),(406,'CASTELLARE DI CASINCA',20213,NULL),(407,'CASTINETA',20218,NULL),(408,'CORBARA',20220,NULL),(409,'CORBARA',20256,NULL),(410,'CROCICCHIA',20290,NULL),(411,'ERONE',20244,NULL),(412,'ERSA',20275,NULL),(413,'FARINOLE',20253,NULL),(414,'GAVIGNANO',20218,NULL),(415,'GHISONI',20227,NULL),(416,'GIOCATOJO',20237,NULL),(417,'ISOLACCIO DI FIUMORBO',20243,NULL),(418,'LAMA',20218,NULL),(419,'LINGUIZZETTA',20230,NULL),(420,'LUCCIANA',20290,NULL),(421,'LUCCIANA',20290,NULL),(422,'LURI',20228,NULL),(423,'MONTEGROSSO',20214,NULL),(424,'MONTEGROSSO',20214,NULL),(425,'MONTEGROSSO',20214,NULL),(426,'MONTICELLO',20220,NULL),(427,'MURO',20225,NULL),(428,'NESSA',20225,NULL),(429,'NOCARIO',20229,NULL),(430,'NOCETA',20242,NULL),(431,'OCCHIATANA',20226,NULL),(432,'ORTIPORIO',20290,NULL),(433,'PENTA DI CASINCA',20213,NULL),(434,'PIANO',20215,NULL),(435,'PIEDICORTE DI GAGGIO',20251,NULL),(436,'PIEDICROCE',20229,NULL),(437,'PIETROSO',20242,NULL),(438,'PIGNA',20220,NULL),(439,'PINO',20228,NULL),(440,'POGGIO DI NAZZA',20240,NULL),(441,'POGGIO D OLETTA',20232,NULL),(442,'PORRI',20215,NULL),(443,'PRUNELLI DI FIUMORBO',20243,NULL),(444,'SPELONCATO',20226,NULL),(445,'SANT ANDREA DI COTONE',20221,NULL),(446,'SAN GIOVANNI DI MORIANI',20230,NULL),(447,'SAN GIULIANO',20230,NULL),(448,'SAN MARTINO DI LOTA',20200,NULL),(449,'SAN NICOLAO',20230,NULL),(450,'SANTA REPARATA DI MORIANI',20230,NULL),(451,'TALLONE',20270,NULL),(452,'VALLE D ALESANI',20234,NULL),(453,'VALLICA',20259,NULL),(454,'VERDESE',20229,NULL),(455,'VESCOVATO',20215,NULL),(456,'VIGNALE',20290,NULL),(457,'VOLPAJOLA',20290,NULL),(458,'AIGALIERS',30700,NULL),(459,'AIGUES VIVES',30670,NULL),(460,'AIMARGUES',30470,NULL),(461,'ALZON',30770,NULL),(462,'ARAMON',30390,NULL),(463,'ASPERES',30250,NULL),(464,'BARJAC',30430,NULL),(465,'BEAUCAIRE',30300,NULL),(466,'BEAUVOISIN',30640,NULL),(467,'BEAUVOISIN',30640,NULL),(468,'BOISSIERES',30114,NULL),(469,'BORDEZAC',30160,NULL),(470,'BOUILLARGUES',30230,NULL),(471,'BOURDIC',30190,NULL),(472,'BREAU MARS',30120,NULL),(473,'BRIGNON',30190,NULL),(474,'LA BRUGUIERE',30580,NULL),(475,'LA CADIERE ET CAMBO',30170,NULL),(476,'LE CAILAR',30740,NULL),(477,'LA CALMETTE',30190,NULL),(478,'CARSAN',30130,NULL),(479,'CASTILLON DU GARD',30210,NULL),(480,'CENDRAS',30480,NULL),(481,'CHUSCLAN',30200,NULL),(482,'CHUSCLAN',30200,NULL),(483,'COMBAS',30250,NULL),(484,'CONCOULES',30450,NULL),(485,'CONGENIES',30111,NULL),(486,'CONNAUX',30330,NULL),(487,'CONQUEYRAC',30170,NULL),(488,'CORCONNE',30260,NULL),(489,'COURRY',30500,NULL),(490,'EUZET',30360,NULL),(491,'FOISSAC',30700,NULL),(492,'GAUJAC',30330,NULL),(493,'GENERARGUES',30140,NULL),(494,'LA GRAND COMBE',30110,NULL),(495,'LANUEJOLS',30750,NULL),(496,'LAVAL PRADEL',30110,NULL),(497,'LEDENON',30210,NULL),(498,'LUSSAN',30580,NULL),(499,'LE MARTINET',30960,NULL),(500,'MARUEJOLS LES GARDON',30350,NULL),(501,'MAURESSARGUES',30350,NULL),(502,'MEJANNES LES ALES',30340,NULL),(503,'MOLIERES CAVAILLAC',30120,NULL),(504,'MUS',30121,NULL),(505,'ORSAN',30200,NULL),(506,'PARIGNARGUES',30730,NULL),(507,'POMMIERS',30120,NULL),(508,'REMOULINS',30210,NULL),(509,'ROBIAC ROCHESSADOULE',30160,NULL),(510,'ROCHEGUDE',30430,NULL),(511,'ROQUEDUR',30440,NULL),(512,'ROQUEMAURE',30150,NULL),(513,'ROUSSON',30340,NULL),(514,'ST BRES',30500,NULL),(515,'ST BRESSON',30440,NULL),(516,'ST CHRISTOL DE RODIERES',30760,NULL),(517,'ST COME ET MARUEJOLS',30870,NULL),(518,'ST DENIS',30500,NULL),(519,'ST DIONISY',30980,NULL),(520,'ST GILLES',30800,NULL),(521,'ST JEAN DE CRIEULON',30610,NULL),(522,'ST JEAN DE VALERISCLE',30960,NULL),(523,'ST JEAN DU PIN',30140,NULL),(524,'ST LAURENT D AIGOUZE',30220,NULL),(525,'ST LAURENT LA VERNEDE',30330,NULL),(526,'ST MAMERT DU GARD',30730,NULL),(527,'ST MARTIN DE VALGALGUES',30520,NULL),(528,'ST NAZAIRE DES GARDIES',30610,NULL),(529,'ST PRIVAT DE CHAMPCLOS',30430,NULL),(530,'ST ROMAN DE CODIERES',30440,NULL),(531,'SALINELLES',30250,NULL),(532,'SAUMANE',30125,NULL),(533,'SUMENE',30440,NULL),(534,'THEZIERS',30390,NULL),(535,'TRESQUES',30330,NULL),(536,'VAUVERT',30600,NULL),(537,'LA VERNAREDE',30530,NULL),(538,'VESTRIC ET CANDIAC',30600,NULL),(539,'LE VIGAN',30120,NULL),(540,'ST PAUL LES FONTS',30330,NULL),(541,'AGASSAC',31230,NULL),(542,'AIGREFEUILLE',31280,NULL),(543,'ALAN',31420,NULL),(544,'AMBAX',31230,NULL),(545,'ARLOS',31440,NULL),(546,'AUCAMVILLE',31140,NULL),(547,'AUREVILLE',31320,NULL),(548,'AURIBAIL',31190,NULL),(549,'AURIGNAC',31420,NULL),(550,'AUSSON',31210,NULL),(551,'AVIGNONET LAURAGAIS',31290,NULL),(552,'BARBAZAN',31510,NULL),(553,'BELBEZE DE LAURAGAIS',31450,NULL),(554,'BESSIERES',31660,NULL),(555,'BILLIERE',31110,NULL),(556,'BLAGNAC',31700,NULL),(557,'BONDIGOUX',31340,NULL),(558,'BONREPOS RIQUET',31590,NULL),(559,'BORDES DE RIVIERE',31210,NULL),(560,'LE BORN',31340,NULL),(561,'BOUTX',31160,NULL),(562,'BOUZIN',31420,NULL),(563,'BRAGAYRAC',31470,NULL),(564,'BRUGUIERES',31150,NULL),(565,'CABANAC CAZAUX',31160,NULL),(566,'CARAGOUDES',31460,NULL),(567,'CARBONNE',31390,NULL),(568,'CARDEILHAC',31350,NULL),(569,'CAZENEUVE MONTAUT',31420,NULL),(570,'CHEIN DESSUS',31160,NULL),(571,'CIERP GAUD',31440,NULL),(572,'DONNEVILLE',31450,NULL),(573,'DREMIL LAFAGE',31280,NULL),(574,'DRUDAS',31480,NULL),(575,'ESCALQUENS',31750,NULL),(576,'ESTENOS',31440,NULL),(577,'FRANCAZAL',31260,NULL),(578,'LE FRECHET',31360,NULL),(579,'FRONTIGNAN DE COMMINGES',31510,NULL),(580,'FRONTIGNAN SAVES',31230,NULL),(581,'FRONTON',31620,NULL),(582,'GAGNAC SUR GARONNE',31150,NULL),(583,'GOUAUX DE LARBOUST',31110,NULL),(584,'GOUZENS',31310,NULL),(585,'GRATENTOUR',31150,NULL),(586,'L ISLE EN DODON',31230,NULL),(587,'LABROQUERE',31510,NULL),(588,'LACAUGNE',31390,NULL),(589,'LAGARDELLE SUR LEZE',31870,NULL),(590,'LAHAGE',31370,NULL),(591,'LANTA',31570,NULL),(592,'LAREOLE',31480,NULL),(593,'LASSERRE PRADERE',31530,NULL),(594,'LAVALETTE',31590,NULL),(595,'LEGE',31440,NULL),(596,'LESPUGUE',31350,NULL),(597,'LHERM',31600,NULL),(598,'LONGAGES',31410,NULL),(599,'LUSCAN',31510,NULL),(600,'LUSSAN ADEILHAC',31430,NULL),(601,'MANCIOUX',31360,NULL),(602,'MARIGNAC',31440,NULL),(603,'MARIGNAC LASPEYRES',31220,NULL),(604,'MARTRES DE RIVIERE',31210,NULL),(605,'MARTRES TOLOSANE',31220,NULL),(606,'MAURAN',31220,NULL),(607,'MAUVAISIN',31190,NULL),(608,'MONDAVEZAN',31220,NULL),(609,'MONDONVILLE',31700,NULL),(610,'MONTBRUN BOCAGE',31310,NULL),(611,'MONTCLAR DE COMMINGES',31220,NULL),(612,'MONTESPAN',31260,NULL),(613,'MONTGAZIN',31410,NULL),(614,'MONTJOIRE',31380,NULL),(615,'MONTPITOL',31380,NULL),(616,'MOURvilles HAUTES',31540,NULL),(617,'NOGARET',31540,NULL),(618,'NOUEILLES',31450,NULL),(619,'ORE',31510,NULL),(620,'PAULHAC',31380,NULL),(621,'PEYRISSAS',31420,NULL),(622,'PEYROUZET',31420,NULL),(623,'PLAGNE',31220,NULL),(624,'POINTIS DE RIVIERE',31210,NULL),(625,'POLASTRON',31430,NULL),(626,'POUBEAU',31110,NULL),(627,'POUCHARRAMET',31370,NULL),(628,'PUYSSEGUR',31480,NULL),(629,'QUINT FONSEGRIVES',31130,NULL),(630,'RAZECUEILLE',31160,NULL),(631,'RIEUX VOLVESTRE',31310,NULL),(632,'ROQUESERIERE',31380,NULL),(633,'ROUEDE',31160,NULL),(634,'SABONNERES',31370,NULL),(635,'SACCOURVIELLE',31110,NULL),(636,'ST BERTRAND DE COMMINGES',31510,NULL),(637,'ST CEZERT',31330,NULL),(638,'ST CHRISTAUD',31310,NULL),(639,'ST GERMIER',31290,NULL),(640,'ST HILAIRE',31410,NULL),(641,'ST JULIEN SUR GARONNE',31220,NULL),(642,'ST MAMET',31110,NULL),(643,'ST MARCET',31800,NULL),(644,'ST MICHEL',31220,NULL),(645,'ST PIERRE DE LAGES',31570,NULL),(646,'ST SAUVEUR',31790,NULL),(647,'SANA',31220,NULL),(648,'SARREMEZAN',31350,NULL),(649,'SAUSSENS',31460,NULL),(650,'SAVERES',31370,NULL),(651,'SEDEILHAC',31580,NULL),(652,'SEILHAN',31510,NULL),(653,'SEYSSES',31600,NULL),(654,'SOUEICH',31160,NULL),(655,'TERREBASSE',31420,NULL),(656,'THIL',31530,NULL),(657,'TOULOUSE',31000,NULL),(658,'LES TOURREILLES',31210,NULL),(659,'TREBONS DE LUCHON',31110,NULL),(660,'L UNION',31240,NULL),(661,'URAU',31260,NULL),(662,'VALLEGUE',31290,NULL),(663,'VERFEIL',31590,NULL),(664,'VERNET',31810,NULL),(665,'VIEILLE TOULOUSE',31320,NULL),(666,'VILLARIES',31380,NULL),(667,'VILLENEUVE LECUSSAN',31580,NULL),(668,'VILLENOUVELLE',31290,NULL),(669,'ANTRAS',32360,NULL),(670,'ARMOUS ET CAU',32230,NULL),(671,'AUGNAX',32120,NULL),(672,'AUX AUSSAT',32170,NULL),(673,'AYZIEU',32800,NULL),(674,'BARRAN',32350,NULL),(675,'BAZIAN',32320,NULL),(676,'BAZUGUES',32170,NULL),(677,'BECCAS',32730,NULL),(678,'BELMONT',32190,NULL),(679,'BERRAC',32480,NULL),(680,'BEZOLLES',32310,NULL),(681,'BEZUES BAJON',32140,NULL),(682,'CABAS LOUMASSES',32140,NULL),(683,'CADEILHAN',32380,NULL),(684,'CAHUZAC SUR ADOUR',32400,NULL),(685,'CALLIAN',32190,NULL),(686,'CASTELNAU D ARBIEU',32500,NULL),(687,'CASTELNAU D AUZAN LABARRERE',32440,NULL),(688,'CASTERA LECTOUROIS',32700,NULL),(689,'CASTILLON DEBATS',32190,NULL),(690,'CEZAN',32410,NULL),(691,'CLERMONT SAVES',32600,NULL),(692,'ESCORNEBOEUF',32200,NULL),(693,'ESPAS',32370,NULL),(694,'FLEURANCE',32500,NULL),(695,'FUSTEROUAU',32400,NULL),(696,'GALIAX',32160,NULL),(697,'GAUJAN',32420,NULL),(698,'GOUTZ',32500,NULL),(699,'HAULIES',32550,NULL),(700,'HOMPS',32120,NULL),(701,'JEGUN',32360,NULL),(702,'JU BELLOC',32160,NULL),(703,'JUSTIAN',32190,NULL),(704,'LABRIHE',32120,NULL),(705,'LAGARDE HACHAN',32300,NULL),(706,'LALANNE',32500,NULL),(707,'LAMAZERE',32300,NULL),(708,'LARRESSINGLE',32100,NULL),(709,'LUPIAC',32290,NULL),(710,'MAIGNAUT TAUZIA',32310,NULL),(711,'MANSENCOME',32310,NULL),(712,'MARCIAC',32230,NULL),(713,'MAULEON D ARMAGNAC',32240,NULL),(714,'MAUMUSSON LAGUIAN',32400,NULL),(715,'MAURENS',32200,NULL),(716,'MIRAMONT D ASTARAC',32300,NULL),(717,'MIREPOIX',32390,NULL),(718,'MONBRUN',32600,NULL),(719,'MONCLAR',32150,NULL),(720,'MONCLAR SUR LOSSE',32300,NULL),(721,'MONCORNEIL GRAZAN',32260,NULL),(722,'MONFERRAN SAVES',32490,NULL),(723,'MONGAUSY',32220,NULL),(724,'MONTAMAT',32220,NULL),(725,'MONTESQUIOU',32320,NULL),(726,'MONTIES',32420,NULL),(727,'MONTIRON',32200,NULL),(728,'MONTPEZAT',32220,NULL),(729,'MONTREAL',32250,NULL),(730,'MOUREDE',32190,NULL),(731,'NOGARO',32110,NULL),(732,'NOILHAN',32130,NULL),(733,'ORDAN LARROQUE',32350,NULL),(734,'PANJAS',32110,NULL),(735,'PLAISANCE',32160,NULL),(736,'PONSAN SOUBIRAN',32300,NULL),(737,'PRECHAC',32390,NULL),(738,'PRENERON',32190,NULL),(739,'PUJAUDRAN',32600,NULL),(740,'PUYCASQUIER',32120,NULL),(741,'RAZENGUES',32600,NULL),(742,'RICOURT',32230,NULL),(743,'RISCLE',32400,NULL),(744,'LA ROMIEU',32480,NULL),(745,'SABAZAN',32290,NULL),(746,'ST ANTONIN',32120,NULL),(747,'ST ARAILLES',32350,NULL),(748,'ST BLANCARD',32140,NULL),(749,'ST BRES',32120,NULL),(750,'ST MARTIN',32300,NULL),(751,'ST MARTIN DE GOYNE',32480,NULL),(752,'ST MAUR',32300,NULL),(753,'ST MEZARD',32700,NULL),(754,'ST MONT',32400,NULL),(755,'ST ORENS',32120,NULL),(756,'ST PUY',32310,NULL),(757,'STE RADEGONDE',32500,NULL),(758,'SAMARAN',32140,NULL),(759,'SANSAN',32260,NULL),(760,'SEISSAN',32260,NULL),(761,'SEMBOUES',32230,NULL),(762,'SEREMPUY',32120,NULL),(763,'TACHOIRES',32260,NULL),(764,'TAYBOSC',32120,NULL),(765,'TERMES D ARMAGNAC',32400,NULL),(766,'TOURDUN',32230,NULL),(767,'TOURRENQUETS',32390,NULL),(768,'URDENS',32500,NULL),(769,'VALENCE SUR BAISE',32310,NULL),(770,'VERGOIGNAN',32720,NULL),(771,'VIC FEZENSAC',32190,NULL),(772,'VILLEFRANCHE',32420,NULL),(773,'ABZAC',33230,NULL),(774,'ANGLADE',33390,NULL),(775,'ARCACHON',33120,NULL),(776,'ARTIGUES PRES BORDEAUX',33370,NULL),(777,'VAL DE VIRVEE',33240,NULL),(778,'BALIZAC',33730,NULL),(779,'BEGADAN',33340,NULL),(780,'BEGLES',33130,NULL),(781,'BERNOS BEAULAC',33430,NULL),(782,'BERTHEZ',33124,NULL),(783,'BIGANOS',33380,NULL),(784,'BOMMES',33210,NULL),(785,'BORDEAUX',33200,NULL),(786,'BOULIAC',33270,NULL),(787,'BRANNENS',33124,NULL),(788,'BROUQUEYRAN',33124,NULL),(789,'BRUGES',33520,NULL),(790,'CADILLAC',33410,NULL),(791,'CAMIAC ET ST DENIS',33420,NULL),(792,'CAMIRAN',33190,NULL),(793,'CAPIAN',33550,NULL),(794,'CENAC',33360,NULL),(795,'CESTAS',33610,NULL),(796,'CIVRAC SUR DORDOGNE',33350,NULL),(797,'COIMERES',33210,NULL),(798,'COIRAC',33540,NULL),(799,'COURPIAC',33760,NULL),(800,'CREON',33670,NULL),(801,'CUSSAC FORT MEDOC',33460,NULL),(802,'DAIGNAC',33420,NULL),(803,'DIEULIVOL',33580,NULL),(804,'EYSINES',33320,NULL),(805,'FALEYRAS',33760,NULL),(806,'FLAUJAGUES',33350,NULL),(807,'FLOUDES',33190,NULL),(808,'GORNAC',33540,NULL),(809,'GRADIGNAN',33170,NULL),(810,'GRAYAN ET L HOPITAL',33590,NULL),(811,'HOSTENS',33125,NULL),(812,'HURE',33190,NULL),(813,'IZON',33450,NULL),(814,'LADAUX',33760,NULL),(815,'LAGORCE',33230,NULL),(816,'LA LANDE DE FRONSAC',33240,NULL),(817,'LANDERROUET SUR SEGUR',33540,NULL),(818,'LANSAC',33710,NULL),(819,'LEGE CAP FERRET',33950,NULL),(820,'LEGE CAP FERRET',33950,NULL),(821,'LEOGEATS',33210,NULL),(822,'LIGNAN DE BORDEAUX',33360,NULL),(823,'LOUCHATS',33125,NULL),(824,'LOUPIAC DE LA REOLE',33190,NULL),(825,'MADIRAC',33670,NULL),(826,'MARGAUX CANTENAC',33460,NULL),(827,'MARTRES',33760,NULL),(828,'MESTERRIEUX',33540,NULL),(829,'MOMBRIER',33710,NULL),(830,'MONSEGUR',33580,NULL),(831,'MONTAGNE',33570,NULL),(832,'MONTIGNAC',33760,NULL),(833,'MOULON',33420,NULL),(834,'NOAILLAN',33730,NULL),(835,'ORIGNE',33113,NULL),(836,'PERISSAC',33240,NULL),(837,'PESSAC',33600,NULL),(838,'PLASSAC',33390,NULL),(839,'PRECHAC',33730,NULL),(840,'PREIGNAC',33210,NULL),(841,'PUJOLS SUR CIRON',33210,NULL),(842,'PUYNORMAND',33660,NULL),(843,'QUEYRAC',33340,NULL),(844,'LA REOLE',33190,NULL),(845,'ROAILLAN',33210,NULL),(846,'RUCH',33350,NULL),(847,'SAILLANS',33141,NULL),(848,'ST ANDRE DU BOIS',33490,NULL),(849,'ST ANTOINE DU QUEYRET',33790,NULL),(850,'ST AVIT ST NAZAIRE',33220,NULL),(851,'VAL DE LIVENNE',33820,NULL),(852,'ST CIERS D ABZAC',33910,NULL),(853,'ST ESTEPHE',33180,NULL),(854,'ST FELIX DE FONCAUDE',33540,NULL),(855,'ST FERME',33580,NULL),(856,'ST GENIS DU BOIS',33760,NULL),(857,'ST GIRONS D AIGUEVIVES',33920,NULL),(858,'ST JEAN DE BLAIGNAC',33420,NULL),(859,'ST LAURENT DES COMBES',33330,NULL),(860,'ST LAURENT DU BOIS',33540,NULL),(861,'ST LAURENT DU PLAN',33190,NULL),(862,'ST MAGNE',33125,NULL),(863,'ST MAGNE DE CASTILLON',33350,NULL),(864,'ST MARTIN DE SESCAS',33490,NULL),(865,'ST MEDARD D EYRANS',33650,NULL),(866,'ST MICHEL DE CASTELNAU',33840,NULL),(867,'ST MICHEL DE RIEUFRET',33720,NULL),(868,'ST MICHEL DE LAPUJADE',33190,NULL),(869,'ST SAVIN',33920,NULL),(870,'ST SEURIN DE BOURG',33710,NULL),(871,'ST SEVE',33190,NULL),(872,'SAMONAC',33710,NULL),(873,'SAUCATS',33650,NULL),(874,'SAUGON',33920,NULL),(875,'SAUMOS',33680,NULL),(876,'SAUVETERRE DE GUYENNE',33540,NULL),(877,'SAVIGNAC DE L ISLE',33910,NULL),(878,'SIGALENS',33690,NULL),(879,'SILLAS',33690,NULL),(880,'TARNES',33240,NULL),(881,'LA TESTE DE BUCH',33115,NULL),(882,'LA TESTE DE BUCH',33115,NULL),(883,'LA TESTE DE BUCH',33260,NULL),(884,'TIZAC DE CURTON',33420,NULL),(885,'TIZAC DE LAPOUYADE',33620,NULL),(886,'UZESTE',33730,NULL),(887,'VAYRES',33870,NULL),(888,'VERDELAIS',33490,NULL),(889,'VIGNONET',33330,NULL),(890,'VILLANDRAUT',33730,NULL),(891,'AGDE',34300,NULL),(892,'AIGNE',34210,NULL),(893,'ALIGNAN DU VENT',34290,NULL),(894,'AUMES',34530,NULL),(895,'BABEAU BOULDOUX',34360,NULL),(896,'BALARUC LE VIEUX',34540,NULL),(897,'BEAUFORT',34210,NULL),(898,'BELARGA',34230,NULL),(899,'BERLOU',34360,NULL),(900,'BOISSET',34220,NULL),(901,'BUZIGNARGUES',34160,NULL),(902,'CAMBON ET SALVERGUES',34330,NULL),(903,'CANDILLARGUES',34130,NULL),(904,'CAPESTANG',34310,NULL),(905,'CASSAGNOLES',34210,NULL),(906,'CASTANET LE HAUT',34610,NULL),(907,'CASTELNAU LE LEZ',34170,NULL),(908,'CASTRIES',34160,NULL),(909,'LA CAUNETTE',34210,NULL),(910,'CAUSSE DE LA SELLE',34380,NULL),(911,'CAUSSINIOJOULS',34600,NULL),(912,'CAZEDARNES',34460,NULL),(913,'CAZOULS LES BEZIERS',34370,NULL),(914,'CESSENON SUR ORB',34460,NULL),(915,'COMBAILLAUX',34980,NULL),(916,'CORNEILHAN',34490,NULL),(917,'CRUZY',34310,NULL),(918,'ESPONDEILHAN',34290,NULL),(919,'GIGEAN',34770,NULL),(920,'LACOSTE',34800,NULL),(921,'LANSARGUES',34130,NULL),(922,'LATTES',34970,NULL),(923,'LAUROUX',34700,NULL),(924,'LEZIGNAN LA CEBE',34120,NULL),(925,'LOUPIAN',34140,NULL),(926,'LUNEL',34400,NULL),(927,'MARSILLARGUES',34590,NULL),(928,'MAS DE LONDRES',34380,NULL),(929,'MINERVE',34210,NULL),(930,'MONTAGNAC',34530,NULL),(931,'MONTAUD',34160,NULL),(932,'MONTPELLIER',34070,NULL),(933,'MURVIEL LES MONTPELLIER',34570,NULL),(934,'OCTON',34800,NULL),(935,'OUPIA',34210,NULL),(936,'PAILHES',34490,NULL),(937,'PALAVAS LES FLOTS',34250,NULL),(938,'PINET',34850,NULL),(939,'POILHES',34310,NULL),(940,'POUZOLS',34230,NULL),(941,'LE PRADAL',34600,NULL),(942,'PRADES SUR VERNAZOBRE',34360,NULL),(943,'LE PUECH',34700,NULL),(944,'PUILACHER',34230,NULL),(945,'PUISSERGUIER',34620,NULL),(946,'RIOLS',34220,NULL),(947,'LES RIVES',34520,NULL),(948,'ROQUEBRUN',34460,NULL),(949,'ST ANDRE DE SANGONIS',34725,NULL),(950,'ST BAUZILLE DE PUTOIS',34190,NULL),(951,'ST DREZERY',34160,NULL),(952,'ST ETIENNE DE GOURGAS',34700,NULL),(953,'ST GEORGES D ORQUES',34680,NULL),(954,'ST GUILHEM LE DESERT',34150,NULL),(955,'ST GUIRAUD',34725,NULL),(956,'ST JEAN DE BUEGES',34380,NULL),(957,'ST JEAN DE FOS',34150,NULL),(958,'ST JULIEN',34390,NULL),(959,'ST MARTIN DE LONDRES',34380,NULL),(960,'ST PARGOIRE',34230,NULL),(961,'SAUSSINES',34160,NULL),(962,'SERVIAN',34290,NULL),(963,'SORBS',34520,NULL),(964,'TAUSSAC LA BILLIERE',34600,NULL),(965,'LA TOUR SUR ORB',34260,NULL),(966,'LA VACQUERIE ET ST MARTIN DE CASTRIES',34520,NULL),(967,'VAILHAUQUES',34570,NULL),(968,'VALERGUES',34130,NULL),(969,'VENDRES',34350,NULL),(970,'VIAS',34450,NULL),(971,'VIEUSSAN',34390,NULL),(972,'VILLENEUVE LES MAGUELONE',34750,NULL),(973,'VILLETELLE',34400,NULL),(974,'VIOLS EN LAVAL',34380,NULL),(975,'ACIGNE',35690,NULL),(976,'VAL COUESNON',35460,NULL),(977,'ARBRISSEL',35130,NULL),(978,'BAULON',35580,NULL),(979,'LA BAZOUGE DU DESERT',35420,NULL),(980,'BAZOUGES LA PEROUSE',35560,NULL),(981,'BEAUCE',35133,NULL),(982,'BOISGERVILLY',35360,NULL),(983,'BRIE',35150,NULL),(984,'BRUC SUR AFF',35550,NULL),(985,'CANCALE',35260,NULL),(986,'CHANTELOUP',35150,NULL),(987,'LA CHAPELLE DES FOUGERETZ',35520,NULL),(988,'CHATEAUGIRON',35410,NULL),(989,'CHATEAUNEUF D ILLE ET VILAINE',35430,NULL),(990,'CHAVAGNE',35310,NULL),(991,'CHELUN',35640,NULL),(992,'CINTRE',35310,NULL),(993,'COESMES',35134,NULL),(994,'LA COUYERE',35320,NULL),(995,'DINARD',35800,NULL),(996,'DOL DE BRETAGNE',35120,NULL),(997,'DOMAGNE',35113,NULL),(998,'ERBREE',35500,NULL),(999,'GEVEZE',35850,NULL),(1000,'GUICHEN',35580,NULL),(1001,'HEDE BAZOUGES',35630,NULL),(1002,'LANRIGAN',35270,NULL),(1003,'LIFFRE',35340,NULL),(1004,'LONGAULNAY',35190,NULL),(1005,'LOUTEHEL',35330,NULL),(1006,'MEZIERES SUR COUESNON',35140,NULL),(1007,'MINIAC MORVAN',35540,NULL),(1008,'MINIAC MORVAN',35540,NULL),(1009,'MINIAC SOUS BECHEREL',35190,NULL),(1010,'LE MINIHIC SUR RANCE',35870,NULL),(1011,'MONTAUBAN DE BRETAGNE',35360,NULL),(1012,'MONTHAULT',35420,NULL),(1013,'MOUSSE',35130,NULL),(1014,'MUEL',35290,NULL),(1015,'NOYAL SUR VILAINE',35530,NULL),(1016,'PARCE',35210,NULL),(1017,'PARIGNE',35133,NULL),(1018,'POCE LES BOIS',35500,NULL),(1019,'QUEBRIAC',35190,NULL),(1020,'RENNES',35000,NULL),(1021,'ROZ LANDRIEUX',35120,NULL),(1022,'ST BENOIT DES ONDES',35114,NULL),(1023,'RIVES DU COUESNON',35140,NULL),(1024,'ST MALO',35400,NULL),(1025,'ST MAUGAN',35750,NULL),(1026,'ST MEEN LE GRAND',35290,NULL),(1027,'ST MELOIR DES ONDES',35350,NULL),(1028,'ST M HERVE',35500,NULL),(1029,'MESNIL ROC H',35720,NULL),(1030,'ST SULPICE DES LANDES',35390,NULL),(1031,'ST THURIAL',35310,NULL),(1032,'SAULNIERES',35320,NULL),(1033,'TALENSAC',35160,NULL),(1034,'TORCE',35370,NULL),(1035,'VERN SUR SEICHE',35770,NULL),(1036,'LE TRONCHET',35540,NULL),(1037,'AMBRAULT',36120,NULL),(1038,'ARPHEUILLES',36700,NULL),(1039,'ARTHON',36330,NULL),(1040,'BRIVES',36100,NULL),(1041,'CHABRIS',36210,NULL),(1042,'CHAMPILLET',36160,NULL),(1043,'CHATILLON SUR INDRE',36700,NULL),(1044,'CHAZELET',36170,NULL),(1045,'CHEZELLES',36500,NULL),(1046,'CIRON',36300,NULL),(1047,'CONCREMIERS',36300,NULL),(1048,'CUZION',36190,NULL),(1049,'DOUADIC',36300,NULL),(1050,'DUNET',36310,NULL),(1051,'DUN LE POELIER',36210,NULL),(1052,'ECUEILLE',36240,NULL),(1053,'GIROUX',36150,NULL),(1054,'ISSOUDUN',36100,NULL),(1055,'JEU LES BOIS',36120,NULL),(1056,'LEVROUX',36110,NULL),(1057,'LEVROUX',36110,NULL),(1058,'LIGNAC',36370,NULL),(1059,'LIGNEROLLES',36160,NULL),(1060,'LINIEZ',36150,NULL),(1061,'MAUVIERES',36370,NULL),(1062,'MEOBECQ',36500,NULL),(1063,'MOUHERS',36340,NULL),(1064,'MOUHET',36170,NULL),(1065,'MOULINS SUR CEPHONS',36110,NULL),(1066,'MURS',36700,NULL),(1067,'NEUILLAY LES BOIS',36500,NULL),(1068,'NEUVY PAILLOUX',36100,NULL),(1069,'NIHERNE',36250,NULL),(1070,'OBTERRE',36290,NULL),(1071,'LE PECHEREAU',36200,NULL),(1072,'PERASSAY',36160,NULL),(1073,'BADECON LE PIN',36200,NULL),(1074,'POMMIERS',36190,NULL),(1075,'PREAUX',36240,NULL),(1076,'ROSNAY',36300,NULL),(1077,'RUFFEC',36300,NULL),(1078,'ST AOUSTRILLE',36100,NULL),(1079,'ST BENOIT DU SAULT',36170,NULL),(1080,'STE FAUSTE',36100,NULL),(1081,'STE GEMME',36500,NULL),(1082,'ST GILLES',36170,NULL),(1083,'ST MICHEL EN BRENNE',36290,NULL),(1084,'THENAY',36800,NULL),(1085,'LE TRANGER',36700,NULL),(1086,'URCIERS',36160,NULL),(1087,'VAL FOUZON',36210,NULL),(1088,'VAL FOUZON',36210,NULL),(1089,'LA VERNELLE',36600,NULL),(1090,'VERNEUIL SUR IGNERAIE',36400,NULL),(1091,'VIGOULANT',36160,NULL),(1092,'ABILLY',37160,NULL),(1093,'AUTRECHE',37110,NULL),(1094,'AZAY SUR CHER',37270,NULL),(1095,'AZAY SUR INDRE',37310,NULL),(1096,'BALLAN MIRE',37510,NULL),(1097,'BERTHENAY',37510,NULL),(1098,'BRASLOU',37120,NULL),(1099,'CANDES ST MARTIN',37500,NULL),(1100,'LA CELLE ST AVANT',37160,NULL),(1101,'CHAMBON',37290,NULL),(1102,'CHANNAY SUR LATHAN',37330,NULL),(1103,'LA CHAPELLE AUX NAUX',37130,NULL),(1104,'CHAVEIGNES',37120,NULL),(1105,'CHINON',37500,NULL),(1106,'CRAVANT LES COTEAUX',37500,NULL),(1107,'CROTELLES',37380,NULL),(1108,'FAYE LA VINEUSE',37120,NULL),(1109,'FERRIERE SUR BEAULIEU',37600,NULL),(1110,'LES HERMITES',37110,NULL),(1111,'HUISMES',37420,NULL),(1112,'LANGEAIS',37130,NULL),(1113,'LIMERAY',37530,NULL),(1114,'LE LOUROUX',37240,NULL),(1115,'LUYNES',37230,NULL),(1116,'LA MEMBROLLE SUR CHOISILLE',37390,NULL),(1117,'METTRAY',37390,NULL),(1118,'MONTBAZON',37250,NULL),(1119,'MONTRESOR',37460,NULL),(1120,'NEUILLY LE BRIGNON',37160,NULL),(1121,'NEUVILLE SUR BRENNE',37110,NULL),(1122,'NOUANS LES FONTAINES',37460,NULL),(1123,'ORBIGNY',37460,NULL),(1124,'PUSSIGNY',37800,NULL),(1125,'RICHELIEU',37120,NULL),(1126,'ST ANTOINE DU ROCHER',37360,NULL),(1127,'STE CATHERINE DE FIERBOIS',37800,NULL),(1128,'ST CYR SUR LOIRE',37540,NULL),(1129,'ST EPAIN',37800,NULL),(1130,'ST FLOVIER',37600,NULL),(1131,'ST GENOUPH',37510,NULL),(1132,'ST GERMAIN SUR VIENNE',37500,NULL),(1133,'STE MAURE DE TOURAINE',37800,NULL),(1134,'ST SENOCH',37600,NULL),(1135,'SEMBLANCAY',37360,NULL),(1136,'SENNEVIERES',37600,NULL),(1137,'VARENNES',37600,NULL),(1138,'VERNEUIL SUR INDRE',37600,NULL),(1139,'VILLEPERDUE',37260,NULL),(1140,'VILLIERS AU BOUIN',37330,NULL),(1141,'VOU',37240,NULL),(1142,'ALLEVARD',38580,NULL),(1143,'AOSTE',38490,NULL),(1144,'APPRIEU',38140,NULL),(1145,'APPRIEU',38140,NULL),(1146,'ASSIEU',38150,NULL),(1147,'AURIS',38142,NULL),(1148,'AVIGNONET',38650,NULL),(1149,'BRESSIEUX',38870,NULL),(1150,'LA BUISSE',38500,NULL),(1151,'LA BUISSIERE',38530,NULL),(1152,'CHALON',38122,NULL),(1153,'CHAMAGNIEU',38460,NULL),(1154,'LA CHAPELLE DE LA TOUR',38110,NULL),(1155,'LA CHAPELLE DU BARD',38580,NULL),(1156,'CHARETTE',38390,NULL),(1157,'CHASSE SUR RHONE',38670,NULL),(1158,'CHATEAU BERNARD',38650,NULL),(1159,'CHEVRIERES',38160,NULL),(1160,'CHEZENEUVE',38300,NULL),(1161,'CLELLES',38930,NULL),(1162,'ST MARTIN DE LA CLUZE',38650,NULL),(1163,'CORNILLON EN TRIEVES',38710,NULL),(1164,'COUR ET BUIS',38122,NULL),(1165,'CREYS MEPIEU',38510,NULL),(1166,'DOISSIN',38730,NULL),(1167,'EYZIN PINET',38780,NULL),(1168,'FONTANIL CORNILLON',38120,NULL),(1169,'LA FORTERESSE',38590,NULL),(1170,'LA FRETTE',38260,NULL),(1171,'GIERES',38610,NULL),(1172,'GRENOBLE',38000,NULL),(1173,'GRENOBLE',38100,NULL),(1174,'GRESSE EN VERCORS',38650,NULL),(1175,'HUEZ',38750,NULL),(1176,'IZERON',38160,NULL),(1177,'JANNEYRIAS',38280,NULL),(1178,'JARDIN',38200,NULL),(1179,'LAVAL EN BELLEDONNE',38190,NULL),(1180,'LEYRIEU',38460,NULL),(1181,'LIVET ET GAVET',38220,NULL),(1182,'MARCIEU',38350,NULL),(1183,'MARNANS',38980,NULL),(1184,'MENS',38710,NULL),(1185,'MENS',38710,NULL),(1186,'MIZOEN',38142,NULL),(1187,'LES DEUX ALPES',38860,NULL),(1188,'MONTFALCON',38940,NULL),(1189,'MONTFERRAT',38620,NULL),(1190,'MONTREVEL',38690,NULL),(1191,'LA MOTTE D AVEILLANS',38770,NULL),(1192,'LA MURETTE',38140,NULL),(1193,'ARANDON PASSINS',38510,NULL),(1194,'PELLAFOL',38970,NULL),(1195,'PENOL',38260,NULL),(1196,'PIERRE CHATEL',38119,NULL),(1197,'POISAT',38320,NULL),(1198,'POLIENAS',38210,NULL),(1199,'PONTCHARRA',38530,NULL),(1200,'LE PONT DE BEAUVOISIN',38480,NULL),(1201,'PONT DE CHERUY',38230,NULL),(1202,'LE PONT DE CLAIX',38800,NULL),(1203,'PRESSINS',38480,NULL),(1204,'RENAGE',38140,NULL),(1205,'REVENTIN VAUGRIS',38121,NULL),(1206,'ROYAS',38440,NULL),(1207,'SABLONS',38550,NULL),(1208,'ST ALBIN DE VAULSERRE',38480,NULL),(1209,'ST ANDRE LE GAZ',38490,NULL),(1210,'ST ANTOINE L ABBAYE',38160,NULL),(1211,'ST BLAISE DU BUIS',38140,NULL),(1212,'ST CHRISTOPHE EN OISANS',38520,NULL),(1213,'ST CHRISTOPHE SUR GUIERS',38380,NULL),(1214,'ST CLAIR DU RHONE',38370,NULL),(1215,'ST CLAIR SUR GALAURE',38940,NULL),(1216,'ST GEOIRS',38590,NULL),(1217,'ST GUILLAUME',38650,NULL),(1218,'ST HILAIRE DU ROSIER',38840,NULL),(1219,'PLATEAU DES PETITES ROCHES',38660,NULL),(1220,'ST HONORE',38350,NULL),(1221,'ST JULIEN DE L HERMS',38122,NULL),(1222,'ST LATTIER',38840,NULL),(1223,'ST MARCELLIN',38160,NULL),(1224,'ST MICHEL DE ST GEOIRS',38590,NULL),(1225,'ST NICOLAS DE MACHERIN',38500,NULL),(1226,'ST PIERRE DE CHARTREUSE',38380,NULL),(1227,'ST PIERRE DE MESAGE',38220,NULL),(1228,'ST PRIM',38370,NULL),(1229,'ST QUENTIN SUR ISERE',38210,NULL),(1230,'ST ROMAIN DE JALIONAS',38460,NULL),(1231,'ST SORLIN DE VIENNE',38200,NULL),(1232,'ST SULPICE DES RIVOIRES',38620,NULL),(1233,'ST THEOFFREY',38119,NULL),(1234,'ST VERAND',38160,NULL),(1235,'ST VICTOR DE MORESTEL',38510,NULL),(1236,'SALAISE SUR SANNE',38150,NULL),(1237,'LA SALETTE FALLAVAUX',38970,NULL),(1238,'LA SALLE EN BEAUMONT',38350,NULL),(1239,'SASSENAGE',38360,NULL),(1240,'PORTE DES BONNEVAUX',38260,NULL),(1241,'PORTE DES BONNEVAUX',38260,NULL),(1242,'SEYSSUEL',38200,NULL),(1243,'SUCCIEU',38300,NULL),(1244,'TIGNIEU JAMEYZIEU',38230,NULL),(1245,'TORCHEFELON',38690,NULL),(1246,'LA TOUR DU PIN',38110,NULL),(1247,'TULLINS',38210,NULL),(1248,'VAULX MILIEU',38090,NULL),(1249,'VERNAS',38460,NULL),(1250,'LA VERPILLIERE',38290,NULL),(1251,'VIENNE',38200,NULL),(1252,'VIF',38450,NULL),(1253,'VILLARD RECULAS',38114,NULL),(1254,'VILLEFONTAINE',38090,NULL),(1255,'VILLEMOIRIEU',38460,NULL),(1256,'VILLE SOUS ANJOU',38150,NULL),(1257,'VAL DE VIRIEU',38730,NULL),(1258,'VOISSANT',38620,NULL),(1259,'CHAMROUSSE',38410,NULL),(1260,'ALIEZE',39270,NULL),(1261,'AROMAS',39240,NULL),(1262,'LES ARSURES',39600,NULL),(1263,'AUDELANGE',39700,NULL),(1264,'AUGISEY',39270,NULL),(1265,'BALANOD',39160,NULL),(1266,'BANS',39380,NULL),(1267,'BEAUFORT ORBAGNA',39190,NULL),(1268,'BEFFIA',39270,NULL),(1269,'BELLEFONTAINE',39400,NULL),(1270,'BESAIN',39800,NULL),(1271,'BIEFMORIN',39800,NULL),(1272,'BLYE',39130,NULL),(1273,'BORNAY',39570,NULL),(1274,'BRAINANS',39800,NULL),(1275,'CHAINEE DES COUPIS',39120,NULL),(1276,'CHAMBERIA',39270,NULL),(1277,'CHARENCY',39250,NULL),(1278,'LA CHARME',39230,NULL),(1279,'LA CHATELAINE',39600,NULL),(1280,'CHATELAY',39380,NULL),(1281,'CHATELNEUF',39300,NULL),(1282,'CHATENOIS',39700,NULL),(1283,'CHAUMERGY',39230,NULL),(1284,'LA CHAUMUSSE',39150,NULL),(1285,'CHAUSSENANS',39800,NULL),(1286,'LA CHAUX EN BRESSE',39230,NULL),(1287,'CHAVERIA',39270,NULL),(1288,'CHEMENOT',39230,NULL),(1289,'ST HYMETIERE SUR VALOUSE',39240,NULL),(1290,'CHENE SEC',39230,NULL),(1291,'CIZE',39300,NULL),(1292,'CLAIRVAUX LES LACS',39130,NULL),(1293,'CLUCY',39110,NULL),(1294,'COGNA',39130,NULL),(1295,'COISERETTE',39200,NULL),(1296,'CONDES',39240,NULL),(1297,'COURLAOUX',39570,NULL),(1298,'COUSANCE',39190,NULL),(1299,'COYRIERE',39200,NULL),(1300,'HAUTEROCHE',39570,NULL),(1301,'CUVIER',39250,NULL),(1302,'DENEZIERES',39130,NULL),(1303,'DESNES',39140,NULL),(1304,'LES DEUX FAYS',39230,NULL),(1305,'DOLE',39100,NULL),(1306,'DOLE',39100,NULL),(1307,'DOYE',39250,NULL),(1308,'VAL D EPY',39320,NULL),(1309,'ETIVAL',39130,NULL),(1310,'LA FERTE',39600,NULL),(1311,'LA FRASNEE',39130,NULL),(1312,'GERAISE',39110,NULL),(1313,'GEVINGEY',39570,NULL),(1314,'GRANDE RIVIERE CHATEAU',39150,NULL),(1315,'GRANDE RIVIERE CHATEAU',39150,NULL),(1316,'LES HAYS',39120,NULL),(1317,'IVORY',39110,NULL),(1318,'LAC DES ROUGES TRUITES',39150,NULL),(1319,'LADOYE SUR SEILLE',39210,NULL),(1320,'LAVANCIA EPERCY',1590,NULL),(1321,'LAVANS LES DOLE',39700,NULL),(1322,'LAVANS LES ST CLAUDE',39170,NULL),(1323,'LECT',39260,NULL),(1324,'VALZIN EN PETITE MONTAGNE',39240,NULL),(1325,'LEMUY',39110,NULL),(1326,'LOISIA',39320,NULL),(1327,'LONGCOCHON',39250,NULL),(1328,'LONS LE SAUNIER',39000,NULL),(1329,'LOULLE',39300,NULL),(1330,'MALANGE',39700,NULL),(1331,'MAYNAL',39190,NULL),(1332,'MENOTEY',39290,NULL),(1333,'MESNAY',39600,NULL),(1334,'MESSIA SUR SORNE',39570,NULL),(1335,'MEUSSIA',39260,NULL),(1336,'MIERY',39800,NULL),(1337,'MIGNOVILLARD',39250,NULL),(1338,'MOIRON',39570,NULL),(1339,'CHASSAL MOLINGES',39360,NULL),(1340,'MONTMARLON',39110,NULL),(1341,'MONTMIREY LE CHATEAU',39290,NULL),(1342,'MONTMOROT',39570,NULL),(1343,'HAUTS DE BIENNE',39400,NULL),(1344,'MOUTOUX',39300,NULL),(1345,'LES TROIS CHATEAUX',39160,NULL),(1346,'OUNANS',39380,NULL),(1347,'LE PASQUIER',39300,NULL),(1348,'PICARREAU',39800,NULL),(1349,'PONT D HERY',39110,NULL),(1350,'PORT LESNEY',39330,NULL),(1351,'PREMANON',39220,NULL),(1352,'PRETIN',39110,NULL),(1353,'RAHON',39120,NULL),(1354,'LES REPOTS',39140,NULL),(1355,'LES ROUSSES',39400,NULL),(1356,'ST CLAUDE',39200,NULL),(1357,'ST CYR MONTMALIN',39600,NULL),(1358,'VAL SURAN',39320,NULL),(1359,'ST LOUP',39120,NULL),(1360,'ST MAURICE CRILLAT',39130,NULL),(1361,'ST MAURICE CRILLAT',39130,NULL),(1362,'ST THIEBAUD',39110,NULL),(1363,'SANTANS',39380,NULL),(1364,'SYAM',39300,NULL),(1365,'TASSENIERES',39120,NULL),(1366,'TAVAUX',39500,NULL),(1367,'THERVAY',39290,NULL),(1368,'THOIRETTE COISIA',39240,NULL),(1369,'THOIRIA',39130,NULL),(1370,'VANNOZ',39300,NULL),(1371,'VAUX SUR POLIGNY',39800,NULL),(1372,'VERGES',39570,NULL),(1373,'VESCLES',39240,NULL),(1374,'VILLENEUVE SOUS PYMONT',39570,NULL),(1375,'VILLETTE LES ARBOIS',39600,NULL),(1376,'VAL SONNETTE',39190,NULL),(1377,'VRIANGE',39700,NULL),(1378,'AMOU',40330,NULL),(1379,'AUDIGNON',40500,NULL),(1380,'BAIGTS',40380,NULL),(1381,'BAS MAUCO',40500,NULL),(1382,'BASSERCLES',40700,NULL),(1383,'BATS',40320,NULL),(1384,'BENQUET',40280,NULL),(1385,'BEYLONGUE',40370,NULL),(1386,'BISCARROSSE',40600,NULL),(1387,'BONNEGARDE',40330,NULL),(1388,'BOURRIOT BERGONCE',40120,NULL),(1389,'BRETAGNE DE MARSAN',40280,NULL),(1390,'CAMPAGNE',40090,NULL),(1391,'CASTAIGNOS SOUSLENS',40700,NULL),(1392,'CLERMONT',40180,NULL),(1393,'ESCALANS',40310,NULL),(1394,'EUGENIE LES BAINS',40320,NULL),(1395,'GABARRET',40310,NULL),(1396,'GAILLERES',40090,NULL),(1397,'GAUJACQ',40330,NULL),(1398,'GELOUX',40090,NULL),(1399,'GRENADE SUR L ADOUR',40270,NULL),(1400,'HASTINGUES',40300,NULL),(1401,'HERM',40990,NULL),(1402,'HERRE',40310,NULL),(1403,'HEUGAS',40180,NULL),(1404,'LABENNE',40530,NULL),(1405,'LABRIT',40420,NULL),(1406,'LACQUY',40120,NULL),(1407,'LACRABE',40700,NULL),(1408,'LAGLORIEUSE',40090,NULL),(1409,'LAGRANGE',40240,NULL),(1410,'LALUQUE',40465,NULL),(1411,'LESPERON',40260,NULL),(1412,'LEVIGNACQ',40170,NULL),(1413,'LUBBON',40240,NULL),(1414,'RETJONS',40120,NULL),(1415,'MANO',40410,NULL),(1416,'MAURRIN',40270,NULL),(1417,'MAUVEZIN D ARMAGNAC',40240,NULL),(1418,'MEES',40990,NULL),(1419,'MEILHAN',40400,NULL),(1420,'MEZOS',40170,NULL),(1421,'MIMBASTE',40350,NULL),(1422,'MOLIETS ET MAA',40660,NULL),(1423,'MONTSOUE',40500,NULL),(1424,'MORCENX LA NOUVELLE',40110,NULL),(1425,'MORCENX LA NOUVELLE',40110,NULL),(1426,'MUGRON',40250,NULL),(1427,'NARROSSE',40180,NULL),(1428,'ONARD',40380,NULL),(1429,'ONDRES',40440,NULL),(1430,'ONESSE LAHARIE',40110,NULL),(1431,'ORIST',40300,NULL),(1432,'ORX',40230,NULL),(1433,'PARLEBOSCQ',40310,NULL),(1434,'PHILONDENX',40320,NULL),(1435,'PISSOS',40410,NULL),(1436,'POMAREZ',40360,NULL),(1437,'PONTONX SUR L ADOUR',40465,NULL),(1438,'POUDENX',40700,NULL),(1439,'POUILLON',40350,NULL),(1440,'RIVIERE SAAS ET GOURBY',40180,NULL),(1441,'SABRES',40630,NULL),(1442,'ST AUBIN',40250,NULL),(1443,'ST JEAN DE LIER',40380,NULL),(1444,'ST JUSTIN',40240,NULL),(1445,'ST MARTIN D ONEY',40090,NULL),(1446,'ST PANDELON',40180,NULL),(1447,'ST PAUL LES DAX',40990,NULL),(1448,'ST PIERRE DU MONT',40280,NULL),(1449,'SANGUINET',40460,NULL),(1450,'SARRAZIET',40500,NULL),(1451,'SAUBION',40230,NULL),(1452,'SAUGNAC ET CAMBRAN',40180,NULL),(1453,'LE SEN',40420,NULL),(1454,'SOORTS HOSSEGOR',40150,NULL),(1455,'SORE',40430,NULL),(1456,'SOUPROSSE',40250,NULL),(1457,'SOUSTONS',40140,NULL),(1458,'TALLER',40260,NULL),(1459,'TARNOS',40220,NULL),(1460,'TARTAS',40400,NULL),(1461,'TILH',40360,NULL),(1462,'TRENSACQ',40630,NULL),(1463,'UCHACQ ET PARENTIS',40090,NULL),(1464,'VIEUX BOUCAU LES BAINS',40480,NULL),(1465,'YCHOUX',40160,NULL),(1466,'AVARAY',41500,NULL),(1467,'BRIOU',41370,NULL),(1468,'BUSLOUP',41160,NULL),(1469,'CHAMPIGNY EN BEAUCE',41330,NULL),(1470,'LE CONTROIS EN SOLOGNE',41120,NULL),(1471,'COUDDES',41700,NULL),(1472,'COULOMMIERS LA TOUR',41100,NULL),(1473,'DHUIZON',41220,NULL),(1474,'DROUE',41270,NULL),(1475,'FAVEROLLES SUR CHER',41400,NULL),(1476,'FAYE',41100,NULL),(1477,'LAVARDIN',41800,NULL),(1478,'LIGNIERES',41160,NULL),(1479,'LOREUX',41200,NULL),(1480,'MARCILLY EN BEAUCE',41100,NULL),(1481,'MAVES',41500,NULL),(1482,'MENARS',41500,NULL),(1483,'MENNETOU SUR CHER',41320,NULL),(1484,'LES MONTILS',41120,NULL),(1485,'MONTOIRE SUR LE LOIR',41800,NULL),(1486,'MONT PRES CHAMBORD',41250,NULL),(1487,'MONTROUVEAU',41800,NULL);
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `conventions`
--

USE `conventions`;

--
-- Final view structure for view `stagiaireformation`
--

/*!50001 DROP VIEW IF EXISTS `stagiaireformation`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `stagiaireformation` AS select `f`.`idFormation` AS `idFormation`,`f`.`libelleFormation` AS `libelleFormation`,`s`.`idSessionFormation` AS `idSessionFormation`,`s`.`numOffreFormation` AS `numOffreFormation`,`p`.`idPeriode` AS `idPeriode`,`p`.`dateDebutPAE` AS `dateDebutPAE`,`p`.`dateFinPAE` AS `dateFinPAE`,`p`.`dateRapportSuivi` AS `dateRapportSuivi`,`p`.`objectifPAE` AS `objectifPAE`,`pa`.`idParticipation` AS `idParticipation`,`pa`.`dateDebut` AS `dateDebut`,`pa`.`dateFin` AS `dateFin`,`st`.`idStagiaire` AS `idStagiaire`,`st`.`genreStagiaire` AS `genreStagiaire`,`st`.`nomStagiaire` AS `nomStagiaire`,`st`.`prenomStagiaire` AS `prenomStagiaire`,`st`.`numSecuStagiaire` AS `numSecuStagiaire`,`st`.`numBenefStagiaire` AS `numBenefStagiaire`,`st`.`dateNaissanceStagiaire` AS `dateNaissanceStagiaire`,`st`.`emailStagiaire` AS `emailStagiaire` from ((((`formations` `f` join `sessionsformations` `s` on((`f`.`idFormation` = `s`.`idFormation`))) join `periodesstages` `p` on((`s`.`idSessionFormation` = `p`.`idSessionFormation`))) join `participations` `pa` on((`pa`.`idSessionFormation` = `s`.`idSessionFormation`))) join `stagiaires` `st` on((`st`.`idStagiaire` = `pa`.`idStagiaire`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-27 17:15:30
