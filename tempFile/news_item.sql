-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2016 at 09:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_item`
--

CREATE TABLE `news_item` (
  `news_id` int(10) NOT NULL COMMENT 'รหัสข่าว',
  `news_category_id` int(10) NOT NULL COMMENT 'รหัสประเภทข่าว',
  `news_staff` int(10) NOT NULL COMMENT 'ผู้เขียนข่าว',
  `news_title_th` varchar(255) NOT NULL COMMENT 'หัวข้อข่าวไทย',
  `news_title_en` varchar(255) NOT NULL COMMENT 'หัวข้อข่าวอังกฤษ',
  `news_text_th` text NOT NULL COMMENT 'เนื้อหาข่าวไทย',
  `news_text_en` text NOT NULL COMMENT 'เนื้อหาข่าวอังกฤษ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_item`
--
ALTER TABLE `news_item`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_item`
--
ALTER TABLE `news_item`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าว';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
