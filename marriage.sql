-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2018 at 12:46 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Administrator', 'Administrator@gmail.com', 'Admin9090', '5cef859f12ccebc9009fbc4f4321cf528b1fa3d2');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(3) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `religion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `email`, `phone`, `address`, `dob`, `age`, `sex`, `religion`) VALUES
(1, 'Harikrishna', 'hari@gmail.com', '9876543210', ' is a long established fact that a reader will be distracted by the rea', '2017-09-05', 25, 1, 'Hindu'),
(2, 'Test123', 'harikk173@gmail.com', '1235467890', ' is a long established fact that a reader will be distracted by the rea', '2006-03-24', 23, 1, 'Hindu'),
(3, 'harikk', 'harikrishnaunni007@gmail.com', '1235456780', ' is a long established fact that a reader will be distracted by the rea', '1996-07-25', 22, 1, 'Hindu'),
(4, 'harikk', 'harikk173@gmail.com', '4242347235', ' is a long established fact that a reader will be distracted by the rea', '1991-11-22', 22, 1, 'Hindu'),
(5, 'harikk', 'harikrishnaunni007@gmail.com', '1235456780', ' is a long established fact that a reader will be distracted by the rea', '1996-07-25', 22, 1, 'Hindu'),
(6, 'harikk', 'harikrishnaunni007@gmail.com', '1235456780', ' is a long established fact that a reader will be distracted by the rea', '1996-07-25', 22, 1, 'Hindu'),
(7, 'Test123', 'harikk173@gmail.com', '234245450', ' is a long established fact that a reader will be distracted by the rea', '2006-03-24', 23, 1, 'Hindu'),
(8, 'Test123', 'harikk173@gmail.com', '234245450', ' is a long established fact that a reader will be distracted by the rea', '2006-03-24', 23, 1, 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `other_det`
--

CREATE TABLE `other_det` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `star` varchar(255) NOT NULL,
  `shishtadhasa` int(3) NOT NULL,
  `height` int(3) NOT NULL,
  `color` int(1) NOT NULL,
  `bgroup` varchar(2) NOT NULL,
  `body_type` int(1) NOT NULL,
  `other_health_det` varchar(255) NOT NULL,
  `educational` varchar(255) NOT NULL,
  `job` varchar(2551) NOT NULL,
  `horscop_simlr` tinyint(1) NOT NULL,
  `economical` int(1) NOT NULL,
  `horscop_status` int(1) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `father_occupation` varchar(255) NOT NULL,
  `salary` int(9) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `motheraddr` varchar(255) NOT NULL,
  `no_br` int(2) NOT NULL,
  `no_sis` int(2) NOT NULL,
  `kuripp` varchar(255) DEFAULT NULL,
  `kuripp_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_det`
--

INSERT INTO `other_det` (`id`, `userid`, `star`, `shishtadhasa`, `height`, `color`, `bgroup`, `body_type`, `other_health_det`, `educational`, `job`, `horscop_simlr`, `economical`, `horscop_status`, `fathername`, `father_occupation`, `salary`, `mothername`, `motheraddr`, `no_br`, `no_sis`, `kuripp`, `kuripp_time`) VALUES
(1, 1, 'Rohini', 2, 164, 2, 'A+', 1, 'Nothing', 'B-tech', 'Software Engineer', 0, 1, 2, 'Kumaran', 'Cooli', 25000, 'Hema', ' is a long established fact that a reader will be distracted by the rea', 3, 2, 'a.jpg', '12.30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_det`
--
ALTER TABLE `other_det`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `other_det`
--
ALTER TABLE `other_det`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
