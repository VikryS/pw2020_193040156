-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 08:41 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040156`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto_produk` varchar(30) NOT NULL,
  `jenis_elektronik` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto_produk`, `jenis_elektronik`, `merk`, `type`, `harga`) VALUES
(1, 'MSI.jpg', 'laptop', 'msi', 'gs70 2qe stealthpro', 31450000),
(2, 'MSI2.png', 'laptop', 'msi', 'alpha 15', 15490000),
(3, 'MSI3.jpg', 'laptop', 'msi', 'gp62mvr7rfx', 15750000),
(4, 'MSI4.jpg', 'laptop', 'msi', 'gt83vr 7re tital sli', 69995000),
(5, 'MSI5.jpg', 'laptop', 'msi', 'notebook gaming gl63 8rc', 12806000),
(6, 'ASUS.jpg', 'laptop', 'asus', 'rog g703', 61000000),
(7, 'ACER.jpg', 'laptop', 'acer', 'predator g9-793-17.3', 31700000),
(8, 'ALIEN.jpg', 'laptop', 'alienware', 'alienware 17', 48999000),
(9, 'ACER2.jpg', 'laptop', 'acer', 'nitro 7 an715-51', 29799000),
(10, 'ACER3.jpg', 'laptop', 'acer', 'predator 21x', 124000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin123', '12345'),
(2, 'admin', '12345'),
(3, 'admin00', '$2y$10$0T9M3NVbJA3F/Eo5N3YsZeW1OEkw4Ar8/hXNMNIF3JrscNjESecIi'),
(4, 'admin01', '$2y$10$y/0mnyieOKgxOmCSHhD80.Ragq.ftv4eueb12TG0fbJ0z08Ef9mWe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
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
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
