-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 27 oct. 2020 à 09:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotels`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `idChambre` int(11) NOT NULL AUTO_INCREMENT,
  `numeroChambre` int(11) NOT NULL,
  `typeChambre` varchar(50) NOT NULL,
  `capaciteChambre` varchar(50) NOT NULL,
  `idHotel` int(11) NOT NULL,
  PRIMARY KEY (`idChambre`),
  KEY `chambres_hotels_FK` (`idHotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `adresseClient` varchar(50) NOT NULL,
  `villeClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `villeClient`) VALUES
(1, 'DOE', 'John', 'Rue Du General Leclerc', 'Chatenay Malabry'),
(2, 'HOMME', 'Josh', 'Rue Danton', 'Palm Desert'),
(3, 'PAUL', 'Weller', 'Rue Hoche', 'Londres'),
(4, 'WHITE', 'Jack', 'Allee Gustave Eiffel', 'Detroit'),
(5, 'CLAYPOOL', 'Les', 'Rue Jean Pierre Timbaud', 'San Francisco'),
(6, 'SQUIRE', 'Chris', 'Place Paul Vaillant Couturier', 'Londres'),
(7, 'WOOD', 'Ronnie', 'Rue Erevan', 'Londres'),
(8, 'THUNDERS', 'Johnny', 'Rue Du General Leclerc', 'New York'),
(9, 'JEUNEMAITRE', 'Eric', 'Rue Du General Leclerc', 'Chaville'),
(10, 'KARAM', 'Patrick', 'Rue Danton', 'Courbevoie'),
(11, 'RUFET', 'Corinne', 'Rue Hoche', 'Le Plessis Robinson'),
(12, 'SAINT JUST ', 'Wallerand', 'Allee Gustave Eiffel', 'Marnes La Coquette'),
(13, 'SANTINI', 'Jean-Luc', 'Rue Jean Pierre Timbaud', 'Chatenay Malabry'),
(14, 'AIT', 'Eddie', 'Place Paul Vaillant Couturier', 'Le Plessis Robinson'),
(15, 'BARBOTIN', 'Eddie', 'Rue Erevan', 'Chatenay Malabry'),
(16, 'BERESSI', 'Isabelle', 'Rue Du General Leclerc', 'Londres'),
(17, 'CAMARA', 'Lamine', 'Rue Ernest Renan', 'Antony'),
(18, 'CECCONI', 'Frank', 'Rue Georges Marie', 'Chatenay Malabry'),
(19, 'CHEVRON', 'Eric', 'Boulevard Gallieni', 'Suresnes'),
(20, 'CIUNTU', 'Marie-Carole', 'Esplanade Du Belvedere', 'Meudon');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `idHotel` int(11) NOT NULL AUTO_INCREMENT,
  `nomHotel` varchar(50) NOT NULL,
  `categorieHotel` varchar(50) NOT NULL,
  `adresseHotel` varchar(50) NOT NULL,
  `villeHotel` varchar(50) NOT NULL,
  `idStation` int(11) NOT NULL,
  PRIMARY KEY (`idHotel`),
  KEY `hotels_stations_FK` (`idStation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
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
  KEY `reserve_clients0_FK` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stations`
--

DROP TABLE IF EXISTS `stations`;
CREATE TABLE IF NOT EXISTS `stations` (
  `idStation` int(11) NOT NULL AUTO_INCREMENT,
  `nomStation` varchar(50) NOT NULL,
  `altitudeStation` int(11) NOT NULL,
  PRIMARY KEY (`idStation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stations`
--

INSERT INTO `stations` (`idStation`, `nomStation`, `altitudeStation`) VALUES
(1, 'La Montagne', 2500),
(2, 'Le Sud', 200),
(3, 'La Plage', 10),
(4, 'Alpe d Huez', 1860),
(5, 'Areches', 1200),
(6, 'Beaufort', 1200),
(7, 'Aussois', 1500),
(8, 'Avoriaz', 1800);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD CONSTRAINT `chambres_hotels_FK` FOREIGN KEY (`idHotel`) REFERENCES `hotels` (`idHotel`);

--
-- Contraintes pour la table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_stations_FK` FOREIGN KEY (`idStation`) REFERENCES `stations` (`idStation`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_chambres_FK` FOREIGN KEY (`idChambre`) REFERENCES `chambres` (`idChambre`),
  ADD CONSTRAINT `reserve_clients0_FK` FOREIGN KEY (`idClient`) REFERENCES `clients` (`idClient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
