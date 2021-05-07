-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 mai 2021 à 17:03
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `musiques`
--

DROP TABLE IF EXISTS `musiques`;
CREATE TABLE IF NOT EXISTS `musiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `artiste` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `musiques`
--

INSERT INTO `musiques` (`id`, `titre`, `artiste`, `album`, `image`) VALUES
(1, 'DRILL FR 4 ( feat Freeze Corleone ) ', 'Gazo', 'Single', 'fr4.jpg'),
(2, 'TCHIN 2X', 'Gazo', 'DRILL FR ', 'drill.jpg'),
(3, 'A$AP', 'Gazo', 'DRILL FR ', 'drill.jpg'),
(4, 'DRILL FR 5 (feat Hamza)', 'Gazo', 'DRILL FR ', 'drill.jpg'),
(5, 'Parano', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(6, 'Raisons', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(7, 'Loup Noir', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(8, 'Marché noir', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(9, 'Mannschaft ( feat Freeze Corleone ) ', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(10, 'Plus rien a se dire', 'SCH', 'JVLIVS II', 'jvlivs.jpg'),
(11, 'Demain sera meilleur', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(12, 'A coeur ouvert', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(13, 'Certitude', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(14, 'Perdu', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(15, 'Loyal', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(16, 'Ca va aller', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(17, 'Spleen', 'Djadja & Dinaz', 'Spleen', 'spleen.jpg'),
(18, 'Arrivederci', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(19, 'Freestyle Divo', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(20, 'Capo', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(21, 'OOP', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(22, 'La Seleçao ( Feat Jul, Naps ) ', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(23, 'Ivar', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(24, 'Monica', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(25, 'On marquera l\'histoire', 'Alonzo ', 'Capo Dei Capi Vol II & III', 'capo.jpg'),
(26, 'Château noir', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(27, 'Akrapovic', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(28, 'SE', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(29, '2363', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(30, 'Rosé', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(31, 'Pégase', 'Kaaris', 'Chateau Noir', 'chateau.jpg'),
(32, 'Mafia', 'SCH', 'JVLIVS II ', 'jvlivs.jpg'),
(33, 'GP', 'Booba', 'Ultra', 'ultra.jpg'),
(34, 'RST', 'Booba', 'Ultra', 'ultra.jpg'),
(35, 'Bonne Journée ( feat SDM )', 'Booba', 'Ultra', 'ultra.jpg'),
(36, 'Mona Lisa ( feat JSX )', 'Booba', 'Ultra', 'ultra.jpg'),
(37, '5G', 'Booba', 'Ultra', 'ultra.jpg'),
(38, 'VVV (feat Maes)', 'Booba', 'Ultra', 'ultra.jpg'),
(39, 'Ultra', 'Booba', 'Ultra', 'ultra.jpg'),
(40, '31 ( feat Gato )', 'Booba', 'Ultra', 'ultra.jpg'),
(41, 'Dernière fois ( feat Bramsito ) ', 'Booba', 'Ultra', 'ultra.jpg'),
(42, 'Ailleurs ( feat Maes )', 'Timal', 'Caliente', 'caliente.jpg'),
(43, 'Le temps passe', 'Timal', 'Caliente', 'caliente.jpg'),
(44, 'Routine', 'Timal', 'Caliente', 'caliente.jpg'),
(45, 'Copilote', 'Timal', 'Caliente', 'caliente.jpg'),
(46, 'Vida', 'Timal', 'Caliente', 'caliente.jpg'),
(47, 'La maille', 'Timal', 'Caliente', 'caliente.jpg'),
(48, 'Week-end ( feat Leto )', 'Timal', 'Caliente', 'caliente.jpg'),
(49, 'Cavaler', 'Timal', 'Caliente', 'caliente.jpg'),
(50, 'Tu me connais', 'Timal', 'Caliente', 'caliente.jpg'),
(51, 'La 13', 'Timal', 'Caliente', 'caliente.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
