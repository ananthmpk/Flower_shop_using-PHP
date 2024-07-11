-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 10:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `no` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `upassowrd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`no`, `admin_name`, `user_name`, `upassowrd`) VALUES
(1, 'Anantharaj', 'ananth123', '123456'),
(2, 'Ram kumar', 'ram456', '789456'),
(3, 'Pavithra', 'pavi789', '123456'),
(4, 'Manikandan', 'mani457', '58231');

-- --------------------------------------------------------

--
-- Table structure for table `flower_data`
--

CREATE TABLE `flower_data` (
  `no` int(11) NOT NULL,
  `bouquet_name` varchar(1000) DEFAULT NULL,
  `offer_price` varchar(1000) DEFAULT NULL,
  `price` varchar(1000) DEFAULT NULL,
  `image` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flower_data`
--

INSERT INTO `flower_data` (`no`, `bouquet_name`, `offer_price`, `price`, `image`) VALUES
(3, 'Voilet Roses', '1000', '1200', 'voilet rose bouquet.png'),
(4, 'Pink Roses', '1542', '1655', 'pink rose bouquet.png'),
(5, 'Mixd Roses', '1599', '18050', 'red wi rose bouquet.png'),
(6, 'Orange Roses', '2566', '3000', 'orange rose bouquet.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `flower_data`
--
ALTER TABLE `flower_data`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flower_data`
--
ALTER TABLE `flower_data`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
