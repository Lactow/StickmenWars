-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 25 Août 2016 à 14:50
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stickman`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `stickname` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `dateinscription` datetime NOT NULL,
  `datelastconnection` datetime NOT NULL,
  `isban` tinyint(1) NOT NULL DEFAULT '0',
  `avertissement` int(11) NOT NULL DEFAULT '0',
  `script` varchar(45) DEFAULT NULL,
  `isvalide` tinyint(1) NOT NULL DEFAULT '1',
  `countround` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `account`
--

INSERT INTO `account` (`idaccount`, `mail`, `password`, `stickname`, `name`, `firstname`, `dateinscription`, `datelastconnection`, `isban`, `avertissement`, `script`, `isvalide`, `countround`) VALUES
(1, 'toto@mail.com', 'toto ', 'toto', NULL, NULL, '2016-08-24 00:00:00', '2016-08-25 10:21:16', 0, 2, 'getPos() ', 1, 3),
(2, 'titi@mail.com', 'titi', 'titi', 'albert', NULL, '2016-08-15 00:00:00', '2016-08-24 00:00:00', 1, 3, 'getLaFrite()', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `arena`
--

CREATE TABLE `arena` (
  `idarena` int(11) NOT NULL,
  `idaccountwinner` int(11) NOT NULL,
  `datecreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `arena`
--

INSERT INTO `arena` (`idarena`, `idaccountwinner`, `datecreate`) VALUES
(1, 1, '2016-08-23 00:00:00'),
(2, 2, '2016-08-24 00:00:00'),
(3, 1, '2016-08-24 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `idinformation` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`idinformation`, `title`, `date`, `texte`) VALUES
(1, 'news', '2016-08-09 00:00:00', 'les news du jeux'),
(2, 'promotion', '2016-08-24 00:00:00', 'promotion  sur les potions'),
(3, 'promotion3', '2016-08-25 12:15:25', 'tett'),
(4, 'promotion3', '2016-08-25 12:15:46', 'tett'),
(5, 'promotion3', '2016-08-25 12:15:59', 'tett'),
(6, 'promotion2', '2016-08-25 12:16:27', 'la promo');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `iditem` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type` int(11) NOT NULL,
  `boost` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `item`
--

INSERT INTO `item` (`iditem`, `name`, `type`, `boost`, `price`) VALUES
(1, 'potion', 0, 5, 100),
(2, 'sword', 1, 2, 200);

-- --------------------------------------------------------

--
-- Structure de la table `item_has_stickman`
--

CREATE TABLE `item_has_stickman` (
  `idaccount` int(11) NOT NULL,
  `iditem` int(11) NOT NULL,
  `datebuild` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `item_has_stickman`
--

INSERT INTO `item_has_stickman` (`idaccount`, `iditem`, `datebuild`) VALUES
(1, 1, '2016-08-25 00:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idaccount`);

--
-- Index pour la table `arena`
--
ALTER TABLE `arena`
  ADD PRIMARY KEY (`idarena`,`idaccountwinner`),
  ADD KEY `fk_arena_account1_idx` (`idaccountwinner`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`idinformation`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iditem`);

--
-- Index pour la table `item_has_stickman`
--
ALTER TABLE `item_has_stickman`
  ADD PRIMARY KEY (`idaccount`,`iditem`),
  ADD KEY `fk_item_has_stickman_item1_idx` (`iditem`),
  ADD KEY `fk_item_has_stickman_account1_idx` (`idaccount`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `idaccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `arena`
--
ALTER TABLE `arena`
  MODIFY `idarena` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `idinformation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `arena`
--
ALTER TABLE `arena`
  ADD CONSTRAINT `fk_arena_account1` FOREIGN KEY (`idaccountwinner`) REFERENCES `account` (`idaccount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `item_has_stickman`
--
ALTER TABLE `item_has_stickman`
  ADD CONSTRAINT `fk_item_has_stickman_account1` FOREIGN KEY (`idaccount`) REFERENCES `account` (`idaccount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_item_has_stickman_item1` FOREIGN KEY (`iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
