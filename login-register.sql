-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2026 at 11:43 PM
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
-- Database: `login-register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `email`, `message`) VALUES
('alti krivanjeva', 'alti@gmail.com', 'ky esht nje test');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(100) NOT NULL,
  `length` varchar(50) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `name`, `place`, `length`, `image_url`) VALUES
(1, 'Autodromo Enzo e Dino Ferrari', 'Italy', '4.909 Km', '../Assets/tracks/Italy-Emilia-Romagna.png'),
(2, 'Bahrain International Circuit', 'Bahrain', '5.412 Km', '../Assets/tracks/bahrain.png'),
(3, 'Baku City Circuit', 'Azerbaijan', '6.003 Km', '../Assets/tracks/baku.png'),
(4, 'Circuit de Monaco', 'Monaco', '3.337 Km', '../Assets/tracks/monaco.png'),
(5, 'Circuit de Barcelona-Catalunya', 'Spain', '4.655 Km', '../Assets/tracks/spain.png'),
(6, 'ferizaj', 'kosov', '6.12 KM', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Ferizaj_Church_and_Mosque.JPG/330px-Ferizaj_Church_and_Mosque.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Role` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`, `Role`) VALUES
(1, 'alti1', 'alti1@gmail.com', 22, '12345678', 'user'),
(2, 'roni', 'arioni@gmail.com', 19, '12345678', 'user'),
(4, 'dsadasdas', 'dasojfa@gmail.com', 21, '12345678', 'user'),
(13, 'test', 'test@gmail.com', 22, '123456', 'user'),
(14, 'alti', 'alti@gmail.com', 22, '12345678', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
