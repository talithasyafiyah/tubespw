-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 04:02 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level` enum('Admin','Operator','Manager','Visitor') CHARACTER SET utf8 NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `token_expiration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `level`, `session_token`, `token_expiration`) VALUES
(32, 'talitha', 'Talitha Syafiyah', 'talithasyafiyah1112@gmail.com', '$2a$12$IMKO8ANSJfIjkqCJKuuya.SvDqQuZKOG19zJOAlIjNOjM.vD72OtW', 'Admin', '61f5b536d708832a2eb4a0e9e4674777', 'December 16, 2021, 21:45 PM'),
(33, 'erli', 'Erli Gurning', 'erli@gmail.com', '$2y$10$AYlGupfMVm1GatqacwufiOhvo9aQZKft4BhOhS/5AVaaUmpsAWoG2', 'Operator', '', '0'),
(34, 'donny', 'Donny Adithya24', 'donny.adithyaciok@gmail.com', '$2y$10$PMNXzgEsKkkhirgBRpvCAe4Gxzm9.TYkCgth/8rSK9.aFMMf2UBLi', 'Manager', '', ''),
(41, 'caesto', 'Caesto Marco', 'caesto@gmail.com', '$2y$10$CQGF7m1Ap7MYsSau2HtDcuf9.CW1LBzkJFDdWMW4b0Mc2mkO25PQ.', 'Visitor', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
