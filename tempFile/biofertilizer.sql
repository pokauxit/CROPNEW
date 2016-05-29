-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 12:43 PM
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
-- Table structure for table `biofertilizer`
--

CREATE TABLE `biofertilizer` (
  `bio_fer_id` int(11) NOT NULL COMMENT 'รหัสสารชีวภาพ/ปุ๋ย',
  `type_fertilizer_id` int(11) NOT NULL COMMENT 'ชนิดปุ๋ย',
  `bio_fer_name` varchar(100) NOT NULL COMMENT 'ชื่อสารชีวภาพ/ปุ๋ย',
  `bio_fer_properties` varchar(200) NOT NULL COMMENT 'คุณสมบัติสารชีวภาพ/ปุ๋ย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='สารชีวภาพ/ปุ๋ย';

--
-- Dumping data for table `biofertilizer`
--

INSERT INTO `biofertilizer` (`bio_fer_id`, `type_fertilizer_id`, `bio_fer_name`, `bio_fer_properties`) VALUES
(10000001, 100002, 'EM', 'ปุ๋ย EM'),
(10000002, 100001, 'ไนโตรเจน', 'type_fertilizer_name'),
(10000004, 100002, 'ปุ๋ยหมักหอยเชอรี่', 'ปุ๋ยหมักหอยเชอรี่ บำรุงราก ใบ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biofertilizer`
--
ALTER TABLE `biofertilizer`
  ADD PRIMARY KEY (`bio_fer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biofertilizer`
--
ALTER TABLE `biofertilizer`
  MODIFY `bio_fer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสารชีวภาพ/ปุ๋ย', AUTO_INCREMENT=10000005;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
