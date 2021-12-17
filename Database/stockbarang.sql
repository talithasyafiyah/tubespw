-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 06:05 AM
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
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_barang` varchar(200) NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `id_barang`, `tanggal`, `nama_barang`, `supplier`, `quantity`) VALUES
(1, 101, '2021-11-27 16:35:21', ' minyak goreng bimoli', 'PT Salim Ivomas Pratama Tbk', 30),
(2, 102, '2021-11-27 16:35:21', 'minyak goreng sanco', 'PT MIKIE OLEO NABATI', 20),
(3, 103, '2021-11-27 16:39:55', 'minyak goreng sania', 'PT PUTRA MAS DUA SAUDARA', 15),
(4, 104, '2021-11-27 16:39:55', 'minyak goreng filma ', 'PT SINAR MAS AGRO', 20),
(5, 105, '2021-11-28 03:25:46', 'minyak goreng fortune', 'PT PUTRA MAS DUA SAUDARA', 30),
(6, 106, '2021-11-28 03:25:46', 'minyak goreng tropical', 'PT. Bina Karya Prima', 35),
(7, 201, '2021-11-28 03:32:08', 'tepung terigu segitiga biru', 'PT Indofood Sukses Makmur Tbk', 50);

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `no` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `produk` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`no`, `id_barang`, `produk`, `kategori`, `perusahaan`, `stok`, `harga`, `gambar`) VALUES
(1, 101, 'Bimoli', 'Minyak Goreng', 'PT. Salim Ivomas Pratama Tbk', 15, 'Rp 36.000', 'bimoli.jpg'),
(2, 102, 'Sanco', 'Minyak Goreng', 'PT. Mikie Oleo Nabati', 20, 'Rp 39.000', 'sunco.jpg'),
(3, 103, 'Sania', 'Minyak Goreng', 'PT. Putra Mas Dua Saudara', 10, 'Rp 37.000', 'sania.jpg'),
(4, 104, 'Filma', 'Minyak Goreng', 'PT. Sinar Mas Agro', 18, 'Rp 30.000', 'filma.jpg'),
(5, 105, 'Fortune', 'Minyak Goreng', 'PT. Putra Mas Dua Saudara', 21, 'Rp 39.000', 'fortune.jpg'),
(6, 106, 'Tropical', 'Minyak Goreng', 'PT. Bina Karya Prima', 18, 'Rp 37.000', 'tropical.jpg'),
(7, 201, 'Segitiga Biru', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 39, 'Rp 12.500', 'segitiga biru.jpg'),
(8, 202, 'Cakra Kembar', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 20, 'Rp 10.500', 'cakra kembar.jpg'),
(9, 203, 'Lencana Merah', 'Tepung', 'PT. Indofood Sukses Makmur Tbk', 14, 'Rp 8.000', 'lencana merah.jpg'),
(10, 204, 'Tulip', 'Tepung', 'PT. Wilmar Nabati Indonesia', 29, 'Rp 9.000', 'tulip.jpg'),
(11, 205, 'Golden Eagle\r\n', 'Tepung', 'PT. Bungasari Flour Mills Indonesia', 10, 'Rp 11.000', 'golden eagle.jpg'),
(12, 301, 'Lemonilo', 'Mie', 'PT. Lemonilo Indonesia Sehat', 34, 'Rp 7.200', 'lemonilo.jpg'),
(13, 302, 'Super Mie', 'Mie', 'PT. Indofood Sukses Makmur Tbk', 11, 'Rp 3.500', 'supermie.jpg'),
(14, 303, 'Indomie', 'Mie', 'PT. Indofood Sukses Makmur Tbk.', 5, 'Rp 3.000', 'indomie.jpg'),
(15, 304, 'Mie Sedap', 'Mie', 'PT. Wings food', 36, 'Rp 2.500', 'mie sedap.jpg'),
(16, 305, 'Inter Mie', 'Mie', 'PT. Indofood CBP Sukses Makmur Tbk', 19, 'Rp 1.000', 'inter mie.jpg'),
(17, 401, 'Telur Ayam', 'Telur', 'Pondok Ayam Suka Maju Company', 54, 'Rp 1.500', 'telur.jpg'),
(18, 501, 'Hilo', 'Susu', 'PT. Nutrifood Indonesia', 12, 'Rp 73.500', 'hilo.jpg'),
(19, 502, 'Dancow', 'Susu', 'PT. Nestle Indonesia', 15, 'Rp 75.000', 'dancow.jpg'),
(20, 503, 'Enfagrow', 'Susu', 'PT. Mead Johnson Indonesia', 8, 'Rp 246.000', 'enfagrow.jpg'),
(21, 504, 'Anlene', 'Susu', 'PT. Fonterra Brands Indonesia', 11, 'Rp 67.000', 'anlene.jpg'),
(22, 505, 'Milo', 'Susu', 'PT. Nestle Indonesia', 29, 'Rp 79.000', 'milo.jpg'),
(23, 506, 'Frisian Flag', 'Susu', 'PT. Frisian Flag Indonesia', 26, 'Rp 20.000', 'frision flag.jpg'),
(24, 601, 'Aqua', 'Air Mineral', 'PT. Aqua Golden Mississippi', 42, 'Rp 5.000', 'aqua.jpg'),
(25, 602, 'Le Minerale', 'Air Mineral', 'PT. Tirta Fresindo Jaya', 16, 'Rp 3.000', 'leminerale.jpg'),
(26, 603, 'Vit', 'Air Mineral', 'PT. Tirta Investama', 9, 'Rp 4.000', 'vit.jpg'),
(27, 604, 'Evian', 'Air Mineral', 'PT. Danone', 18, 'Rp 11.000', 'evian.jpg'),
(28, 605, 'Cleo', 'Air Mineral', 'PT. Sariguna Primatirta Tbk', 20, 'Rp 2.500', 'cleo.jpg'),
(29, 701, 'Rinso', 'Detergen', 'PT. Unilever Indonesia', 23, 'Rp 17.000', 'rinso.jpg'),
(30, 702, 'Daia', 'Detergen', 'PT. Wings Surya ', 11, 'Rp 18.000', 'daia.jpg'),
(31, 703, 'Attack', 'Detergen', 'PT. Kao Indonesia', 17, 'Rp 18.000', 'attack.jpg'),
(32, 704, 'Boom', 'Detergen', 'PT.  Cipta Segar Harum', 7, 'Rp 5.000', 'boom.jpg'),
(33, 705, 'Jaz 1', 'Detergen', 'PT. Kao indonesia', 23, 'Rp 16.500', 'jaz 1.jpg'),
(34, 706, 'Smart', 'Detergen', 'PT. Wings Surya', 3, 'Rp 23.700', 'smart.jpg'),
(35, 801, 'Gas Elpiji', 'Gas', 'PT. Industri Telekomunikasi Indonesia', 4, 'Rp 300.000', 'gas lpg.jpg'),
(36, 901, 'Nuvo', 'Sabun', 'PT. Jaya Utama', 30, 'Rp 4.000', 'nuvo.jfif'),
(37, 902, 'Lux', 'Sabun', 'PT. Unilever Indonesia', 8, 'Rp 4.000', 'lux.jpg'),
(38, 903, 'Citra', 'Sabun', 'PT. Unilever Indonesia', 14, 'Rp 2.500', 'citra.jpg'),
(39, 904, 'Giv', 'Sabun', 'PT. Wings Surya', 17, 'Rp 2.500', 'giv.jpg'),
(40, 905, 'Dettol', 'Sabun', 'PT. Reckitt Benckiser', 19, 'Rp 5.000', 'dettol.jpg'),
(41, 906, 'Lifebuoy', 'Sabun', 'PT. Unilever', 27, 'Rp 5.000', 'lifebuoy.jpg'),
(42, 1001, 'Sunsilk', 'Shampoo', 'PT. Unilever Indonesia', 9, 'Rp 31.500', 'sunsilk.jpg'),
(43, 1002, 'Clear', 'Shampoo', 'PT. Unilever Indonesia', 21, 'Rp 60.000', 'clear.jpg'),
(44, 1003, 'Dove', 'Shampoo', 'PT. Unilever Indonesia', 5, 'Rp 50.000', 'dove.jpg'),
(45, 1004, 'Tresemme', 'Shampoo', 'PT. Unilever Indonesia', 11, 'Rp 50.000', 'tresemme.jpg'),
(46, 1005, 'Head and Shoulders', 'Shampoo', 'PT. Procter and Gamble', 28, 'Rp 54.300', 'head and shoulders.jpg'),
(47, 1006, 'Rejoice', 'Shampoo', 'PT. Procter and Gamble', 29, 'Rp 62.000', 'rejoice.jpg'),
(48, 1007, 'Pantene', 'Shampoo', 'PT. Procter and Gamble', 13, 'Rp 64.000', 'pantene.jpg'),
(49, 1101, 'Chitato', 'Makanan', 'PT. Indofood Sukses Makmur', 12, 'Rp 19.000', 'citato.jpg'),
(50, 1102, 'Salt Cheese', 'Makanan', 'PT. Khong Guan', 15, 'Rp 9.000', 'salt chesee.jpg'),
(51, 1103, 'Bengbeng', 'Makanan', 'PT. Mayora Indah', 31, 'Rp 4.000', 'bengbeng.jpg'),
(52, 1104, 'Lays', 'Makanan', 'PT. Indofood Fritolay Makmur', 21, 'Rp 17.000', 'lays.jpg'),
(53, 1105, 'Nextar', 'Makanan', 'PT. Kaldu Sari Nabati Indonesia', 29, 'Rp 3.000', 'nextar.jpg'),
(54, 1106, 'Taro', 'Makanan', 'PT. Tiga Pilar Sejahtera Tbk', 26, 'Rp 4.000', 'taro.jpg'),
(55, 1107, 'Tango', 'Makanan', 'PT. Ultra Prima Abadi', 16, 'Rp 12.000', 'tango.jpg'),
(56, 1108, 'Kitkat', 'Makanan', 'PT. Nestle Indonesia', 18, 'Rp 7.000', 'kitkat.jpg'),
(57, 1109, 'Tao Kae Noi', 'Makanan', 'Tao Kae Noi Company', 8, 'Rp 15.000', 'takenoi.jpg'),
(58, 1201, 'Maknyus', 'Beras', 'PT. Tiga Pilar Sejahtera Food Tbk', 10, 'Rp 62.000', 'maknyus.png'),
(59, 1202, 'Hariku', 'Beras', 'PT. Kirana Food', 12, 'Rp 70.000', 'hariku.jpg'),
(60, 1203, 'B.M.W', 'Beras', 'PT. Food Station Tjipinang Jaya', 8, 'Rp 275.000', 'BMW.jpg'),
(61, 1204, 'Fortune', 'Beras', 'PT. Wilmar Indonesia', 7, 'Rp 61.000', 'beras fortune.jpg'),
(62, 1205, 'Pandan Wangi', 'Beras', 'PT. Karya Baru Indonesia', 3, 'Rp 79.500', 'beras pandan wangi.jpg'),
(63, 1301, 'Sikat Gigi', 'Alat Rumah Tangga', 'PT. Jaya Utama Santikah', 15, 'Rp 8.000', 'sikat gigi.jpg'),
(64, 1302, 'Termos Lion Air', 'Alat Rumah Tangga', 'PT. Cahaya Perdana Plastics', 2, 'Rp 75.000', 'termos.jpg'),
(65, 1303, 'Botol Tupperware', 'Alat Rumah Tangga', 'PT. Tupperware Indonesia', 26, 'Rp 110.000', 'botol minum.jpg'),
(66, 1401, 'Pensil Faber-Castell', 'Peralatan Sekolah', 'PT. A.W. Faber-Castell Indonesia', 43, 'Rp 6.000', 'pensil.jpg'),
(67, 1402, 'Pulpen Faster', 'Peralatan Sekolah', 'PT. Standardpen', 28, 'Rp 2.000', 'pulpen.jpg'),
(68, 1403, 'Buku Tulis', 'Peralatan Sekolah', 'PT. Sinar Dunia', 53, 'Rp 10.000', 'buku.jpg'),
(69, 1404, 'Penghapus Faber-Castell', 'Peralatan Sekolah', 'PT. A.W. Faber-Castell Indonesia', 42, 'Rp 4.000', 'penghapus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kalendar_admin`
--

CREATE TABLE `kalendar_admin` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalendar_admin`
--

INSERT INTO `kalendar_admin` (`id`, `kegiatan`, `mulai`, `selesai`) VALUES
(1, 'Jadwal Admin', '2021-12-14', '2021-12-18'),
(4, 'Talitha Makan', '2021-12-17', '2021-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `kalendar_manager`
--

CREATE TABLE `kalendar_manager` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalendar_manager`
--

INSERT INTO `kalendar_manager` (`id`, `kegiatan`, `mulai`, `selesai`) VALUES
(1, 'Jadwal Manager 1', '2021-12-20', '2021-12-23');

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

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `tanggal`, `comment`) VALUES
(2, 'Pengguna', 'pengguna1@gmail.com', '2021-12-15', '<p><em><strong>Sangat Bagus</strong></em></p>\r\n'),
(3, 'Hamba Tuhan', 'hamba@gmail.com', '2021-12-15', '<p>Mantap</p>\r\n'),
(4, 'User Website Stock Barang', 'user123@gmail.com', '2021-12-15', '<p><strong>Saya Suka Desain Websitenya</strong></p>\r\n\r\n<p><em>Saya Mengharapkan</em>&nbsp;<strong><s>Kelanjutannya</s></strong></p>\r\n'),
(5, 'Budi', 'budi123@gmail.com', '2021-12-16', '<p><em><strong>Fitur-fitur pada websitenya sangat membantu dan menarik untuk dikunjungi</strong></em></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `no` int(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`no`, `time`, `link`, `user_id`, `type`) VALUES
(54, '17:26', 'fq8n4g1ki2n1grsnfbivsmrtfa', 0, 'add'),
(55, '17:30', 'shfc546f5s9jgag5nsv1kumg8o', 1, 'edit'),
(57, '18:44', '0javea8nuspsark26fngtbiarc', 2, 'edit'),
(58, '22:44', 'nl8iv6smfgqmomm1biuuh2q867', 1, 'edit'),
(59, '22:44', 'o57ul036j3h36h6eug3imjkjca', 0, 'add');

-- --------------------------------------------------------

--
-- Table structure for table `outgoing`
--

CREATE TABLE `outgoing` (
  `user_id` int(255) NOT NULL,
  `outgoing_date` text NOT NULL,
  `outgoing_id` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_items` int(255) NOT NULL,
  `misc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outgoing`
--

INSERT INTO `outgoing` (`user_id`, `outgoing_date`, `outgoing_id`, `customer`, `serial_number`, `product_id`, `product_name`, `quantity`, `total_items`, `misc`) VALUES
(1, 'Thu, 16 Dec 2021, 16:55:07', '211204204808', 'Brick Morgan Oey', '1, 2, 3, 4, 5, 6', '501, 502, 503, 504, 505, 506', 'Bimoli, Sania, Fortuna, Sanco, Filma, Tropical ', '1, 4, 20, 31, 36, 44', 136, 'J&T#RES.NO'),
(2, 'Mon, 13 Dec 2021, 12:24:35', '86e0vf0gh71q2i0aqgmitok630', 'Talitha Gaming', '1, 2, 3', '601, 1203, 1303', 'Aqua, B.M.W, Botol Tupperware', '2, 1, 1', 4, 'JNE Gaming'),
(3, 'Mon, 13 Dec 2021, 12:27:52', 'cri33f9jtkgag5emkbisfen5v2', 'Darwan', '1, 2, 3, 4', '1003, 205, 1104, 703', 'Dove, Golden Angel, Lays, Attack', '2, 3, 4, 2', 11, 'J&T Express'),
(4, 'Mon, 13 Dec 2021, 15:10:25', '6tadalcpvij3rclb53vfgkisjf', 'Erli Gaming', '1, 2', '601, 1101', 'Aqua, Chitato', '2, 3', 5, 'TiKi'),
(5, 'Thu, 16 Dec 2021, 16:58:07', 'i1laj6n66srqie2cpd9ulsv45t', 'Talitha Syafiyah', '1', '303', 'Indomie', '35', 35, 'SiCepat');

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
(3, 'donny', '$2y$10$ESHUoLizW/OQsp7iAGLp.uQYDu/a9TC1ZB4mgZ.9WFvl/J6Din6Xm', 'donny.adithyaciok@gmail.com', '', ''),
(4, 'febri', 'user104', 'febrizuladhari12345@gmail.com', '8531f428e447b24de9851e92e6b06770', ''),
(5, 'erli', 'user105', 'erligurning03@gmail.com', 'be87900eb0902ceb2eee57c8ca66e88c', ''),
(6, 'abrar', 'user106', 'rayhanabrar4@gmail.com', '877a78fbb318e89856c621e8b6bbdd55', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'Bagus', 'Febri', '2021-12-14 07:38:25'),
(2, 1, 'Saya Setuju Dengan Anda, Website nya Sangat Bagus dan Interaktif', 'Megumi', '2021-12-14 07:39:10'),
(3, 0, 'Indomie Sedap', 'Talitha', '2021-12-14 10:15:25'),
(4, 3, 'Benar, Saya Suka', 'Donny', '2021-12-14 10:15:52');

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
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kalendar_admin`
--
ALTER TABLE `kalendar_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalendar_manager`
--
ALTER TABLE `kalendar_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalendar_operator`
--
ALTER TABLE `kalendar_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `outgoing`
--
ALTER TABLE `outgoing`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `kalendar_admin`
--
ALTER TABLE `kalendar_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kalendar_manager`
--
ALTER TABLE `kalendar_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kalendar_operator`
--
ALTER TABLE `kalendar_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `outgoing`
--
ALTER TABLE `outgoing`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `nl8iv6smfgqmomm1biuuh2q867` ON SCHEDULE AT '2021-12-16 23:44:22' ON COMPLETION NOT PRESERVE ENABLE DO DROP TABLE IF EXISTS `nl8iv6smfgqmomm1biuuh2q867`, `1`$$

CREATE DEFINER=`root`@`localhost` EVENT `o57ul036j3h36h6eug3imjkjca` ON SCHEDULE AT '2021-12-16 23:44:34' ON COMPLETION NOT PRESERVE ENABLE DO DROP TABLE IF EXISTS `o57ul036j3h36h6eug3imjkjca`$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
