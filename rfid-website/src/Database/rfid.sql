-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 12 mai 2023 à 14:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rfid`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_account` int NOT NULL,
  `matricule` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_bin NOT NULL,
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_account`, `matricule`, `email`, `password`) VALUES
(7, 'GAM-620', 'alexis.giromagny@ynov.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(0, 'RGO-712', 'gregory.balatre@ynov.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(5, 'CAL-103', 'quentin.boitel@ynov.com', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'),
(6, 'SKV-855', 'thomas.quadro@ynov.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `last_name` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `birth_date` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `digicode` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `rfid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `accreditation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'employee',
  PRIMARY KEY (`id_employee`),
  UNIQUE KEY `matricule` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id_employee`, `matricule`, `first_name`, `last_name`, `birth_date`, `digicode`, `rfid`, `accreditation`) VALUES
(1, 'RGO-712', 'gregory', 'balatre', '2003-07-30', '8520', '1234', 'administrateur'),
(5, 'CAL-103', 'Quentin', 'Boitel', '2002-08-23', '1234', '1234', 'administrateur'),
(6, 'SKV-855', 'Thomas', 'Quadro', '2003-09-11', '1111', '1234', 'administrateur'),
(7, 'GAM-620', 'Alexis', 'Giromagny', '2000-03-26', '1234', '1234', 'administrateur'),
(8, 'BTP-224', 'Axel', 'Sevenet', '1992-10-10', '1234', '1234', 'employe'),
(9, 'PDC-666', 'Nolan', 'Zelphati', '1999-12-16', '1234', '1234', 'employe'),
(10, 'CAN-222', 'David', 'Palermo', '1975-04-07', '1234', '1234', 'employe');

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id_log` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `action` text COLLATE utf8mb4_bin NOT NULL,
  `object` text COLLATE utf8mb4_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`id_log`, `matricule`, `action`, `object`, `date`) VALUES
(66, 'RGO-712', 's\'est connecté', 'site web', '2023-04-20 17:08:59'),
(67, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-20 17:09:04'),
(68, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-04-20 17:09:07'),
(69, 'RGO-712', 's\'est déconnecté', 'site web', '2023-04-20 17:09:10'),
(70, 'user', 'a echoue connexion', 'site web', '2023-04-20 17:09:24'),
(71, 'RGO-712', 's\'est connecté', 'site web', '2023-04-20 17:09:41'),
(74, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-20 17:50:35'),
(75, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-04-20 17:50:38'),
(76, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-20 17:53:45'),
(77, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-04-20 17:53:47'),
(78, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-20 17:55:00'),
(79, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-04-20 17:55:02'),
(80, 'RGO-712', 'a crée employe', 'JYT-194', '2023-04-20 18:02:25'),
(81, 'RGO-712', 'a crée employe', 'TJZ-495', '2023-04-20 18:04:13'),
(82, 'RGO-712', 's\'est connecté', 'site web', '2023-04-20 19:48:00'),
(83, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-20 19:51:04'),
(84, 'RGO-712', 'a crée employe', 'BIP-847', '2023-04-20 19:52:20'),
(85, 'RGO-712', 'a crée employe', 'TSZ-703', '2023-04-20 19:53:31'),
(86, 'RGO-712', 'RGO-712 a supprimer', 'TSZ-703', '2023-04-20 19:54:30'),
(87, 'RGO-712', 's\'est connecté', 'site web', '2023-04-28 21:05:36'),
(88, 'RGO-712', 's\'est connecté', 'dashboard', '2023-04-28 21:06:29'),
(89, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 06:31:47'),
(90, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:32:07'),
(91, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:32:17'),
(92, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:32:18'),
(93, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-05-10 06:32:31'),
(94, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:32:50'),
(95, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:34:13'),
(96, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 06:47:20'),
(97, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:47:22'),
(98, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:51:14'),
(99, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 06:52:06'),
(100, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-05-10 06:52:11'),
(101, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 07:27:22'),
(102, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 07:30:27'),
(103, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 07:30:46'),
(104, 'RGO-712', 's\'est déconnecté', 'dashboard', '2023-05-10 07:32:20'),
(105, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 07:34:29'),
(106, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 07:36:32'),
(107, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 08:38:14'),
(108, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 08:42:02'),
(109, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 08:44:42'),
(110, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 08:44:44'),
(111, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 09:39:19'),
(112, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 09:39:22'),
(113, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 09:45:38'),
(114, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 10:12:20'),
(115, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 11:37:11'),
(116, 'user', 'a echoue connexion', 'site web', '2023-05-10 12:48:44'),
(117, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 12:48:50'),
(118, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 12:48:55'),
(119, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 12:51:11'),
(120, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 12:51:13'),
(121, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 12:52:15'),
(122, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 12:52:16'),
(123, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 12:53:15'),
(124, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 12:53:17'),
(125, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 12:57:14'),
(126, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 12:57:17'),
(127, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 13:13:02'),
(128, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 13:13:04'),
(129, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 13:48:45'),
(130, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 14:01:58'),
(131, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 14:06:01'),
(132, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 14:13:05'),
(133, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 14:22:40'),
(134, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 14:22:42'),
(135, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 15:28:55'),
(136, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 15:28:58'),
(137, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 15:29:04'),
(138, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 15:29:32'),
(139, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 15:33:14'),
(140, 'RGO-712', 's\'est connecté', 'site web', '2023-05-10 19:38:46'),
(141, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 19:38:49'),
(142, 'RGO-712', 's\'est connecté', 'dashboard', '2023-05-10 19:41:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
