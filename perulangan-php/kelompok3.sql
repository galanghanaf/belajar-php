-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2022 at 04:28 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok3`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_kelompok3`
--

CREATE TABLE `anggota_kelompok3` (
  `npm` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anggota_kelompok3`
--

INSERT INTO `anggota_kelompok3` (`npm`, `nama`, `domisili`) VALUES
(65119134, 'Muhamad Alvin Alzali', 'Bandung'),
(65119151, 'Muhammad Achyar Maulana', 'Cisarua, Bogor'),
(65119153, 'Rohmatullah Sony Wijaya', 'Ciawi, Bogor'),
(65119164, 'Galang Hanafi', 'Gunung Putri, Bogor'),
(65119166, 'Muhammad Farchan Ramdhani', 'Ciomas, Bogor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
