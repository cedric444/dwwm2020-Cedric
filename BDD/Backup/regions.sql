-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 oct. 2020 à 11:49
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
-- Base de données : `regionsdepartements`
--

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nomRegion` varchar(50) NOT NULL,
  `nbDepartements` int(11) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`idRegion`, `nomRegion`, `nbDepartements`) VALUES
(1, 'Auvergne-Rhône-Alpes', 12),
(2, 'Bourgogne-Franche-Comté', 8),
(3, 'Bretagne', 4),
(4, 'Centre-Val de Loire', 6),
(5, 'Corse', 2),
(6, 'Grand-Est', 10),
(7, 'Hauts-de-France', 5),
(8, 'Ile-de-France', 8),
(9, 'Normandie', 5),
(10, 'Nouvelle-Aquitaine', 12),
(11, 'Occitanie', 13),
(12, 'Pays de la Loire', 5),
(13, 'Provence-Alpes-Côte d\'Azur', 6),
(14, 'DOM-TOM', 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
