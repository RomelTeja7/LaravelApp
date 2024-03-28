-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2024 at 08:02 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE IF NOT EXISTS `proyectos` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `NombreProyecto` varchar(255) DEFAULT NULL,
  `FuenteFondos` varchar(255) DEFAULT NULL,
  `MontoPlanificado` decimal(10,2) DEFAULT NULL,
  `MontoPatrocinado` decimal(10,2) DEFAULT NULL,
  `MontoFondosPropios` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `proyectos`
--

INSERT INTO `proyectos` (`Id`, `NombreProyecto`, `FuenteFondos`, `MontoPlanificado`, `MontoPatrocinado`, `MontoFondosPropios`) VALUES
(1, 'Proyecto 1', 'Fuente 1', 10000.00, 2445.00, 5000.00),
(2, 'Proyecto 2', 'Fuente 2', 15000.00, 7000.00, 8000.00),
(3, 'Proyecto 3', 'Fuente 3', 20000.00, 10000.00, 10000.00),
(4, 'Proyecto 4', 'Fuente 1', 12000.00, 6000.00, 6000.00),
(5, 'Proyecto 5', 'Fuente 2', 18000.00, 8000.00, 10000.00),
(6, 'Proyecto 6', 'Fuente 3', 22000.00, 11000.00, 11000.00),
(7, 'Proyecto 7', 'Fuente 2', 13000.00, 7000.00, 6000.00),
(8, 'Proyecto 8', 'Fuente 2', 16000.00, 9000.00, 7000.00),
(9, 'Proyecto 9', 'Fuente 3', 23000.00, 12000.00, 11000.00),
(10, 'Proyecto 10', 'Fuente 1', 14000.00, 8000.00, 6000.00),
(11, 'Proyecto 11', 'Fuente 2', 19000.00, 10000.00, 9000.00),
(12, 'Proyecto 12', 'Fuente 3', 24000.00, 13000.00, 11000.00),
(21, 'Proyecto 21', '199955', 40000.00, 40000.00, 21244.00),
(14, 'Proyecto 14', 'Fuente 2', 20000.00, 11000.00, 9000.00),
(15, 'Proyecto 15', 'Fuente 3', 25000.00, 14000.00, 11000.00),
(16, 'Proyecto 16', 'Fuente 1', 16000.00, 10000.00, 6000.00),
(17, 'Proyecto 17', 'Fuente 2', 21000.00, 12000.00, 9000.00),
(18, 'Proyecto 18', 'Fuente 3', 26000.00, 15000.00, 11000.00),
(19, 'Proyecto 19', 'Fuente 1', 17000.00, 11000.00, 6000.00),
(20, 'Proyecto 20', 'Fuente 2', 22000.00, 13000.00, 9000.00),
(25, 'Proyecto 23', 'Fuente 2', 40000.00, 2.00, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
