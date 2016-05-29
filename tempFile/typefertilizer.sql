-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 12:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

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
-- Table structure for table `typefertilizer`
--

CREATE TABLE `typefertilizer` (
  `type_fertilizer_id` int(11) NOT NULL COMMENT 'รหัสชนิด',
  `type_fertilizer_name` varchar(200) DEFAULT NULL COMMENT 'ชื่อชนิดปุ๋ย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typefertilizer`
--

INSERT INTO `typefertilizer` (`type_fertilizer_id`, `type_fertilizer_name`) VALUES
(100001, 'ชีวภาพ'),
(100002, 'ไบโอเคมี2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `typefertilizer`
--
ALTER TABLE `typefertilizer`
  ADD PRIMARY KEY (`type_fertilizer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `typefertilizer`
--
ALTER TABLE `typefertilizer`
  MODIFY `type_fertilizer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิด', AUTO_INCREMENT=100005;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
