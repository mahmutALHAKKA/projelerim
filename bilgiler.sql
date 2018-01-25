-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 04:42 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilgiler`
--

CREATE TABLE `bilgiler` (
  `id` int(100) NOT NULL,
  `ad` varchar(60) NOT NULL,
  `soyad` varchar(60) NOT NULL,
  `yas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `ad`, `soyad`, `yas`) VALUES
(1, 'mahmut', 'alhakka', 25),
(2, 'oso', 'sabbagh', 22),
(3, 'obada', 'alhusiyen', 24),
(4, 'emced', 'elahmed', 22),
(5, 'berkcan', 'ozturk', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilgiler`
--
ALTER TABLE `bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilgiler`
--
ALTER TABLE `bilgiler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
