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
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`id`, `image`, `alt`) VALUES
(1, '55.JPG', 'facade'),
(2, '105.jpg', 'SALON'),
(3, '603.jpg', 'Chambre N°3'),
(4, '612.jpg', 'Chambre Twin'),
(5, '611.jpg', 'Chambre familiale'),
(6, '04.jpg', 'Chambre familiale partie enfant'),
(7, 'DSCN5989.jpg', 'Chambre Bain 5'),
(8, '604.jpg', 'Chambre N°4'),
(9, 'DSCN5990.jpg', 'Salle de bain Ch 5'),
(10, '06.jpg', 'Chambre 15'),
(11, '12.jpg', 'Chambre 11'),
(12, '07.jpg', 'Chambre 7'),
(13, '17.jpg', 'Extérieur'),
(14, 'Petit dejeune.jpg', 'Petit déjeuné'),
(15, 'Ville.jpg', 'Ville de Thouars');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
