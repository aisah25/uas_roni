-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 03:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `picture` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`no`, `id`, `nama`, `jenis`, `harga`, `stock`, `picture`) VALUES
(2, 378877, 'Laptop', 'elektronik', 4500000, 25, NULL),
(3, 997419, 'baju', 'pakaian', 75000, 90, 'http://localhost/piksi/web2/10/file/WhatsApp Image 2020-11-02 at 11.18.32 PM.jpeg'),
(4, 187323, 'Junkfood', 'makanan', 50000, 99999, NULL),
(5, 851391, 'Ban', 'onderdil', 210000, 55, NULL),
(6, 352895, 'Pocari', 'minuman', 7500, 75005, NULL),
(7, 787044, 'battery', 'elektronik', 80000, 90, 'http://localhost/piksi/web2/10/file/images.jfif'),
(8, 791985, 'test', 'elektronik', 900000, 80, 'http://localhost/piksi/web2/10/file/CV Tiya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id`, `nama`, `kelas`, `jurusan`, `created`) VALUES
(1, 'panji', 'msi', 'sistem', '2020-11-09 21:38:07'),
(2, 'surya', 'mif', 'manajemen informatika', '2020-11-09 21:38:32'),
(3, 'Laptop', '', '', '2020-11-18 20:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `uas`
--

CREATE TABLE `uas` (
  `u_id` int(11) NOT NULL,
  `u_barang` varchar(255) NOT NULL,
  `u_harga` int(11) NOT NULL,
  `u_stock` int(11) NOT NULL,
  `u_pic` text NOT NULL,
  `u_created` datetime NOT NULL DEFAULT current_timestamp(),
  `u_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uas`
--

INSERT INTO `uas` (`u_id`, `u_barang`, `u_harga`, `u_stock`, `u_pic`, `u_created`, `u_updated`) VALUES
(3, 'meong', 8000, 8, 'gambar/top_bus.jpg', '2021-01-12 20:49:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uas`
--
ALTER TABLE `uas`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uas`
--
ALTER TABLE `uas`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
