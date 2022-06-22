-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 07:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(100) NOT NULL DEFAULT 'Western'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `foto`, `deskripsi`, `jenis`) VALUES
(48, 'Rendang', 125000, 'rendang1.jpg', 'Rendang makanan khas indonesia', 'ayam'),
(49, 'Shusi', 20000, 'sushi0.jpg', 'Shusi mentah', 'Japanese'),
(50, 'Rawon', 12000, 'rawon.jpg', 'Rawon Muantapss', 'Indonesia'),
(51, 'Shusi', 30000, 'shusi.jpg', 'Shusi daging mentah ikan', 'Japanese'),
(52, 'Hot Dog', 35000, 'Hot-Dogs.jpg', 'Hot Dog (Anjing Panas)', 'Western'),
(53, 'Hamburger', 40000, 'hamburger.jpg', 'Hamburger makanan luar negrie', 'Western'),
(54, 'Ramen', 20000, 'ramen1.jpg', 'Ramen makanan kesukaan naruto', 'Japanese'),
(55, 'Steak', 50000, 'steak.jpg', 'Steak Daging Sapi', 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id`, `nama`, `harga`, `foto`, `deskripsi`) VALUES
(1, 'Es Jeruk', 8000, 'es-jeruk.jpg', 'Es Jeruk minuman yang menyegarkan'),
(2, 'MilkShake Strawberry', 30000, 'milkshake.jpg', 'MilkShake minuman susu campur buah'),
(3, 'Juice Alpukat', 25000, 'juice-alpukat.jpg', 'Juice Alpukat baik untuk kesehatan'),
(4, 'Oreo Frappe', 20000, 'OREO_FRAPPE.jpg', 'Oreo Frappe minuman unik dengan campuran oreo dan lainya');

-- --------------------------------------------------------

--
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`id`, `nama_pelanggan`, `tanggal`, `total`) VALUES
(1, 'Ozil', '2018-12-06', 177000),
(11, 'Ozil', '2018-12-06', 105000),
(24, 'Batman', '2018-12-06', 42000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hak` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `pass`, `alamat`, `hak`) VALUES
(2, 'admin', 'gerry@gmail.com', 'admin', 'asd', 'admin', 'admin'),
(4, 'Batman', 'batman@gmail.com', 'bat', '123', 'Gotham', 'user'),
(5, 'Rawon', 'rawon@gmail.com', 'rawon', '123', 'Rawon Oke', 'user'),
(7, 'Ozil', 'ozil@gmail.com', 'ozil', 'asd', 'Emirates', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
