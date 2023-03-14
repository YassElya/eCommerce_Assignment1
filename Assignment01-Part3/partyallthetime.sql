-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 05:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `partyallthetime`
--

-- --------------------------------------------------------

--
-- Table structure for table `balloons`
--

CREATE TABLE `balloons` (
  `id` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `size` varchar(1) NOT NULL,
  `shape` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balloons`
--

INSERT INTO `balloons` (`id`, `color`, `size`, `shape`) VALUES
(1, 'Purple', 'S', 'Ellipse'),
(2, 'Blue', 'S', 'Star'),
(3, 'Yellow', 'M', 'Oval'),
(4, 'Green', 'L', 'Circle'),
(5, 'Red', 'M', 'Heart');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `phone`, `email`) VALUES
(1, 'Yassine', 'El Yamani', '514-908-7865', 'ecom@gmail.com'),
(2, 'Cristiano', 'Ronaldo', '514-340-3523', 'cr7@gmail.com'),
(3, 'Lionel', 'Messi', '438-504-7633', 'goat@gmail.com'),
(4, 'Mohammad', 'Salah', '514-657-8940', 'Salah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balloons`
--
ALTER TABLE `balloons`
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
-- AUTO_INCREMENT for table `balloons`
--
ALTER TABLE `balloons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
