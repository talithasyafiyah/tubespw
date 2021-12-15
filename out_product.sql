-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 01:09 PM
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
-- Table structure for table `out_product`
--

CREATE TABLE `out_product` (
  `id_keluar` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `tanggal` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_product`
--

INSERT INTO `out_product` (`id_keluar`, `id_barang`, `tanggal`, `keterangan`, `quantity`) VALUES
(1, 701, 'Tue, Nov 23 2021', 'Sabun Mandi', 2),
(2, 702, 'Wed, 24 Nov 2021', 'Minyak Goreng', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `out_product`
--
ALTER TABLE `out_product`
  ADD PRIMARY KEY (`id_keluar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `out_product`
--
ALTER TABLE `out_product`
  MODIFY `id_keluar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
