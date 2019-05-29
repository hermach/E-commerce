-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 mai 2019 à 23:49
-- Version du serveur :  5.7.24
-- Version de PHP :  7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'zolokoulou', 'zolo@gmail.com', 'items', 'hello word', '2019-05-28 18:44:55');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_items` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `des` varchar(200) NOT NULL,
  `catg` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `img` blob NOT NULL,
  PRIMARY KEY (`id_items`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_items`, `title`, `des`, `catg`, `price`, `img`) VALUES
(44, 'shoes men ', 'shoes men  shoes men  shoes men  shoes men shoes men shoes men shoes men shoes men shoes men ', 'shoes', '60', 0x73686f6573312e6a7067),
(45, 'JITAI Men\'s Penny ', ' shoes men  shoes men   shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men  shoes men ', 'shoes', '60', 0x73686f6573322e6a7067),
(46, 'Breathable Men Shoes', 'shoes men shoes shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men shoes men men ', 'shoes', '55', 0x73686f6573332e6a7067),
(50, 'pants', 'pants pants pants pants pants pants pants pants pants pants pants pants pants pants pants pants pants pants ', 'pants', '60', 0x70616e74312e6a7067),
(51, 'shirte', 'shirte shirte shirte shirte shirteshirte shirte ', 't-shirts', '45', 0x7368697274312e706e67),
(52, 'pants men', 'pants menpants men pants men pants men pants men', 'pants', '45', 0x70616e74332e6a7067),
(53, 'pants men', 'pants men pants men pants menpants men pants men', 'pants', '50', 0x70616e74342e6a7067),
(54, 't-shirte', 't-shirte t-shirte t-shirte t-shirte', 't-shirts', '40', 0x7368697274322e6a7067),
(55, 't-shirte ', 't-shirte t-shirte t-shirte t-shirtet-shirtet-shirtet-shirtet-shirte', 't-shirts', '60', 0x7368697274332e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(0, 'zolokoulou', 'zolokoulou');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
