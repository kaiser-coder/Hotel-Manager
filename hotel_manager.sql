-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour hotel-manager
CREATE DATABASE IF NOT EXISTS `hotel-manager` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hotel-manager`;

-- Listage de la structure de la table hotel-manager. bookings
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `client_id` int(2) DEFAULT NULL,
  `room` int(3) DEFAULT NULL,
  `begin` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `duration` int(3) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('prise','en attente','annulee') COLLATE utf8_unicode_ci DEFAULT 'en attente',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table hotel-manager.bookings : ~0 rows (environ)
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` (`id`, `client_id`, `room`, `begin`, `end`, `duration`, `created_at`, `updated_at`, `status`) VALUES
	(1, 1, 245, '2021-04-07', '2021-04-08', 1, '2021-04-06 16:06:42', '2021-04-07 10:44:48', 'en attente');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;

-- Listage de la structure de la table hotel-manager. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) DEFAULT NULL,
  `description` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table hotel-manager.categories : ~6 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `label`, `description`) VALUES
	(1, 'Chambre régulière', 'Il s’agit habituellement de la chambre la plus rudimentaire et la moins coûteuse.'),
	(2, 'Chambre familiale', 'Certains hôtels offrent de grandes chambres familiales avec plus de lits pour accueillir plus de personnes.'),
	(3, 'Suite', 'Aussi appelées «chambres de luxe», les suites sont beaucoup plus grandes que les chambres régulières <br/> et sont comme un petit appartement au sein de l’hôtel.'),
	(4, 'Les chambres communicantes', 'Ces chambres comportent des portes d’entrée individuelles et une porte communicante,<br/> permettant aux clients de passer d’une chambre à l’autre sans emprunter le couloir.'),
	(5, ' Chambres voisines', 'Ces chambres sont séparées par mur, mais ne disposent pas d’une porte communicante.'),
	(6, 'Chambres adjacentes', 'Ces chambres sont proches les unes des autres, par exemple dans le même couloir, sans être côte à côte.');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage de la structure de la table hotel-manager. clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_card` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID_card` (`ID_card`),
  UNIQUE KEY `first_name` (`first_name`),
  UNIQUE KEY `last_name` (`last_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table hotel-manager.clients : ~1 rows (environ)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `first_name`, `last_name`, `gender`, `nationality`, `address`, `phone_number`, `ID_card`, `created_at`, `updated_at`, `status`) VALUES
	(1, 'Brendan', 'Hartmann', NULL, 'fr.', '57136-7940 90800 Reggie Hills', '(535) 308-8025', '36005', '2021-04-05 16:13:55', '2021-04-06 16:39:02', 'active');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Listage de la structure de la table hotel-manager. rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `number` int(4) DEFAULT NULL,
  `category_id` int(2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `available` enum('true','false') COLLATE utf8_unicode_ci DEFAULT 'true',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table hotel-manager.rooms : ~1 rows (environ)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `number`, `category_id`, `created_at`, `updated_at`, `available`) VALUES
	(1, 245, 3, '2021-04-08 16:22:45', '2021-04-08 16:22:45', 'true');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Listage de la structure de la table hotel-manager. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table hotel-manager.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `pass`) VALUES
	(1, 'kaiser-coder', '12345');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
