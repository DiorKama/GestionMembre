-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 sep. 2021 à 02:00
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espacemembre`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

DROP TABLE IF EXISTS `cotisation`;
CREATE TABLE IF NOT EXISTS `cotisation` (
  `NumCotis` int NOT NULL AUTO_INCREMENT,
  `DateCotis` date NOT NULL,
  `Mois` varchar(50) NOT NULL,
  `Motif` varchar(50) NOT NULL,
  `Montant` int NOT NULL,
  `Matricule` int NOT NULL,
  PRIMARY KEY (`NumCotis`),
  KEY `Matricule` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`NumCotis`, `DateCotis`, `Mois`, `Motif`, `Montant`, `Matricule`) VALUES
(8, '2021-08-06', 'Mars', 'mensualité', 774252425, 5),
(14, '2021-08-13', 'Janvier', 'inscription', 774252575, 5),
(15, '2021-08-12', 'Avril', 'inscription', 214502, 3),
(16, '2021-08-13', 'Janvier', 'inscription', 254000, 5);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `Matricule` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse` varchar(70) NOT NULL,
  `Tel` int NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`Matricule`, `Nom`, `Prenom`, `Adresse`, `Tel`) VALUES
(1, 'kama', 'dior', 'mbour', 772193460),
(2, 'kama', 'dior', 'Gueule tapé', 2222225),
(3, 'kama', 'Aissatou', 'mbour', 763072210),
(4, 'kama', 'Aissatou', 'mbour', 763072210),
(5, 'diouf', 'moussa', 'dakar', 772102525),
(6, 'ka', 'moussa', 'dakar', 775863636);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD CONSTRAINT `cotisation_ibfk_1` FOREIGN KEY (`Matricule`) REFERENCES `membre` (`Matricule`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
