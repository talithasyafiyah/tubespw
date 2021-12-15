-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `mdpop`
--

CREATE TABLE `mdpop` (
  `no` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mdpop`
--

INSERT INTO `mdpop` (`no`, `id_barang`, `description`, `company`, `stock`, `price`) VALUES
(1, 501, 'Aqua', 'Danone-AQUA', 25, 'Rp.25.000'),
(2, 502, 'Tepung Segitiga Biru', 'Bogasari', 30, 'Rp.15.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mdpop`
--
ALTER TABLE `mdpop`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mdpop`
--
ALTER TABLE `mdpop`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
