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
-- Table structure for table `monuments`
--

CREATE TABLE `monuments` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `monuments`
--

INSERT INTO `monuments` (`id`, `nom`, `description`, `image`, `lien`) VALUES
(1, 'ABBAYE DE FONTEVRAUD', 'L\'ABBAYE DE FONTEVRAUD EST SITUÉE À 40 MINUTES DE THOUARS.', 'tourisme/abbayefontevraud.png', 'http://www.fontevraud.fr/'),
(2, 'CHAPELLE JEANNE D\'ARC', 'LA CHAPELLE JEANNE D\'ARC SITUÉE À THOUARS HABRITE ÉGALEMENT DES EXPOSITIONS D\'ARTS.', 'tourisme/chapellejeannedarc.png', 'http://www.ville-thouars.fr/artsplastiques/diffusion/chapelle/chapelle.html'),
(3, 'CHÂTEAU DES DUCS DE LA TRÉMOILLE', 'LE CHÂTEAU DES DUCS DE LA TRÉMOILLE OU CHÂTEAU DE THOUARS EST UNE VISITE INCONTOURNABLE DU PAYS THOUARSAIS.', 'tourisme/chateauducdelatremoille.png', 'http://www.tourisme-deux-sevres.com/votre-sejour/a-voir-a-faire/107206-chateau-des-ducs-de-la-tremoille'),
(4, 'CHÂTEAU D\'OIRON', 'LE CHÂTEAU D\'OIRON SITUÉ À 10 MINUTES DE L\'HOTEL EST UNE REPLIQUE DU CHATEAU DE VERSAILLES. N\'HÉSITEZ PAS À VISITER CE CHATEAU POUR SA CONCEPTION AINSI QUE POUR SES EXPOSITIONS D\'ARTS CONTEMPORAINS.', 'tourisme/chateauoiron.png', 'http://www.chateau-oiron.fr/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monuments`
--
ALTER TABLE `monuments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monuments`
--
ALTER TABLE `monuments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
