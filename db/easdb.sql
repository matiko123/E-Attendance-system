-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 02:04 PM
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
-- Database: `easdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `booklet_no` int(10) NOT NULL,
  `exam` int(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `registration_no`, `booklet_no`, `exam`, `time`) VALUES
(5, 'IMC/BIT/11223344', 12123322, 7, '2024-05-31 21:22:09'),
(6, 'IMC/BIT/11223344', 12123322, 7, '2024-05-31 21:22:10'),
(7, 'IMC/BIT/11223344', 12123322, 12, '2024-06-01 05:41:39'),
(8, 'IMC/BIT/11223344', 12123322, 6, '2024-06-01 07:00:18'),
(9, 'IMC/BIT/11223344', 12123322, 11, '2024-06-01 07:01:03'),
(10, 'IMC/BIT/11223344', 12123322, 8, '2024-06-01 07:01:11'),
(11, 'IMC/BIT/11223344', 12123322, 21, '2024-06-01 07:41:08'),
(12, 'IMC/BIT/11223344', 12123322, 14, '2024-06-01 07:45:56'),
(13, 'IMC/BIT/11223344', 12123322, 14, '2024-06-01 07:48:28'),
(14, 'IMC/BIT/11223344', 12123322, 10, '2024-06-01 10:31:48'),
(15, 'IMC/BIT/11223344', 12123322, 11, '2024-06-01 10:34:05'),
(16, 'IMC/BIT/11223344', 12123322, 21, '2024-06-01 10:38:35'),
(17, 'IMC/BIT/11223344', 12123322, 20, '2024-06-01 10:40:31'),
(18, 'IMC/BIT/11223344', 12123322, 18, '2024-06-01 10:40:53'),
(19, 'IMC/BIT/11223344', 12123322, 18, '2024-06-12 19:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `examiner` int(5) NOT NULL,
  `programme` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `code` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `examiner`, `programme`, `year`, `semester`, `code`, `name`, `venue`, `date`) VALUES
(3, 1, 'BIT', 3, 2, 'ITU07108', 'entrepreneurship', 'TH_L', '2024-05-31 22:34:20'),
(4, 2, 'BIT', 3, 2, 'ITU07108', 'entrepreneurship', 'TH_L', '2024-05-31 22:35:39'),
(5, 2, 'BIT', 3, 2, 'ITU07108', 'entrepreneurship', 'TH_L', '2024-05-31 22:36:03'),
(6, 1, 'BIT', 3, 2, 'ITU07108', 'entrepreneurship', 'TH_L', '2024-05-31 22:36:24'),
(7, 1, 'BCS', 1, 1, 'ITU07111', 'advanced web', 'UTL_H', '2024-05-31 23:57:13'),
(8, 2, 'BEF', 3, 1, 'AFU08771', 'business management', 'lab6', '2024-06-01 00:00:14'),
(9, 2, 'BIRM', 1, 1, 'ATU112233', 'INSURANCE ', 'TH_C', '2024-06-01 00:41:05'),
(10, 2, 'BIRM', 1, 1, 'ATU112233', 'INSURANCE ', 'TH_C', '2024-06-01 00:48:23'),
(11, 2, 'BIRM', 1, 1, 'ATU112233', 'INSURANCE ', 'TH_C', '2024-06-01 00:59:39'),
(12, 1, 'BAC', 2, 2, 'BCU112233', 'islamic accountant', 'lab5', '2024-06-01 03:31:45'),
(13, 1, 'BIRM', 1, 1, 'ITU07108', 'Lorem Ipsum', 'TH_L', '2024-06-11 00:04:21'),
(14, 1, 'BCS', 1, 1, 'AFU08771', 'Lorem Ipsum', 'lab5', '2024-06-12 12:44:02'),
(15, 1, 'BAC', 1, 1, 'AFU08771', 'islamic accountant', 'TH_C', '2024-06-13 12:41:41'),
(16, 1, 'BAC', 1, 1, 'BCU112233', 'advanced web', 'lab6', '2024-06-15 12:35:06'),
(17, 1, 'BAC', 1, 1, 'ITU07108', 'islamic accountant', 'lab5', '2024-07-04 11:27:41'),
(18, 1, 'BIRM', 1, 1, 'ATU112233', 'INSURANCE ', 'lab6', '2024-07-04 12:20:42'),
(19, 1, 'BIRM', 1, 1, 'ATU112233', 'INSURANCE ', 'lab6', '2024-07-04 12:29:50'),
(20, 1, 'BAC', 1, 1, 'ATU112233', 'entrepreneurship', '112', '2024-07-04 13:15:35'),
(21, 1, 'BSP', 1, 1, 'SPU112233', 'Social Protection laws', 'MK 7', '2024-07-05 00:24:27'),
(22, 1, 'BAED', 3, 2, 'AFU08771', 'INSURANCE ', 'UTL_H', '2024-07-05 00:35:03'),
(23, 0, 'BCS', 1, 1, 'AFU08771', 'advanced web', '112', '2024-07-05 00:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `password`) VALUES
(1, 'Juma Kuznet', 'kuznet.ifm@gmail.com', 'kuznet123'),
(2, 'Dozzer dozzer', 'dozzer.ifm@gmail.com', 'dozzer123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
