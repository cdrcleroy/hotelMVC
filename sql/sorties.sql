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
-- Table structure for table `sorties`
--

CREATE TABLE `sorties` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sorties`
--

INSERT INTO `sorties` (`id`, `nom`, `description`, `image`, `lien`) VALUES
(1, 'CENTER PARCS', 'LE CENTER PARCS - DOMAINE DU BOIS AUX DAIMS EST À 20 MINUTES', 'tourisme/centerparcs.png', 'https://www.centerparcs.fr/fr-fr/france/fp_BD_vacances-domaine-le-bois-aux-daims'),
(2, 'CHÂTEAU DE SAINT MESMIN', 'LE CHÂTEAU DE SAINT MESMIN EST À 45 MINUTES DE ROUTE DE L\'HÔTEL. CE CHÂTEAU FORT VOUS ACCUEILLE ENTRE VISITES HISTORIQUES ET ANIMATIONS DIVERSES.', 'tourisme/stmesmin.png', 'https://www.chateau-saintmesmin.com/'),
(3, 'FUTUROSCOPE', 'LE FUTUROSCOPE EST UN PARC D\'ATTRACTION TRAVAILLANT LES NOUVELLES TECHNOLOGIES. IL EST SITUÉ À 50 MINUTES DE L\'HÔTEL', 'tourisme/futuroscope.png', 'LE FUTUROSCOPE EST UN PARC D\'ATTRACTION TRAVAILLANT LES NOUVELLES TECHNOLOGIES. IL EST SITUÉ À 50 MINUTES DE L\'HÔTEL'),
(4, 'KARTING VAL D\'ARGENTON', 'LE KARTING D\'ARGENTON-LES-VALLÉES', 'tourisme/kartingloudun.png', 'https://pks-loisirs.fr/'),
(5, 'KARTING FRANCK TALON', 'LE KARTING DE LOUDUN (FRANCK TALON)', 'tourisme/kartingloudun.png', 'https://www.loudun-karting.com/'),
(6, 'MONGOLFIADES', 'NOUS SOMMES À PROXIMITÉ DU CENTRE DES MONGOLFIADES.', 'tourisme/mongolfiade.png', 'http://www.tourisme-pays-thouarsais.fr/evenement/la-montgolfiade-de-thouars/'),
(7, 'PARC DE LA VALLÉE', 'LE PARC DE LA VALLÉE À PROXIMITÉ DE THOUARS, EST UN PARC D\'ATTRACTION OU SE COTTOIENT PISCINE ET MANÉGES EN TOUS GENRES...', 'tourisme/parcdelavallee.png', 'https://parcdelavallee.fr/'),
(8, 'LE PUY DU FOU', 'LE PUY DU FOU EST À 1H DE ROUTE DE L\'HOTEL. CE PARC BASÉ SUR L\'HISTOIRE DES GUERRES DE VENDÉE A REÇU LA DISTINCTION DE MEILLEUR PARC DU MONDE EN 2013 ET 2014.', 'tourisme/puydufou.png', 'https://www.puydufou.com/fr'),
(9, 'THÉÂTRE DE THOUARS', 'LE THÉÂTRE DE THOUARS ACCUEILLE DE NOMBREUX SPECTACLES À DECOUVRIR.', 'tourisme/theatrethouars.png', 'https://www.theatre-thouars.com/index_m.html'),
(10, 'ZOO DE DOUÉ LA FONTAINE', 'LE ZOO DE DOUÉ LA FONTAINE EST SITUÉ À 25 MINUTES.', 'tourisme/zoodoue.png', 'http://www.bioparc-zoo.fr/fr/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sorties`
--
ALTER TABLE `sorties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sorties`
--
ALTER TABLE `sorties`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
