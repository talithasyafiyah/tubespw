-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 10:05 AM
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
-- Database: `passreset`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(255) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `session_token` varchar(256) NOT NULL,
  `token_expiration` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `username`, `password`, `email`, `session_token`, `token_expiration`) VALUES
(1, 'caesto', '$2y$10$KMMFEFsztpePLlAlZ/Kj8urMenwmxBlnhtGD5UWEYourh0amFRz6m', 'marcocaesto@gmail.com', '', ''),
(2, 'talitha', 'user102', 'talithasyafiyah1112@gmail.com', '85fc6a3f2b863552640b8849e5911b98', 'November 22, 2021, 20:33 PM'),
(3, 'donny', 'user103', 'donny.adithyaciok@gmail.com', 'e1b9f493a2c9e232009e5ab7bf645d83', 'November 22, 2021, 20:34 PM'),
(4, 'febri', 'user104', 'febrizuladhari12345@gmail.com', '8531f428e447b24de9851e92e6b06770', ''),
(5, 'erli', 'user105', 'erligurning03@gmail.com', 'be87900eb0902ceb2eee57c8ca66e88c', ''),
(6, 'abrar', 'user106', 'rayhanabrar4@gmail.com', '877a78fbb318e89856c621e8b6bbdd55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
