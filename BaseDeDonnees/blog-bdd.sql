-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 fév. 2019 à 21:38
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog-bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `publie` tinyint(4) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `texte`, `date`, `publie`, `idUtilisateur`) VALUES
(59, 'Eugiat erat volutpat ', ' Vestibulum nisi leo, consequat sed est vel, fermentum sollicitudin velit. Pellentesque laoreet sem sit amet erat euismod, ut bibendum enim consequat. Morbi ac placerat dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer fermentum nisi massa, ac ullamcorper justo pretium quis. Curabitur sodales sed diam nec pellentesque. In pretium sapien et nulla convallis, et ullamcorper erat pharetra. Maecenas posuere est feugiat erat volutpat bibendum. Nam posuere, nibh eget lacinia malesuada, quam tellus tempor est, ut dictum leo justo ac tortor. Donec sed urna vel lorem hendrerit hendrerit. Nullam vehicula metus eros, sit amet dapibus lacus blandit pharetra. Etiam a convallis metus. Aliquam bibendum quis libero eget sagittis.', '2019-02-14', 1, 12),
(55, 'Test 3', ' . Aenean ac felis fringilla, aliquam nulla quis, tristique metus. Aenean nisi metus, efficitur sit amet malesuada nec, porttitor et ante. In nunc augue, malesuada ', '2019-01-18', 1, 14),
(56, 'Rhoncus', '  Integer luctus, mauris vitae ullamcorper rhoncus, nisl ligula tempus eros, et consectetur libero enim sit amet neque. Pellentesque eu nibh elementum, fermentum sem ac, fermentum lorem. Sed ut nisl a urna pharetra suscipit. Nunc suscipit eu turpis aliquam suscipit. Morbi laoreet iaculis ante sed tincidunt. Ut massa arcu, sollicitudin sit amet accumsan eu, porttitor quis est. Proin varius aliquet urna, auctor tempor dui vestibulum at. Nullam ut efficitur lectus. Nam rutrum ante eget porttitor.', '2019-01-18', 1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `date` datetime NOT NULL,
  `idArticle` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` text NOT NULL,
  `sid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mdp`, `sid`) VALUES
(14, 'DUPOND', 'Jean', 'jd@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '4821f60bd791a520f5fa02b9785b2aab'),
(13, 'SOHIER', 'Aurelien', 'sohier@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '543012ff48ea7c57c4f404b012cb6025'),
(12, 'PROTIN', 'Ludovic', 'ludovicprotinsen@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '8ba564bf1a5b445644dc52e18cd7ce2f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
