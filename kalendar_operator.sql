-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 02:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalendar_operator`
--

CREATE TABLE `kalendar_operator` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalendar_operator`
--

INSERT INTO `kalendar_operator` (`id`, `kegiatan`, `mulai`, `selesai`) VALUES
(3, 'Jadwal 1 tes bisa tes lagi', '2021-12-10', '2021-12-12'),
(5, 'ujianLagi', '2021-12-19', '2021-12-24'),
(11, 'jadwal masuk barang', '2021-12-20', '2021-12-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalendar_operator`
--
ALTER TABLE `kalendar_operator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalendar_operator`
--
ALTER TABLE `kalendar_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
