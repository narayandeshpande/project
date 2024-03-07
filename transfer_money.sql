-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 02:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `transfer_money`
--

CREATE TABLE `transfer_money` (
  `sno` int(11) NOT NULL,
  `senders_name` varchar(100) DEFAULT NULL,
  `recivers_email` varchar(100) NOT NULL,
  `recivers_name` varchar(20) NOT NULL,
  `sendrs_email` varchar(100) DEFAULT NULL,
  `amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transfer_money`
--

INSERT INTO `transfer_money` (`sno`, `senders_name`, `recivers_email`, `recivers_name`, `sendrs_email`, `amount`) VALUES
(1, 'narayan', 'riteshshinde22@gmail.com', 'ritesh', 'narayandeshpande@gmail.com', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transfer_money`
--
ALTER TABLE `transfer_money`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer_money`
--
ALTER TABLE `transfer_money`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
