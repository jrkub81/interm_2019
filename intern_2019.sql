-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 05:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `in_cars`
--

CREATE TABLE `in_cars` (
  `in_carsid` int(11) NOT NULL,
  `in_carsbrand` varchar(20) NOT NULL,
  `in_carsmodel` varchar(20) NOT NULL,
  `in_carsyear` varchar(20) NOT NULL,
  `in_carscolor` varchar(20) NOT NULL,
  `in_carscolorcode` varchar(20) NOT NULL,
  `in_carstype` varchar(100) NOT NULL,
  `in_carscountry` varchar(50) NOT NULL,
  `in_carsengine` smallint(6) NOT NULL,
  `in_carsprice` int(11) NOT NULL,
  `in_carsimgname` varchar(250) NOT NULL,
  `in_carsimgdir` varchar(250) NOT NULL,
  `creatTIME` datetime NOT NULL,
  `updateTIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cars`
--

INSERT INTO `in_cars` (`in_carsid`, `in_carsbrand`, `in_carsmodel`, `in_carsyear`, `in_carscolor`, `in_carscolorcode`, `in_carstype`, `in_carscountry`, `in_carsengine`, `in_carsprice`, `in_carsimgname`, `in_carsimgdir`, `creatTIME`, `updateTIME`) VALUES
(2, '1', 'REVO', '1990', 'Black', '#110000', '4', '4', 1800, 1500000, '24072019113556tomkillyouself.jpg', 'C:xampp	mpphp8E9D.tmp', '2018-06-27 04:13:07', '2019-07-24 09:35:56'),
(3, '1', 'JAZZ', '1996', 'Black', '#000000', '6', '2', 1500, 600000, '24072019105409cartwo.png', 'C:xampp	mpphp4BB0.tmp', '2017-10-03 05:16:22', '2019-07-24 08:54:09'),
(5, '4', 'MU-X', '2016', 'Sliver', '#C0C0C0', '5', '1', 3000, 900000, '26072019075150Chan-ocha.jpg', 'C:xampp	mpphpC1BE.tmp', '2016-06-12 10:18:01', '2019-07-26 05:51:50'),
(6, '4', 'M3', '2019', 'Gold', '#D3CC74', '1', '1', 1200, 3000000, '', '', '2019-05-05 11:13:16', '2019-07-04 08:38:25'),
(7, '1', 'CHR', '2019', 'Red', '#db0824', '3', '1', 3000, 15000000, '', '', '2019-07-10 10:16:12', '2019-07-04 08:38:28'),
(9, '2', 'Brio', '2020', 'Black', '#000000', '2', '1', 1200, 9000000, '', '', '2019-07-01 12:16:09', '2019-07-04 08:38:31'),
(10, '2', 'BRV', '2077', 'Red', '#db0824', '1', '1', 1500, 12000000, '', '', '2019-07-01 12:16:06', '2019-07-04 08:38:35'),
(11, '1', 'D-MAX', '2077', 'Black', '#000000', '1', '1', 2000, 99999, '', '', '2019-07-01 12:46:25', '2019-07-04 08:38:38'),
(12, '2', 'YARIS', '2001', 'Red', '#db0824', '1', '1', 2000, 1800000, '', '', '2019-07-02 14:30:48', '2019-07-04 08:38:41'),
(13, '1', 'CHR', '1990', 'Red', '#db0824', '2', '1', 2000, 9999999, '', '', '2019-07-03 12:02:29', '2019-07-04 08:38:44'),
(14, '3', 'D-MAX', '2005', 'Black', '#000000', '5', '2', 1500, 250000, '', '', '2019-07-03 12:08:31', '2019-07-04 08:38:46'),
(15, '1', 'Camry', '2017', 'Black', '#000000', '3', '3', 2000, 1800000, '', '', '2019-07-04 10:51:37', '2019-07-04 08:38:49'),
(16, '3', 'D-MAX', '2002', 'Black', '#000000', '5', '2', 1300, 600000, '', '', '2019-07-04 15:58:06', '2019-07-04 08:58:06'),
(27, '1', 'D-MAX', '1990', 'Black', '#000000', '3', '3', 2000, 1500000, '26072019060834drunktom.jpg', 'C:xampp	mpphp385E.tmp', '2019-07-26 11:00:55', '2019-07-26 04:08:34'),
(28, '1', 'REVO', '1990', 'Black', '#000000', '2', '3', 1200, 900000, '26072019062729Chan-ocha.jpg', 'C:xampp	mpphp8B20.tmp', '2019-07-26 11:23:23', '2019-07-26 04:27:29'),
(29, '3', 'D-MAX', '2000', 'Red', '#db0824', '3', '1', 1500, 300000, '26072019062738answer.jpg', 'C:xampp	mpphpAB2C.tmp', '2019-07-26 11:26:57', '2019-07-26 04:27:38'),
(33, '5', 'Brio', '1998', 'Red', '#db0824', '2', '3', 1200, 15000000, '26072019071509', 'C:xampp	mpphp2C15.tmp', '2019-07-26 12:15:09', '2019-07-26 05:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `in_carsbrand`
--

CREATE TABLE `in_carsbrand` (
  `cb_id` int(11) NOT NULL,
  `cb_name` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_carsbrand`
--

INSERT INTO `in_carsbrand` (`cb_id`, `cb_name`, `creatdate`, `updatedate`) VALUES
(1, 'TOYOTA', '0000-00-00 00:00:00', '2019-07-04 08:33:26'),
(2, 'HONDA', '0000-00-00 00:00:00', '2019-07-04 08:33:26'),
(3, 'ISUSU', '0000-00-00 00:00:00', '2019-07-04 08:33:26'),
(4, 'ฺBMW', '0000-00-00 00:00:00', '2019-07-04 08:33:26'),
(5, 'Nissan', '0000-00-00 00:00:00', '2019-07-04 09:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `in_carscolor`
--

CREATE TABLE `in_carscolor` (
  `cl_id` int(11) NOT NULL,
  `cl_name` varchar(250) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_carscolor`
--

INSERT INTO `in_carscolor` (`cl_id`, `cl_name`, `creatdate`, `updatedate`) VALUES
(1, 'Red', '0000-00-00 00:00:00', '2019-07-08 09:01:35'),
(2, 'Green', '0000-00-00 00:00:00', '2019-07-08 09:01:35'),
(3, 'Blue', '0000-00-00 00:00:00', '2019-07-08 09:01:35'),
(4, 'Bronze', '0000-00-00 00:00:00', '2019-07-08 09:01:35'),
(5, 'Black', '0000-00-00 00:00:00', '2019-07-08 09:01:35'),
(6, 'White', '0000-00-00 00:00:00', '2019-07-08 09:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `in_carscolorcode`
--

CREATE TABLE `in_carscolorcode` (
  `clc_id` int(11) NOT NULL,
  `clc_name` varchar(250) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_carscolorcode`
--

INSERT INTO `in_carscolorcode` (`clc_id`, `clc_name`, `creatdate`, `updatedate`) VALUES
(1, '#ff0000', '0000-00-00 00:00:00', '2019-07-08 09:05:06'),
(2, '#00cc00', '0000-00-00 00:00:00', '2019-07-08 09:05:06'),
(3, '#0000cc', '0000-00-00 00:00:00', '2019-07-08 09:05:06'),
(4, '#999966', '0000-00-00 00:00:00', '2019-07-08 09:05:06'),
(5, '#000000', '0000-00-00 00:00:00', '2019-07-08 09:05:06'),
(6, '#ffffff', '0000-00-00 00:00:00', '2019-07-08 09:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `in_carscountry`
--

CREATE TABLE `in_carscountry` (
  `cc_id` int(11) NOT NULL,
  `cc_name` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_carscountry`
--

INSERT INTO `in_carscountry` (`cc_id`, `cc_name`, `creatdate`, `updatedate`) VALUES
(1, 'Japan', '2019-07-02 16:39:23', '2019-07-05 04:35:58'),
(2, 'Europe', '2019-07-02 00:00:00', '2019-07-02 09:40:00'),
(3, 'America', '0000-00-00 00:00:00', '2019-07-04 03:57:46'),
(4, 'China', '0000-00-00 00:00:00', '2019-07-04 03:57:46'),
(6, 'Thailand', '2019-07-04 12:46:34', '2019-07-04 05:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `in_carstype`
--

CREATE TABLE `in_carstype` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_carstype`
--

INSERT INTO `in_carstype` (`ct_id`, `ct_name`, `creatdate`, `updatedate`) VALUES
(1, 'รถยนต์อเนกประสงค์สมรรถนะสูงขนาดใหญ่', '2019-07-02 16:38:23', '2019-07-02 09:38:27'),
(2, 'รถยนต์อเนกประสงค์สมรรถนะสูงขนาดเล็ก', '2019-07-02 16:38:23', '2019-07-02 09:38:43'),
(3, 'รถยนต์อเนกประสงค์สมรรถนะสูงขนาดกลาง', '0000-00-00 00:00:00', '2019-07-03 03:51:01'),
(4, 'รถยนต์กระบะขนาดใหญ่', '0000-00-00 00:00:00', '2019-07-03 03:53:47'),
(5, 'รถยนต์กระบะขนาดกลาง', '0000-00-00 00:00:00', '2019-07-03 03:53:36'),
(6, 'รถยนต์ขนาดกระบะเล็ก', '0000-00-00 00:00:00', '2019-07-03 03:53:40'),
(7, 'N/A', '0000-00-00 00:00:00', '2019-07-03 03:51:01'),
(8, 'รถจักรยานยนต์ขนาดใหญ่', '2019-07-04 14:24:19', '2019-07-04 07:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `in_cm_bmw`
--

CREATE TABLE `in_cm_bmw` (
  `cm_bmwid` int(11) NOT NULL,
  `cm_bmwname` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cm_bmw`
--

INSERT INTO `in_cm_bmw` (`cm_bmwid`, `cm_bmwname`, `creatdate`, `updatedate`) VALUES
(1, 'Series', '0000-00-00 00:00:00', '2019-07-08 04:01:54'),
(2, 'Z4', '0000-00-00 00:00:00', '2019-07-08 04:01:54'),
(3, 'M7', '0000-00-00 00:00:00', '2019-07-08 04:01:54'),
(4, 'X2', '0000-00-00 00:00:00', '2019-07-08 04:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `in_cm_honda`
--

CREATE TABLE `in_cm_honda` (
  `cm_hdid` int(11) NOT NULL,
  `cm_hdname` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cm_honda`
--

INSERT INTO `in_cm_honda` (`cm_hdid`, `cm_hdname`, `creatdate`, `updatedate`) VALUES
(1, 'BR-V', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(2, 'Accord', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(3, 'Civic', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(4, 'HR-V', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(5, 'Jazz', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(6, 'City', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(7, 'Mobilio', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(8, 'CR-V', '0000-00-00 00:00:00', '2019-07-08 03:59:10'),
(9, 'Brio', '0000-00-00 00:00:00', '2019-07-08 03:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `in_cm_isusu`
--

CREATE TABLE `in_cm_isusu` (
  `cm_issid` int(11) NOT NULL,
  `cm_issname` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cm_isusu`
--

INSERT INTO `in_cm_isusu` (`cm_issid`, `cm_issname`, `creatdate`, `updatedate`) VALUES
(1, 'D-MAX', '0000-00-00 00:00:00', '2019-07-08 03:56:24'),
(2, 'MU-X', '0000-00-00 00:00:00', '2019-07-08 03:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `in_cm_nissan`
--

CREATE TABLE `in_cm_nissan` (
  `cm_nsid` int(11) NOT NULL,
  `cm_nsname` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cm_nissan`
--

INSERT INTO `in_cm_nissan` (`cm_nsid`, `cm_nsname`, `creatdate`, `updatedate`) VALUES
(1, 'Almera', '0000-00-00 00:00:00', '2019-07-08 03:53:42'),
(2, 'Navara', '0000-00-00 00:00:00', '2019-07-08 03:53:42'),
(3, 'Teana', '0000-00-00 00:00:00', '2019-07-08 03:53:42'),
(4, 'X-Trail', '0000-00-00 00:00:00', '2019-07-08 03:53:42'),
(5, 'Terra', '0000-00-00 00:00:00', '2019-07-08 03:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `in_cm_toyota`
--

CREATE TABLE `in_cm_toyota` (
  `cm_tytid` int(11) NOT NULL,
  `cm_tytname` varchar(500) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_cm_toyota`
--

INSERT INTO `in_cm_toyota` (`cm_tytid`, `cm_tytname`, `creatdate`, `updatedate`) VALUES
(1, 'Revo', '0000-00-00 00:00:00', '2019-07-05 03:38:57'),
(2, 'Vios', '0000-00-00 00:00:00', '2019-07-05 03:38:57'),
(3, 'Avanza', '0000-00-00 00:00:00', '2019-07-05 03:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `in_mydata`
--

CREATE TABLE `in_mydata` (
  `md_id` int(11) NOT NULL,
  `md_test` varchar(500) NOT NULL,
  `md_info` varchar(500) NOT NULL,
  `md_record` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_mydata`
--

INSERT INTO `in_mydata` (`md_id`, `md_test`, `md_info`, `md_record`) VALUES
(1, 'JR', 'CSMJU2', '2019-06-28 06:21:21'),
(2, 'JRhahaha', 'fat man', '2019-06-28 06:21:48'),
(3, 'JRCSMJU', 'lol', '2019-06-28 05:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `in_user`
--

CREATE TABLE `in_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_status` varchar(20) NOT NULL,
  `user_nickname` varchar(250) NOT NULL,
  `user_brithday` date NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` int(10) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_image` varchar(250) NOT NULL,
  `creatdate` datetime NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `in_user`
--

INSERT INTO `in_user` (`user_id`, `user_name`, `user_password`, `user_status`, `user_nickname`, `user_brithday`, `user_email`, `user_phone`, `user_address`, `user_image`, `creatdate`, `updatedate`) VALUES
(1, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'user', 'JayR', '1998-05-25', 'jrkub81@gmail.com', 123456789, '317/5555/99999', '', '0000-00-00 00:00:00', '2019-07-19 05:01:11'),
(2, 'bbb', 'bbb', 'user', '', '0000-00-00', '', 895552855, '', '', '0000-00-00 00:00:00', '2019-07-18 09:22:17'),
(3, 'Mongkhon', '123', 'admin', '', '0000-00-00', '', 2147483647, '', '', '2019-07-11 14:52:56', '2019-07-18 09:22:25'),
(4, 'jr', 'eee', 'user', '', '0000-00-00', '', 0, '', '', '2019-07-12 12:03:02', '2019-07-18 09:20:56'),
(5, 'ttt', '81dc9bdb52d04dc20036dbd8313ed055', 'user', '', '0000-00-00', '', 0, '', '', '2019-07-12 12:05:15', '2019-07-18 09:21:00'),
(6, 'zzz', 'c6f057b86584942e415435ffb1fa93d4', 'user', '', '0000-00-00', '', 0, '', '', '2019-07-12 14:31:37', '2019-07-18 09:21:02'),
(7, 'xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'user', '', '0000-00-00', '', 0, '', '', '2019-07-12 15:09:16', '2019-07-18 09:21:06'),
(8, 'yyy', 'f0a4058fd33489695d53df156b77c724', 'user', 'คุณY', '0000-00-00', '', 0, '', '', '2019-07-18 11:57:08', '2019-07-18 09:21:09'),
(9, 'qqq', 'b2ca678b4c936f905fb82f2733f5297f', '', '', '0000-00-00', '', 0, '', '', '2019-07-19 12:21:31', '2019-07-19 05:21:31'),
(10, 'www', '4eae35f1b35977a00ebd8086c259d4c9', '', '', '0000-00-00', '', 0, '', '', '2019-07-19 12:39:52', '2019-07-19 05:39:52'),
(11, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', '', '', '0000-00-00', '', 0, '', '', '2019-07-19 12:43:26', '2019-07-19 05:43:26'),
(12, 'test', 'a1aafa76fcb7b6f51ce44ed14382089c', '', 'Mongkol', '0000-00-00', '', 0, '', '', '2019-07-22 15:33:51', '2019-07-22 08:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `in_cars`
--
ALTER TABLE `in_cars`
  ADD PRIMARY KEY (`in_carsid`);

--
-- Indexes for table `in_carsbrand`
--
ALTER TABLE `in_carsbrand`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `in_carscolor`
--
ALTER TABLE `in_carscolor`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `in_carscolorcode`
--
ALTER TABLE `in_carscolorcode`
  ADD PRIMARY KEY (`clc_id`);

--
-- Indexes for table `in_carscountry`
--
ALTER TABLE `in_carscountry`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `in_carstype`
--
ALTER TABLE `in_carstype`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `in_cm_bmw`
--
ALTER TABLE `in_cm_bmw`
  ADD PRIMARY KEY (`cm_bmwid`);

--
-- Indexes for table `in_cm_honda`
--
ALTER TABLE `in_cm_honda`
  ADD PRIMARY KEY (`cm_hdid`);

--
-- Indexes for table `in_cm_isusu`
--
ALTER TABLE `in_cm_isusu`
  ADD PRIMARY KEY (`cm_issid`);

--
-- Indexes for table `in_cm_nissan`
--
ALTER TABLE `in_cm_nissan`
  ADD PRIMARY KEY (`cm_nsid`);

--
-- Indexes for table `in_cm_toyota`
--
ALTER TABLE `in_cm_toyota`
  ADD PRIMARY KEY (`cm_tytid`);

--
-- Indexes for table `in_mydata`
--
ALTER TABLE `in_mydata`
  ADD PRIMARY KEY (`md_id`);

--
-- Indexes for table `in_user`
--
ALTER TABLE `in_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `in_cars`
--
ALTER TABLE `in_cars`
  MODIFY `in_carsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `in_carsbrand`
--
ALTER TABLE `in_carsbrand`
  MODIFY `cb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `in_carscolor`
--
ALTER TABLE `in_carscolor`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `in_carscolorcode`
--
ALTER TABLE `in_carscolorcode`
  MODIFY `clc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `in_carscountry`
--
ALTER TABLE `in_carscountry`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `in_carstype`
--
ALTER TABLE `in_carstype`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `in_cm_bmw`
--
ALTER TABLE `in_cm_bmw`
  MODIFY `cm_bmwid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `in_cm_honda`
--
ALTER TABLE `in_cm_honda`
  MODIFY `cm_hdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `in_cm_isusu`
--
ALTER TABLE `in_cm_isusu`
  MODIFY `cm_issid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `in_cm_nissan`
--
ALTER TABLE `in_cm_nissan`
  MODIFY `cm_nsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `in_cm_toyota`
--
ALTER TABLE `in_cm_toyota`
  MODIFY `cm_tytid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `in_mydata`
--
ALTER TABLE `in_mydata`
  MODIFY `md_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `in_user`
--
ALTER TABLE `in_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
