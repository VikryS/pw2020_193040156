-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 10:21 AM
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
(1, 'msi', 'laptop', 'msi', 'gs70 2qe stealthpro', 31450000),
(2, 'msi.jpeg', 'laptop', 'msi', 'alpha 15', 15490000),
(3, 'msi2.jpeg', 'laptop', 'msi', 'gp62mvr7rfx', 15750000),
(4, 'msi3.jpeg', 'laptop', 'msi', 'gt83vr 7re tital sli', 69995000),
(5, 'msi4.jpeg', 'laptop', 'msi', 'notebook gaming gl63 8rc', 12806000),
(6, 'msi5.jpeg', 'laptop', 'msi', 'gs72 2qe stealthpro', 31550000),
(7, 'msi6.jpeg', 'laptop', 'msi', 'gs74 2qe stealthpro', 31700000),
(8, 'msi7.jpeg', 'laptop', 'msi', 'gs76 2qe stealthpro', 31770000),
(9, 'msi8.jpeg', 'laptop', 'msi', 'gs79 2qe stealthpro', 31900000),
(10, 'msi9.jpeg', 'laptop', 'msi', 'gs80 2qe stealthpro', 32300000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
