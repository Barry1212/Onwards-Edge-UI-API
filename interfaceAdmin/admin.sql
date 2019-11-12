-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 oct. 2019 à 14:27
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_reference` varchar(50) COLLATE utf8_bin NOT NULL,
  `product_reference` varchar(50) COLLATE utf8_bin NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `status` enum('active','delete') COLLATE utf8_bin NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `pack_reference`, `product_reference`, `product_quantity`, `status`) VALUES
(1, 'hey', 'ytityt', 5, 'delete'),
(2, 'couycou', 'yuyuy', 5882, 'delete'),
(3, 'tyjutju', 'yhjutyhjuyt', 1, 'delete'),
(4, 'grt', 'rrr', 88, 'delete'),
(5, 'hey', 'ee', 7, 'delete'),
(6, 'blabla', 'tryur', 2000, 'delete'),
(7, 'hey', 'oiki', 5585, 'delete'),
(8, 'hey', '2', 88, 'delete'),
(9, 'hey', '2', 88, 'delete'),
(10, 'hey', '2', 88, 'delete'),
(11, 'hey', '2', 88, 'delete'),
(12, 'hey', 'ref', 888, 'delete'),
(13, 'hey', 'ref', 21, 'delete'),
(14, 'tutyty', 'ytityt', 5585, 'delete'),
(15, '1', '2', 88, 'delete'),
(16, 'blabla', '2', 88, 'delete'),
(17, 'blabla', '2', 88, 'delete'),
(18, 'blabla', '2', 88, 'delete'),
(19, 'blabla', '2', 88, 'delete'),
(20, 'blabla', '2', 88, 'delete'),
(21, 'kk', 'yy', 44, 'delete'),
(22, 'tyry', 'tyht', 55554, 'delete'),
(23, 'tyry', 'tyht', 55554, 'delete'),
(24, 'tyry', 'tyht', 55554, 'delete'),
(25, '', '', 0, 'delete'),
(26, '', '', 0, 'delete'),
(27, 'gxfgxdf', 'cfxwfxwsfws', 0, 'delete'),
(28, 'blabla', 'jhk', 8, 'delete'),
(29, 'blabla', 'jhk', 8, 'delete'),
(30, 'blabla', 'jhk', 8, 'delete'),
(31, 'blabla', 'jhk', 8, 'delete'),
(32, 'blabla', 'jhk', 8, 'delete'),
(33, 'blabla', 'jhk', 8, 'delete'),
(34, 'blabla', 'jhk', 8, 'delete'),
(35, 'blabla', 'jhk', 8, 'delete'),
(36, 'gghgf', 'gh', 4, 'delete'),
(37, 'Je penses', 'Donc je suis', 7, 'active'),
(38, ',bnb,b,', ',bb,b,', 656, 'delete'),
(39, 'kkji', 'oipi', 7, 'delete'),
(40, 'rtgrtg', 'rre', 4, 'delete'),
(41, 'tetr', 'rtge', 65, 'delete'),
(42, 'tetr', 'rtge', 65, 'delete'),
(43, 'UnReNouveau', 'Enr', 58, 'active'),
(44, 'nvv', 'nvnvnv', 100, 'delete'),
(45, 'blabla', 'ref', 89, 'active');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'test', 'test1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
