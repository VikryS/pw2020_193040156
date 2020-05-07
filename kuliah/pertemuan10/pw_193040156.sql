-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 10:20 AM
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
-- Database: `pw_193040156`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Udin', '193040234', 'Udin@gmail.com', 'Teknik Informatika', 'udin.jpeg'),
(2, 'Idin', '193040234', 'Idin@gmail.com', 'Teknik Informatika', 'Idin.jpeg'),
(3, 'Steven', '193040234', 'Steven@gmail.com', 'Teknik Informatika', 'Steven.jpeg'),
(4, 'Steffan', '193040236', 'Steffan@gmail.com', 'Teknik Informatika', 'Steffan.jpeg'),
(5, 'Julio', '193040237', 'Julio@gmail.com', 'Teknik Informatika', 'Julio.jpeg'),
(6, 'Kris', '193040238', 'Kris@gmail.com', 'Teknik Informatika', 'Kris.jpeg'),
(7, 'Zam', '193040239', 'Zam@gmail.com', 'Teknik Informatika', 'Zam.jpeg'),
(8, 'Sam', '193040240', 'Sam@gmail.com', 'Teknik Informatika', 'Sam.jpeg'),
(9, 'Saytama', '193040241', 'Saytama@gmail.com', 'Teknik Informatika', 'Saytama.jpeg'),
(10, 'Friska', '193040242', 'Friska@gmail.com', 'Teknik Informatika', 'Friska.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
