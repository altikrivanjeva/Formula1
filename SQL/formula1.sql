-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2024 at 03:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formula1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact-id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact-id`, `username`, `email`, `message`) VALUES
(1, '', '', ''),
(2, 'Alti', 'altisjtf@gmail.xom', 'fdsafsadfasd'),
(3, 'Alti', 'fkdjsbgfisdf@gmail.com', 'gudsafuadsgffdsfasdgf'),
(4, 'Alti', 'fjsdbhfis@gmail.com', 'ibdgsfidsagdfgds'),
(5, '', '', ''),
(6, 'Ensar Xhaferi', 'ensar@live.com', 'test demo text message databaz'),
(7, 'Ensar Xhaferi', 'ensar@live.com', 'test demo text message databaz'),
(8, 'Ensar Xhaferi', 'ensar@live.com', 'test demo text message databaz'),
(9, 'Ensar Xhaferi', 'ensar@live.com', 'test demo text message databaz'),
(10, 'fsaf', 'dsfs@live.com', 'cdsvsv'),
(11, 'Arioni', 'jsnfsnf@live.com', 'arioni test'),
(12, 'ensar', 'esnar@hotmail.com', 'test mesazh'),
(13, 'dsfasdf', 'dsafds@gmail.com', 'dnjsbfsdfad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
