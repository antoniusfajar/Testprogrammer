-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 06:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_programing`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `no` varchar(10) NOT NULL,
  `id_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`no`, `id_produk`, `nama_produk`, `harga`, `kategori`, `status`) VALUES
('16', '15', 'ALUMUNIUM FOIL HDPE/', '12500', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('16', '17', 'ALUMUNIUM FOIL HDPE/', '12500', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('19', '18', 'ALUMUNIUM FOIL HDPE/', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('20', '19', 'ALUMUNIUM FOIL PET S', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('23', '22', 'ARM PENDEK MODEL U', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('24', '23', 'ARM SUPPORT KECIL', '13000', 'L MTH TABUNG (LK)', 'tidak bisa dijual'),
('25', '24', 'ARM SUPPORT KOTAK PU', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('27', '26', 'ARM SUPPORT PENDEK P', '13000', 'L MTH TABUNG (LK)', 'bisa dijual'),
('28', '27', 'ARM SUPPORT S IM', '1000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('29', '28', 'ARM SUPPORT T (IMPOR', '13000', 'L MTH AKSESORIS (IM)', 'bisa dijual'),
('30', '29', 'ARM SUPPORT T - MODE', '10000', 'L MTH TABUNG (LK)', 'bisa dijual'),
('51', '50', 'BLACK LASER TONER FP', '13000', 'L MTH AKSESORIS (IM)', 'tidak bisa dijual'),
('57', '56', 'BODY PRINTER CANON I', '500', 'SP MTH SPAREPART (LK', 'bisa dijual'),
('59', '58', 'BODY PRINTER T13X', '15000', 'SP MTH SPAREPART (LK', 'bisa dijual'),
('60', '59', 'BOTOL 1000ML BLUE KH', '10000', 'CI MTH TINTA LAIN (I', 'bisa dijual'),
('7', '6', 'ALCOHOL GEL POLISH C', '12500', 'L QUEENLY', 'bisa dijual'),
('61', '60', 'BOTOL 1000ML CYAN KH', '10000', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('62', '61', 'BOTOL 1000ML GLOSS O', '1500', 'CI MTH TINTA LAIN (I', 'bisa dijual'),
('63', '62', 'BOTOL 1000ML L.LIGHT', '1500', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('64', '63', 'BOTOL 1000ML LIGHT B', '1500', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('65', '64', 'BOTOL 1000ML MAGENTA', '1000', 'CI MTH TINTA LAIN (I', 'bisa dijual'),
('66', '65', 'BOTOL 1000ML MATTE B', '1500', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('67', '66', 'BOTOL 1000ML ORANGE ', '1500', 'CI MTH TINTA LAIN (I', 'bisa dijual'),
('68', '67', 'BOTOL 1000ML RED KHU', '1000', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('69', '68', 'BOTOL 1000ML YELLOW ', '1500', 'CI MTH TINTA LAIN (I', 'tidak bisa dijual'),
('71', '70', 'BOTOL KOTAK 100ML LK', '1000', 'L MTH AKSESORIS (LK)', 'bisa dijual'),
('73', '72', 'BOTOL 10ML IM', '1000', 'S MTH STEMPEL (IM)', 'tidak bisa dijual'),
('92', '80', 'Head Cleaner Premium', '92000', 'Cleaner', 'bisa dijual'),
('10', '9', 'ALUMUNIUM FOIL ALL I', '1000', 'L MTH AKSESORIS (IM)', 'bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
