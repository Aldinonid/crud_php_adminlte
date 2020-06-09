-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 03:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbupb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama`, `alamat`, `hp`, `email`, `photo`) VALUES
(21, '171510003', 'Ricky', 'Batam', '08123455677', 'pb171510003@upbatam.ac.id', '5ea98165f03f9.jpg'),
(22, '171510008', 'Event', 'Batam', '081234567890', 'pb171510008@upbatam.ac.id', '5ea9825ec0123.jpg'),
(23, '171510016', 'Albert', 'Batam', '081234567890', 'pb171510016@upbatam.ac.id', '5ea982bc5c175.jpg'),
(24, '171510018', 'Kelvin', 'Batam', '081234567890', 'pb171510018@upbatam.ac.id', '5ea982da8482b.jpg'),
(25, '180810048', 'Nelly', 'Batam', '081234567890', 'pb180810048@upbatam.ac.id', '5ea982f85b8ac.jpg'),
(26, '170910102', 'Angelia', 'Batam', '081234567890', 'pb170910102@upbatam.ac.id', '5ea983131902a.jpg'),
(27, '181510015', 'Ardyanto', 'Batam', '081234567890', 'pb181510015@upbatam.ac.id', '5ea9832c9ec75.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`) VALUES
(6, 'aldino', '$2y$10$CMwrCE8dh3uSxVsaSpwh9O0a0fg8hlv4NuY1PCuWuzRxeiJEdbbG.', 'Aldino'),
(7, 'admin', '$2y$10$WKlAiPiFJ/lBC1WkpfES5eaxw1p.O50lL6sV6XgIJrW8lAo6np5B6', 'Admin'),
(8, 'kaguya', '$2y$10$7o8RbYnKEi8b6APa0FNhQOt8qIX2X.wBomShigkYkWgUVOLZTaklu', 'Kaguya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`npm`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
