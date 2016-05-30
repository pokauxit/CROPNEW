-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 05:02 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease_pest_weed`
--

CREATE TABLE `disease_pest_weed` (
  `disease_pest_weed_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL COMMENT 'รหัสที่ปลูกพืช',
  `problem_type_id` int(11) NOT NULL COMMENT 'รหัสชนิดปัญหา',
  `disease_pest_weed_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อโรค/ศัตรูพืช/วัชพืช',
  `disease_pest_weed_detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดของโรค/ศัตรูพืช/วัชพืช'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disease_pest_weed`
--

INSERT INTO `disease_pest_weed` (`disease_pest_weed_id`, `plant_id`, `problem_type_id`, `disease_pest_weed_name`, `disease_pest_weed_detail`) VALUES
(1, 1, 2, 'sdfsdf', 'sadfasdf'),
(2, 1, 1, 'ssssssss', 'aaaaaaaaaa'),
(4, 8, 2, 'ffff', 'ffff'),
(5, 1, 1, 'sssssssssssss', 'ssssssssssss'),
(6, 1, 2, 'sdf', 'sdf'),
(7, 4, 1, 'yyyyyyyyyyyy', 'yyyyyyyyyyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease_pest_weed`
--
ALTER TABLE `disease_pest_weed`
  ADD PRIMARY KEY (`disease_pest_weed_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease_pest_weed`
--
ALTER TABLE `disease_pest_weed`
  MODIFY `disease_pest_weed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
