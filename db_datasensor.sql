-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id_sensor` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `waktu` time NOT NULL DEFAULT current_timestamp(),
  `nitrogen` int(5) NOT NULL,
  `phosfor` int(5) NOT NULL,
  `kalium` int(5) NOT NULL,
  `ph` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`id_sensor`, `tanggal`, `waktu`, `nitrogen`, `phosfor`, `kalium`, `ph`) VALUES
(15, '2024-04-24 00:00:00', '00:00:00', 135, 65, 72, '7.00'),
(16, '2024-04-24 00:00:00', '00:00:00', 130, 75, 70, '7.00'),
(17, '2024-04-24 00:00:00', '00:00:00', 100, 60, 70, '5.20'),
(18, '2024-04-24 00:00:00', '00:00:00', 110, 61, 71, '6.00'),
(19, '2024-04-24 00:00:00', '00:00:00', 110, 61, 71, '6.00'),
(20, '2024-04-25 00:09:41', '00:00:00', 100, 60, 74, '6.00'),
(21, '2024-04-25 00:09:44', '00:00:00', 100, 60, 74, '6.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
