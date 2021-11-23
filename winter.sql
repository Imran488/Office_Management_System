-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 09:07 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winter`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_registered_members`
--

CREATE TABLE `all_registered_members` (
  `id` int(15) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Deg` varchar(100) NOT NULL,
  `Gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_registered_members`
--

INSERT INTO `all_registered_members` (`id`, `Username`, `Password`, `Email`, `Deg`, `Gender`) VALUES
(36, 'Shahriar', 'f5893748307681c2740495c20e5ed4b9', 'shahriarh71@gmail.com', 'feg', 'male'),
(37, 'anik rahman', '224df821606756c699bd0b55c943b089', 'a7604366@gmail.com', 'jkjk', 'male'),
(38, 'kamrul', '224df821606756c699bd0b55c943b089', 'kamrul@gmail.com', 'staff', 'male'),
(39, 'killer', 'A989898k', 'sadman@gmail.com', '420', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Birthdate` varchar(50) NOT NULL,
  `Age` varchar(15) NOT NULL,
  `NID` varchar(15) NOT NULL,
  `Bima` varchar(20) NOT NULL,
  `DateofBima` varchar(200) NOT NULL,
  `AmountofMoney` varchar(25) NOT NULL,
  `NomineeName` varchar(15) NOT NULL,
  `DBOID` varchar(10) NOT NULL,
  `AgentID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`id`, `Name`, `Birthdate`, `Age`, `NID`, `Bima`, `DateofBima`, `AmountofMoney`, `NomineeName`, `DBOID`, `AgentID`) VALUES
(1, '', '', '', '', '', '', '', '', '', ''),
(2, 'cdsf', 'fsf', 'fdsf', 'hgfthfgh', 'fghfhfgh', 'fg', 'hfhfhfg', 'hfghfg', 'hfghfghf', 'fghfh');

-- --------------------------------------------------------

--
-- Table structure for table `manager_login`
--

CREATE TABLE `manager_login` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_login`
--

INSERT INTO `manager_login` (`id`, `user`, `password`) VALUES
(1, 'manager', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_registered_members`
--
ALTER TABLE `all_registered_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager_login`
--
ALTER TABLE `manager_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_registered_members`
--
ALTER TABLE `all_registered_members`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager_login`
--
ALTER TABLE `manager_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
