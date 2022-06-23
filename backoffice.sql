-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 juin 2022 à 08:30
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
-- Base de données : `backoffice`
--

-- --------------------------------------------------------

--
-- Structure de la table `.user`
--

DROP TABLE IF EXISTS `.user`;
CREATE TABLE IF NOT EXISTS `.user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `.user`
--

INSERT INTO `.user` (`id`, `pseudo`, `email`, `password`, `isAdmin`) VALUES
(1, 'Titou', 'ttotou@gmail.com', 'blabla', 0),
(2, 'Titou', 'ttotou@gmail.com', 'blabla', 0),
(3, 'bonjour', 'fff', 'ffff', 0),
(4, 'bonjour', 'fff', 'ffff', 0),
(5, 'bonjour', 'fff', 'ffff', 0),
(6, 'bonjour', 'fff', 'ffff', 0),
(7, 'bonjour', 'fff', 'ffff', 0),
(8, 'bonjour', 'fff', 'ffff', 0),
(9, 'bonjour', 'fff', 'ffff', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
