-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2023 at 01:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tarifs`
--

CREATE TABLE `tarifs` (
  `id` int NOT NULL,
  `item` varchar(255) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tarifs`
--

INSERT INTO `tarifs` (`id`, `item`, `prix`) VALUES
(0, 'Chambre 1 personne (avec douche)', 61.2),
(1, 'Chambre 1 personne (avec baignoire)', 64),
(2, 'Chambre 2 personnes (avec douche)', 65),
(3, 'Chambre 2 personnes (avec baignoire)', 66),
(4, 'Chambre Twin (2 lits simples)', 66),
(5, 'Chambre triple (1 lit de 160 - 1 lit de 90)', 78),
(6, 'Chambre communicante (1 lit de 160 et 2 lits de 90) pour 3 personnes', 84),
(7, 'Chambre communicante (1 lit de 160 et 2 lits de 90) pour 4 personnes', 88),
(8, 'Suite familiale (2 salles d\'eau) pour 2 personnes', 70),
(9, 'Suite familiale (2 salles d\'eau) pour 3 personnes', 86),
(10, 'Suite familiale (2 salles d\'eau) pour 4 personnes', 90),
(11, 'Petit dejeuner buffet', 8.5),
(12, 'Supplement service en chambre', 1.4),
(13, 'Soiree etape', 78),
(14, 'Menu (du lundi au jeudi)', 15),
(15, 'Animaux (sur demande)', 5),
(16, 'Taxe de séjour', 0.7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
