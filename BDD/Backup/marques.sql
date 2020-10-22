-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 oct. 2020 à 08:04
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
-- Base de données : `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`idMarque`, `nomMarque`) VALUES
(1, 'ALFA ROMEO'),
(2, 'AUDI'),
(3, 'BENTLEY '),
(4, 'BMW '),
(5, 'CADILLAC '),
(6, 'CHEVROLET '),
(7, 'CITROEN '),
(8, 'DACIA '),
(9, 'FERRARI '),
(10, 'FIAT '),
(11, 'FORD '),
(12, 'HONDA '),
(13, 'HYUNDAI '),
(14, 'INFINITI '),
(15, 'JAGUAR '),
(16, 'JEEP '),
(17, 'KIA '),
(18, 'LADA '),
(19, 'LAMBORGHINI '),
(20, 'LANCIA '),
(21, 'LAND ROVER '),
(22, 'LEXUS '),
(23, 'MASERATI '),
(24, 'MAZDA '),
(25, 'MERCEDES '),
(26, 'MINI '),
(27, 'MITSUBISHI '),
(28, 'NISSAN '),
(29, 'OPEL '),
(30, 'PEUGEOT '),
(31, 'PORSCHE '),
(32, 'RENAULT '),
(33, 'ROLLS ROYCE '),
(34, 'SEAT '),
(35, 'SKODA '),
(36, 'SMART '),
(37, 'SSANGYONG '),
(38, 'SUBARU '),
(39, 'SUZUKI '),
(40, 'TESLA '),
(41, 'TOYOTA '),
(42, 'VOLKSWAGEN '),
(43, 'VOLVO ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
