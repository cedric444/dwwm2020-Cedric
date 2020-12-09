
--
-- Base de données :  `GestionRepresentant`
--
DROP DATABASE IF EXISTS `GestionRepresentant`;
CREATE DATABASE IF NOT EXISTS `GestionRepresentant` DEFAULT CHARACTER SET utf8 ;
USE `GestionRepresentant`;
-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(25) DEFAULT NULL,
  `villeClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(25) DEFAULT NULL,
  `couleurProduit` varchar(25) DEFAULT NULL,
  `poidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `idRepres` int(11) NOT NULL AUTO_INCREMENT,
  `nomRepres` varchar(25) DEFAULT NULL,
  `villeRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idRepres`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `idVente` int(11) NOT NULL AUTO_INCREMENT,
  `idRepres` int(11) DEFAULT NULL,
  `idProduit` int(11) DEFAULT NULL,
  `idClient` int(11) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVente`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE `ventes` ADD FOREIGN KEY (`idClient`) REFERENCES `clients`(`idClient`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`idProduit`) REFERENCES `produits`(`idProduit`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`idRepres`) REFERENCES `representants`(`idRepres`);


DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  idTexte int(11) NOT NULL AUTO_INCREMENT,
  codeTexte varchar(1000) NOT NULL,
  codeLangue varcher(5) NOT NULL,
  texte text NOT NULL,
  PRIMARY KEY (idTexte)
) ENGINE=INNODB DEFAULT CHARSET=utf8;



INSERT INTO REPRESENTANTS (idRepres, nomRepres, villeRepres) VALUES (1, 'Stephane', 'Lyon');
INSERT INTO REPRESENTANTS (idRepres, nomRepres, villeRepres) VALUES (2, 'Benjamin', 'Paris');
INSERT INTO REPRESENTANTS (idRepres, nomRepres, villeRepres) VALUES (3, 'Leonard', 'Lyon');
INSERT INTO REPRESENTANTS (idRepres, nomRepres, villeRepres) VALUES (4, 'Antoine', 'Brest');
INSERT INTO REPRESENTANTS (idRepres, nomRepres, villeRepres) VALUES (5, 'Bruno', 'Bayonne');

INSERT INTO PRODUITS (idProduit, nomProduit, couleurProduit, poidsProduit) VALUES (1, 'Aspirateur', 'Rouge', 3546);
INSERT INTO PRODUITS (idProduit, nomProduit, couleurProduit, poidsProduit) VALUES (2, 'Trottinette', 'Bleu', 1423);
INSERT INTO PRODUITS (idProduit, nomProduit, couleurProduit, poidsProduit) VALUES (3, 'Chaise', 'Blanc', 3827);
INSERT INTO PRODUITS (idProduit, nomProduit, couleurProduit, poidsProduit) VALUES (4, 'Tapis', 'Rouge', 1423);

INSERT INTO CLIENTS (idClient, nomClient, villeClient) VALUES (1, 'Alice', 'Lyon');
INSERT INTO CLIENTS (idClient, nomClient, villeClient) VALUES (2, 'Bruno', 'Lyon');
INSERT INTO CLIENTS (idClient, nomClient, villeClient) VALUES (3, 'Charles', 'Compiègne');
INSERT INTO CLIENTS (idClient, nomClient, villeClient) VALUES (4, 'Denis', 'Montpellier');
INSERT INTO CLIENTS (idClient, nomClient, villeClient) VALUES (5, 'Emile', 'Strasbourg');

INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(1,1,	1,	1,	1);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(2,1,	1,	2,	1);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(3,2,	2,	3,	1);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(4,4,	3,	3,	200);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(5,3,	4,	2,	190);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(6,1,	3,	2,	300);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(7,3,	1,	2,	120);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(8,3,	1,	4,	120);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(9,3,	4,	4,	2);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(10,3,	1,	1,	3);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(11,3,	4,	1,	5);
INSERT	INTO	VENTES	(idVente, idRepres,	idProduit,	idClient,	quantite)	VALUES	(12,3,	1,	3,	1);

INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, bienvenue, FR, bienvenue);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, bienvenue, EN, welcome);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnusernav, FR, utilisateur);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnusernav, EN,user);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnrolenav, FR, role);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnrolenav, EN, role);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnproduitnav, FR, produit);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnproduitnav, EN, product);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnsclientnav, FR, client);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnsclientnav, EN, customer);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnventenav, FR, ventes);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnventenav, EN, sales);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btninscnav, FR, inscription);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btninscnav, EN, register);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnconnectnav, FR, connexion);
INSERT INTO TEXTE (idTexte, codeTexte, codeLangue, texte) VALUES (NULL, btnconnectnav, EN, connection);