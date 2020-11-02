-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 nov. 2020 à 13:42
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
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `bienetservice`
--

DROP TABLE IF EXISTS `bienetservice`;
CREATE TABLE IF NOT EXISTS `bienetservice` (
  `id_biens_services` int(11) NOT NULL AUTO_INCREMENT,
  `designation_biens_services` varchar(150) NOT NULL,
  `description_biens_services` longtext NOT NULL,
  PRIMARY KEY (`id_biens_services`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bienetservice`
--

INSERT INTO `bienetservice` (`id_biens_services`, `designation_biens_services`, `description_biens_services`) VALUES
(1, 'jet', 'pantalon'),
(2, 'tissage', 'tissage'),
(322, 'pizza', 'patisserie');

-- --------------------------------------------------------

--
-- Structure de la table `depenses`
--

DROP TABLE IF EXISTS `depenses`;
CREATE TABLE IF NOT EXISTS `depenses` (
  `id_depenses` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `date_depenses` date NOT NULL,
  `id_biens_services` int(11) NOT NULL,
  PRIMARY KEY (`id_depenses`,`id_biens_services`),
  KEY `id_biens_services` (`id_biens_services`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `depenses`
--

INSERT INTO `depenses` (`id_depenses`, `montant`, `date_depenses`, `id_biens_services`) VALUES
(12, 4925, '2020-10-28', 1),
(13, 500000, '2020-11-01', 2),
(14, 7000, '2020-11-01', 322);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `depenses`
--
ALTER TABLE `depenses`
  ADD CONSTRAINT `depenses_ibfk_1` FOREIGN KEY (`id_biens_services`) REFERENCES `bienetservice` (`id_biens_services`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
