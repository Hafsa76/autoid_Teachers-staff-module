-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 09:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`, `username`) VALUES
('abc32@gmail.com', '123', ''),
('abc32@gmail.com', 'Aa1234567*', '');

-- --------------------------------------------------------

--
-- Table structure for table `auto_staff_data`
--

CREATE TABLE `auto_staff_data` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `Institute` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `a_class` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto_staff_data`
--

INSERT INTO `auto_staff_data` (`id`, `name`, `Gender`, `dob`, `mobile`, `joining_date`, `qualification`, `Institute`, `experience`, `email`, `address`, `a_class`, `section`, `image`, `subject`) VALUES
('STA0000001', 'abcde UPDATE', 'Male', '2000-12-31', '1234-5678900', '2022-09-14', 'Bacholar of science', 'GCUF ', '6 Year', 'abc32@gmail.com', 'main street 123', 'Three', 'A', 'pic.jpg', ''),
('STA0000002', 'Junaid', 'Male', '2000-12-31', '1234-5678900', '2022-09-14', 'Bacholar of science', 'GCUF ', '6 Year', 'abc32@gmail.com', 'main street 123', 'Three', 'C', 'pic.jpg', ''),
('STA0000003', 'hafsa', 'Female', '2000-12-31', '1234-5678901', '2022-09-14', 'Bacholar of science   ', 'GCUF ', '4 Year', 'abc32@gmail.com', 'main street 123', 'Five', 'B', 'pic.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_data`
--

CREATE TABLE `staff_data` (
  `sno` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `joining_date` date NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `Institute` varchar(50) NOT NULL,
  `experience` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `repeat_password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `a_class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_data`
--

INSERT INTO `staff_data` (`sno`, `id`, `name`, `Gender`, `dob`, `mobile`, `joining_date`, `qualification`, `Institute`, `experience`, `username`, `email`, `password`, `repeat_password`, `address`, `a_class`, `section`, `image`) VALUES
(1, 1, 'hafsa update', 'Female', '2022-09-13', '1234-5678901', '2022-09-28', 'Bacholar of science', 'GCUF ', '6 Year', '', 'abc32@gmail.com', '', '', 'main street 123', 'Five', 'B', 'pic.jpg'),
(2, 2, 'saeed', 'Female', '2000-12-07', '1234-5678901', '2022-09-13', 'Bacholar of science   ', 'GCUF ', '5 Year', '', 'abc32@gmail.com', '', '', 'main street 123', 'Seven', 'A', 'pic.jpg'),
(4, 0, 'abcde', 'Male', '2000-12-12', '1234-5678909', '2022-09-13', 'Bacholar of science', 'GCUF ', '8 Year', '', 'cnzxc@gmail.com', '', '', 'main street 123', 'Two', 'B', 'pic.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_staff_data`
--
ALTER TABLE `auto_staff_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_data`
--
ALTER TABLE `staff_data`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_data`
--
ALTER TABLE `staff_data`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
