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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animations`
--

LOCK TABLES `animations` WRITE;
/*!40000 ALTER TABLE `animations` DISABLE KEYS */;
INSERT INTO `animations` VALUES (1,1,8),(2,2,4),(3,3,3),(4,4,2),(5,5,1),(6,6,5);
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
INSERT INTO `departements` VALUES ('01','Ain',1),('02','Aisne',7),('03','Allier',1),('04','Alpes-de-Haute-Provence',13),('05','Hautes-Alpes',13),('06','Alpes-Maritimes',13),('07','Ardèche',1),('08','Ardennes',6),('09','Ariège',11),('10','Aube',6),('11','Aude',11),('12','Aveyron',11),('13','Bouches-du-Rhône',13),('14','Calvados',9),('15','Cantal',1),('16','Charente',10),('17','Charente-Maritime',10),('18','Cher',4),('19','Corrèze',10),('21','Côte-d\'Or',2),('22','Côtes-d\'Armor',3),('23','Creuse',10),('24','Dordogne',10),('25','Doubs',2),('26','Drôme',1),('27','Eure',9),('28','Eure-et-Loir',4),('29','Finistère',3),('2A','Corse-du-Sud',5),('2B','Haute-Corse ',5),('30','Gard',11),('31','Haute-Garonne',11),('32','Gers',11),('33','Gironde',10),('34','Hérault',11),('35','Ille-et-Vilaine',3),('36','Indre',4),('37','Indre-et-Loire',4),('38','Isère',1),('39','Jura',2),('40','Landes',10),('41','Loir-et-Cher',4),('42','Loire',1),('43','Haute-Loire',1),('44','Loire-Atlantique',12),('45','Loiret',4),('46','Lot',11),('47','Lot-et-Garonne',10),('48','Lozère',11),('49','Maine-et-Loire',12),('50','Manche',9),('51','Marne',6),('52','Haute-Marne',6),('53','Mayenne',12),('54','Meurthe-et-Moselle',6),('55','Meuse',6),('56','Morbihan',3),('57','Moselle',6),('58','Nièvre',2),('59','Nord',7),('60','Oise',7),('61','Orne',9),('62','Pas-de-Calais',7),('63','Puy-de-Dôme',1),('64','Pyrénées-Atlantiques',10),('65','Hautes-Pyrénées',11),('66','Pyrénées-Orientales',11),('67','Bas-Rhin',6),('68','Haut-Rhin',6),('69','Rhône',1),('70','Haute-Saône',2),('71','Saône-et-Loire',2),('72','Sarthe',12),('73','Savoie',1),('74','Haute-Savoie',1),('75','Paris',8),('76','Seine-Maritime',9),('77','Seine-et-Marne',8),('78','Yvelines',8),('79','Deux-Sèvres',10),('80','Somme',7),('81','Tarn',11),('82','Tarn-et-Garonne',11),('83','Var',13),('84','Vaucluse',13),('85','Vendée',12),('86','Vienne',10),('87','Haute-Vienne',10),('88','Vosges',6),('89','Yonne',2),('90','Territoire de Belfort',2),('91','Essonne',8),('92','Hauts-de-Seine',8),('93','Seine-Saint-Denis',8),('94','Val-de-Marne',8),('95','Val-d\'Oise',8),('971','Guadeloupe',14),('972','Martinique',14),('973','Guyane',14),('974','La Réunion',14),('975','Saint-Pierre-et-Miquelon',14),('976','Mayotte',14),('977','Saint-Barthélemy	',14),('978','Saint-Martin	',14),('984','Terres australes et antarctiques françaises',14),('986','Wallis-et-Futuna',14),('987','Polynésie française',14),('988','Nouvelle-Calédonie',14),('989','Clipperton',14);
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
INSERT INTO `evaluations` VALUES (1,'2021-02-15',1,1,2,'il est doué',2),(2,'2021-03-11',2,2,3,'il manque de rigueur',1),(3,'2021-02-09',2,1,2,'il est doué',4),(4,'2021-03-05',3,2,1,'il est ingerable',3),(5,'2021-04-21',1,2,1,'il est nul',1),(6,'2021-02-14',3,1,2,'il est doué',2);
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
  PRIMARY KEY (`idFormation`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formations`
--

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` VALUES (1,'ADMINISTRATEUR D’INFRASTRUCTURES SÉCURISÉES'),(2,'INSTALLATEUR DE RÉSEAUX DE TÉLÉCOMMUNICATIONS'),(3,'CONNAÎTRE ET APPLIQUER LA MÉTHODE 5S'),(4,'AGENT DE FABRICATION D\'ENSEMBLE MÉTALLIQUE'),(5,'CONDUCTEUR D\'INSTALLATION ET DE MACHINES AUTOMATISÉES'),(6,'MÉCANICIEN DE MAINTENANCE AUTOMOBILE'),(7,'PARCOURS CRÉATEURS D\'ENTREPRISE'),(8,'DÉVELOPPEUR WEB ET WEB MOBILE'),(9,'FLUIDES FRIGORIGÈNES : ATTESTATION D’APTITUDE CATÉGORIE I'),(10,'AUTOMATES SIEMENS S7 300 - S7 400 AVEC STEP7 : ASSURER LA MAINTENANCE RÉSEAU PARTIE 1'),(11,'FORMATION PRÉPARATOIRE AUX FORMATIONS DU TERTIAIRE NIVEAU V');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libelleshoraires`
--

LOCK TABLES `libelleshoraires` WRITE;
/*!40000 ALTER TABLE `libelleshoraires` DISABLE KEYS */;
INSERT INTO `libelleshoraires` VALUES (1,1,'horaireDebutJour1'),(2,2,'horaireDebutJour2'),(3,3,'horaireDebutJour3'),(4,4,'horaireDebutJour4'),(5,5,'horaireDebutJour5'),(6,6,'horaireDebutJour6'),(7,7,'horaireFinJour1'),(8,8,'horaireFinJour2'),(9,9,'horaireFinJour3'),(10,10,'horaireFinJour4'),(11,11,'horaireFinJour5'),(12,12,'horaireFinJour6'),(13,13,'horaireDebutDej1'),(14,14,'horaireDebutDej2'),(15,15,'horaireDebutDej3'),(16,16,'horaireDebutDej4'),(17,17,'horaireDebutDej5'),(18,18,'horaireDebutDej6'),(19,19,'horaireFinDej1'),(20,20,'horaireFinDej2'),(21,21,'horaireFinDej3'),(22,22,'horaireFinDej4'),(23,23,'horaireFinDej5'),(24,24,'horaireFinDej6');
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
  `idSessionFormation` int(11) NOT NULL,
  `idStagiaire` int(11) NOT NULL,
  PRIMARY KEY (`idParticipation`),
  KEY `FK_Participation_SessionFormation` (`idSessionFormation`),
  KEY `FK_Participation_Stagiaires` (`idStagiaire`),
  CONSTRAINT `FK_Participation_SessionFormation` FOREIGN KEY (`idSessionFormation`) REFERENCES `sessionsformations` (`idSessionFormation`),
  CONSTRAINT `FK_Participation_Stagiaires` FOREIGN KEY (`idStagiaire`) REFERENCES `stagiaires` (`idStagiaire`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participations`
--

LOCK TABLES `participations` WRITE;
/*!40000 ALTER TABLE `participations` DISABLE KEYS */;
INSERT INTO `participations` VALUES (1,5,23),(2,6,20),(3,4,27),(4,9,27),(5,3,10),(6,8,23),(7,2,7),(8,7,19),(9,2,17),(10,4,24),(11,1,25),(12,4,16),(13,4,18),(14,5,14),(15,8,20),(16,9,3),(17,3,7),(18,5,7),(19,3,4),(20,8,20),(21,3,21),(22,5,6),(23,7,11),(24,8,15),(25,7,26),(26,7,6),(27,6,2),(28,3,4),(29,5,8),(30,5,25),(31,4,5),(32,1,7),(33,8,22),(34,6,1),(35,2,10),(36,8,2),(37,7,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodesstages`
--

LOCK TABLES `periodesstages` WRITE;
/*!40000 ALTER TABLE `periodesstages` DISABLE KEYS */;
INSERT INTO `periodesstages` VALUES (1,5,'2021-05-11','2021-05-15','2021-07-30','sdvujgdhjsdvsdvsdv'),(2,5,'2021-05-11','2021-05-25','2021-06-25','sdvsduyjghjvsdvsdv'),(3,1,'2021-07-11','2021-08-01','2021-08-30','sdvstyuedrgfhdvsdvsdv'),(4,21,'2021-02-11','2021-02-15','2021-02-25','sdvsdfghezgwdfdvsdvsdv'),(5,21,'2021-05-11','2021-12-01','2021-12-30','sdvxfgyuytrjsdvsdvaaaaasdv'),(6,21,'2021-05-11','2022-01-02','2022-01-28','sdvwxfuyfgusdvsdvsdezrzerv'),(7,8,'2022-05-11','2022-12-01','2022-12-30','sdvxfgyuytrjsdvsqazzartedvsdv'),(8,21,'2022-05-11','2022-01-02','2022-01-28','sdvwxfuqsdqsdqsdyfgusdvsdvsdv');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Auvergne-Rhône-Alpes',12),(2,'Bourgogne-Franche-Comté',8),(3,'Bretagne',4),(4,'Centre-Val de Loire',6),(5,'Corse',2),(6,'Grand-Est',10),(7,'Hauts-de-France',5),(8,'Ile-de-France',8),(9,'Normandie',5),(10,'Nouvelle-Aquitaine',12),(11,'Occitanie',13),(12,'Pays de la Loire',5),(13,'Provence-Alpes-Côte d\'Azur',6),(14,'DOM-TOM',12);
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessionsformations`
--

LOCK TABLES `sessionsformations` WRITE;
/*!40000 ALTER TABLE `sessionsformations` DISABLE KEYS */;
INSERT INTO `sessionsformations` VALUES (1,2147483647,5,'0000-00-00','0000-00-00'),(2,2147483647,1,'0000-00-00','0000-00-00'),(3,2147483647,7,'0000-00-00','0000-00-00'),(4,2147483647,2,'0000-00-00','0000-00-00'),(5,2147483647,6,'0000-00-00','0000-00-00'),(6,2147483647,9,'0000-00-00','0000-00-00'),(7,2147483647,8,'0000-00-00','0000-00-00'),(8,2147483647,3,'0000-00-00','0000-00-00'),(9,2147483647,1,'0000-00-00','0000-00-00'),(10,2147483647,1,'0000-00-00','0000-00-00'),(11,2147483647,1,'0000-00-00','0000-00-00'),(12,2147483647,8,'0000-00-00','0000-00-00'),(13,2147483647,8,'0000-00-00','0000-00-00'),(14,2147483647,5,'0000-00-00','0000-00-00'),(15,2147483647,1,'0000-00-00','0000-00-00'),(16,2147483647,5,'0000-00-00','0000-00-00'),(17,2147483647,6,'0000-00-00','0000-00-00'),(18,2147483647,4,'0000-00-00','0000-00-00'),(19,2147483647,9,'0000-00-00','0000-00-00'),(20,2147483647,6,'0000-00-00','0000-00-00'),(21,2147483647,3,'0000-00-00','0000-00-00'),(22,2147483647,9,'0000-00-00','0000-00-00'),(23,2147483647,5,'0000-00-00','0000-00-00'),(24,2147483647,1,'0000-00-00','0000-00-00'),(25,2147483647,4,'0000-00-00','0000-00-00'),(26,2147483647,9,'0000-00-00','0000-00-00'),(27,2147483647,5,'0000-00-00','0000-00-00'),(28,2147483647,2,'0000-00-00','0000-00-00'),(29,2147483647,8,'0000-00-00','0000-00-00'),(30,2147483647,3,'0000-00-00','0000-00-00');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stages`
--

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` VALUES (1,1,'2020-03-02','Hersch Monnery','Entreprise',1,'Quotidien','Vehicule de l entreprise',0,NULL,1,1,'2020-12-01','Streamlined maximized task-force','Secured demand-driven open system','Versatile bottom-line projection','2020-11-12','2020-08-13',3,6,1),(2,2,'2020-06-02','Lenard Mengue','Entreprise',0,'Quotidien','Vehicule de l entreprise',1,'attestation formation reglementaire',0,1,'2020-07-13','Assimilated upward-trending contingency','Exclusive fresh-thinking throughput','Multi-channelled explicit website','2020-07-02','2020-11-25',4,2,2),(3,3,'2020-02-14','Esdras Bault','Entreprise',0,'Quotidien','Transport en commun',1,'attestation formation reglementaire',0,0,'2020-06-26','Implemented intangible paradigm','Customizable disintermediate website','Monitored eco-centric attitude','2020-02-19','2020-03-30',1,1,2),(4,4,'2020-06-07','Rube Sholem','Entreprise',1,'Occasionnels','vehicule personnel du stagiaire',0,NULL,0,1,'2020-08-30','Public-key responsive productivity','Centralized attitude-oriented database','Synergized systemic help-desk','2020-07-25','2020-07-19',2,4,3),(5,5,'2020-09-01','Becky Arpur','Entreprise',1,'Un fois par mois','Vehicule de l entreprise',0,NULL,1,1,'2020-07-20','De-engineered neutral solution','Reactive upward-trending algorithm','Reduced uniform knowledge base','2020-10-23','2020-03-20',1,3,3);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `stagiaireformation`
--

DROP TABLE IF EXISTS `stagiaireformation`;
