-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 05:54 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspiroi8`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('inspiroi8', 'our2k18inspiro');

-- --------------------------------------------------------

--
-- Table structure for table `coding`
--

CREATE TABLE `coding` (
  `SL NO` int(11) NOT NULL,
  `NAME` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `coding`
--

INSERT INTO `coding` (`SL NO`, `NAME`, `COLLEGE`) VALUES
(13, 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(15, 'Sayooj', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `gaming`
--

CREATE TABLE `gaming` (
  `SL NO` int(11) NOT NULL,
  `NAME` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `gaming`
--

INSERT INTO `gaming` (`SL NO`, `NAME`, `COLLEGE`) VALUES
(13, 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(15, 'Sayooj', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `SL NO` int(11) NOT NULL,
  `G_ID` varchar(5) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NAME` varchar(25) COLLATE utf32_unicode_ci DEFAULT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`SL NO`, `G_ID`, `NAME`, `COLLEGE`) VALUES
(209, 'M23', 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(210, 'M23', 'JAison', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(211, 'M23', 'jaison', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(212, 'M23', 'aleesha', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `SL NO` int(11) NOT NULL,
  `G_ID` varchar(5) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NAME` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`SL NO`, `G_ID`, `NAME`, `COLLEGE`) VALUES
(107, 'Q23', 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(108, 'Q23', 'agnes', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `registered-college`
--

CREATE TABLE `registered-college` (
  `SL NO` int(11) NOT NULL,
  `NAME` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `PLACE` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `FACULTY NAME` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `PHONE` bigint(20) NOT NULL,
  `PARTICIPANT'S NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `registered-college`
--

INSERT INTO `registered-college` (`SL NO`, `NAME`, `PLACE`, `FACULTY NAME`, `EMAIL`, `PHONE`, `PARTICIPANT'S NUMBER`) VALUES
(1, 'DON BOSCO COLLEGE', 'ANGADIKADAVU', 'DILJITH', 'dkb.jithu@gmail.com', 8978787878, 15);

-- --------------------------------------------------------

--
-- Table structure for table `registered-students`
--

CREATE TABLE `registered-students` (
  `reg-id` int(11) NOT NULL,
  `NAME` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `GENDER` varchar(1) COLLATE utf32_unicode_ci NOT NULL,
  `PHONE` bigint(20) NOT NULL,
  `EMAIL` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `COLLEGE` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `ACCOMMODATION` varchar(5) COLLATE utf32_unicode_ci NOT NULL,
  `FOOD` varchar(15) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `registered-students`
--

INSERT INTO `registered-students` (`reg-id`, `NAME`, `GENDER`, `PHONE`, `EMAIL`, `COLLEGE`, `ACCOMMODATION`, `FOOD`) VALUES
(23, 'Ramees', 'm', 9895709212, '2020@gmail.com', 'DON BOSCO COLLEGE, ANGADIKADAVU', 'yes', 'Non-Vegetarian'),
(24, 'allan', 'f', 8547386716, 'rameeschuthomandy@gmail.com', 'DON BOSCO COLLEGE, ANGADIKADAVU', 'yes', 'Non-Vegetarian'),
(25, 'Sayooj', 'm', 8767879878, 'sayyojp@gmail.com', 'DON BOSCO COLLEGE, ANGADIKADAVU', 'yes', 'Non-Vegetarian');

-- --------------------------------------------------------

--
-- Table structure for table `star of inspiro`
--

CREATE TABLE `star of inspiro` (
  `SL NO` int(11) NOT NULL,
  `NAME` varchar(25) COLLATE utf32_unicode_ci DEFAULT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `star of inspiro`
--

INSERT INTO `star of inspiro` (`SL NO`, `NAME`, `COLLEGE`) VALUES
(7, 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(8, 'allan', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(10, 'Sayooj', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `treasure hunt`
--

CREATE TABLE `treasure hunt` (
  `SL NO` int(11) NOT NULL,
  `G_ID` varchar(5) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NAME` varchar(25) COLLATE utf32_unicode_ci DEFAULT NULL,
  `COLLEGE` varchar(40) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `treasure hunt`
--

INSERT INTO `treasure hunt` (`SL NO`, `G_ID`, `NAME`, `COLLEGE`) VALUES
(176, 'T23', 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(177, 'T23', 'dfdf', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(178, 'T23', 'alesha', 'DON BOSCO COLLEGE, ANGADIKADAVU');

-- --------------------------------------------------------

--
-- Table structure for table `web designing`
--

CREATE TABLE `web designing` (
  `SL NO` int(11) NOT NULL,
  `G_ID` varchar(5) COLLATE utf32_unicode_ci DEFAULT NULL,
  `NAME` varchar(25) COLLATE utf32_unicode_ci NOT NULL,
  `COLLEGE` varchar(50) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `web designing`
--

INSERT INTO `web designing` (`SL NO`, `G_ID`, `NAME`, `COLLEGE`) VALUES
(97, 'W23', 'Ramees', 'DON BOSCO COLLEGE, ANGADIKADAVU'),
(98, 'W23', 'ANJU', 'DON BOSCO COLLEGE, ANGADIKADAVU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `coding`
--
ALTER TABLE `coding`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `gaming`
--
ALTER TABLE `gaming`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `registered-college`
--
ALTER TABLE `registered-college`
  ADD PRIMARY KEY (`SL NO`);

--
-- Indexes for table `registered-students`
--
ALTER TABLE `registered-students`
  ADD PRIMARY KEY (`reg-id`),
  ADD UNIQUE KEY `PHONE` (`PHONE`,`EMAIL`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `star of inspiro`
--
ALTER TABLE `star of inspiro`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `treasure hunt`
--
ALTER TABLE `treasure hunt`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- Indexes for table `web designing`
--
ALTER TABLE `web designing`
  ADD UNIQUE KEY `SL NO` (`SL NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coding`
--
ALTER TABLE `coding`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gaming`
--
ALTER TABLE `gaming`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `registered-college`
--
ALTER TABLE `registered-college`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered-students`
--
ALTER TABLE `registered-students`
  MODIFY `reg-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `star of inspiro`
--
ALTER TABLE `star of inspiro`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `treasure hunt`
--
ALTER TABLE `treasure hunt`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `web designing`
--
ALTER TABLE `web designing`
  MODIFY `SL NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
