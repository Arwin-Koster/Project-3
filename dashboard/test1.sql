-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 11:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bierverkoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `id` int(11) NOT NULL,
  `aantal` varchar(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telefoon` decimal(10,0) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `straat` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`id`, `aantal`, `naam`, `mail`, `telefoon`, `woonplaats`, `postcode`, `straat`, `huisnummer`, `datum`, `status`) VALUES
(1, '12', 'kayen', 'dejongkayen@gmail.com', '627888468', 'sneek', '8607gs', 'jonkvrouw', '56', '2022-11-29', 'new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
