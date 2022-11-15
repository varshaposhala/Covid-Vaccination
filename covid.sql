-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 08:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('varsha', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `user` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`user`, `hospital`, `dose`, `date`, `time`) VALUES
('', 'rainbow', 'dose1', '0000-00-00', '00:00:00.000000'),
('', 'rainbow', 'dose1', '0000-00-00', '00:00:00.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '04:53:39.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:34.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:39.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:41.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:44.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:46.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:48.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:50.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:53.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:55.000000'),
('', 'rainbow', 'dose1', '2022-11-14', '05:32:57.000000'),
('varsha', 'rainbow', 'dose1', '2022-11-15', '05:40:49.000000'),
('varsha', 'rainbow', 'dose1', '2022-11-15', '05:41:30.000000'),
('varsha', 'mgm', 'dose1', '2022-11-15', '06:55:46.000000'),
('varsha', 'mgm', 'dose1', '2022-11-15', '06:56:18.000000');

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `hospital` varchar(255) NOT NULL,
  `dose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`hospital`, `dose`) VALUES
('rainbow', 'dose1'),
('rainbow', 'dose2'),
('rainbow', 'dose3');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `aadhar` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`aadhar`, `username`, `password`, `phone`, `gmail`) VALUES
(0, 'varsha', '123456', '9866764212', 'poshala@gmail.com'),
(0, 'amsika', '123456', '9866764212', 'poshala@gmail.com'),
(4577, 'amsika1', '123456', '8074663086', 'v@gmail.com'),
(4577, 'varsha', '123456', '7032440876', 'v@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_centers`
--

CREATE TABLE `vaccination_centers` (
  `s.no` int(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccination_centers`
--

INSERT INTO `vaccination_centers` (`s.no`, `hospital`, `type`, `district`) VALUES
(1, 'rainbow', 'pvt', 'hyderabad'),
(4, 'rainbow', 'pvt', 'hyderabad'),
(5, 'rainbow', 'pvt', 'hyderabad'),
(6, 'rainbow', 'pvt', 'hyderabad'),
(7, 'rainbow', 'pvt', 'hyderabad'),
(8, 'rainbow', 'pvt', 'hyderabad'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, 'rohini', 'pvt', 'warangal'),
(13, 'rainbow', 'pvt', 'warangal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vaccination_centers`
--
ALTER TABLE `vaccination_centers`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaccination_centers`
--
ALTER TABLE `vaccination_centers`
  MODIFY `s.no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
