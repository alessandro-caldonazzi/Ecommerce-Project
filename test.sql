-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 11:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `immagine` varchar(255) NOT NULL,
  `prezzo` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `immagine`, `prezzo`) VALUES
(1, 'Antminer s9', '1.jpg', 100.00),
(3, 'GTX 1080 ti', '3.jpg', 125.00),
(4, 'GTX 1060', '4.jpg', 145.00),
(5, 'GTX 1070', '5.jpg', 145.00),
(6, 'Bitcoin miner stand', '6.jpg', 145.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dom` varchar(10) NOT NULL,
  `risp` varchar(60) NOT NULL,
  `verifica` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `dom`, `risp`, `verifica`) VALUES
(14, 'admin', 'example@example.com', 'c3284d0f94606de1fd2af172aba15bf3', 'cane', 'c1a59bcd1cb1d018ccfe812efdc2a141', 'si');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
