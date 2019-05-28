-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 mai 2019 à 11:41
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
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`) VALUES
(1, 'zolokoulou', 'zolokoulou');

-- --------------------------------------------------------

--
-- Structure de la table `contacte`
--

DROP TABLE IF EXISTS `contacte`;
CREATE TABLE IF NOT EXISTS `contacte` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacte`
--

INSERT INTO `contacte` (`id`, `name`, `email`, `message`, `date`) VALUES
(21, 'salam', 'zolo@gmail.com', 'ggggggggggggggggggggggggggg', '2019-05-24 02:07:17'),
(22, 'mohamedtahar', 'mazizi', 'hello word', '2019-05-28 12:36:57');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id_items` int(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL,
  `catg` varchar(200) NOT NULL,
  `img` blob NOT NULL,
  PRIMARY KEY (`id_items`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id_items`, `title`, `des`, `catg`, `img`) VALUES
(10, 'animation', 'animation', 'HTML5 CSS3', 0x616e696d6174696f6e2e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `panel`
--

DROP TABLE IF EXISTS `panel`;
CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `lien` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panel`
--

INSERT INTO `panel` (`id`, `title`, `lien`, `image`) VALUES
(17, 'animation', 'project/animation/index.html', 'uploads/60797660_835920056791911_328231717271764992_n(1).png');

-- --------------------------------------------------------

--
-- Structure de la table `subc`
--

DROP TABLE IF EXISTS `subc`;
CREATE TABLE IF NOT EXISTS `subc` (
  `id_s` int(6) NOT NULL AUTO_INCREMENT,
  `email_s` varchar(50) NOT NULL,
  PRIMARY KEY (`id_s`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `subc`
--

INSERT INTO `subc` (`id_s`, `email_s`) VALUES
(1, 'tahre1993@gmail.com'),
(2, 'uyso@kjl.com'),
(3, 'ooooooooooooooooooooo@gmail.Com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
