-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 02:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_point`
--

CREATE TABLE `a_point` (
  `Sr.no` int(10) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `PD` date NOT NULL,
  `Symptoms` varchar(1000) NOT NULL,
  `City` varchar(150) NOT NULL,
  `Mob` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a_point`
--

INSERT INTO `a_point` (`Sr.no`, `Firstname`, `Lastname`, `PD`, `Symptoms`, `City`, `Mob`) VALUES
(1, 'Harry', 'Styles', '2024-04-30', 'swaling on hand', 'Washim', 2147483647),
(2, 'Taylor ', 'Swift', '2024-04-13', 'Sore throat', 'Akola', 2147483647),
(3, 'Radhika ', 'Chavan ', '2024-04-21', 'headache and cold', 'washim', 2147483647),
(4, 'Shalimar ', 'Kathade', '2024-04-19', 'Dust allergy', 'washim', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `b1t1`
--

CREATE TABLE `b1t1` (
  `-O` varchar(10) NOT NULL,
  `+O` varchar(10) NOT NULL,
  `-A` varchar(10) NOT NULL,
  `+A` varchar(10) NOT NULL,
  `-B` varchar(10) NOT NULL,
  `+B` varchar(10) NOT NULL,
  `-AB` varchar(10) NOT NULL,
  `+AB` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Email` varchar(24) NOT NULL,
  `Password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_point`
--
ALTER TABLE `a_point`
  ADD PRIMARY KEY (`Sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_point`
--
ALTER TABLE `a_point`
  MODIFY `Sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
