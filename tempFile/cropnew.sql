-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2016 at 05:46 PM
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
-- Table structure for table `ageiculturist`
--

CREATE TABLE `ageiculturist` (
  `agriculturist_id` int(11) NOT NULL COMMENT 'รหัสเกษตรกร',
  `home_no` varchar(50) NOT NULL COMMENT 'บ้านเลขที่',
  `phone_no` varchar(50) NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  `agriculturist_name` varchar(100) NOT NULL COMMENT 'ชื่อเกษตรกร',
  `tambon_id` int(5) NOT NULL COMMENT 'รหัสตำบล'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ageiculturist`
--

INSERT INTO `ageiculturist` (`agriculturist_id`, `home_no`, `phone_no`, `agriculturist_name`, `tambon_id`) VALUES
(1, '123 ', '0862031581', 'บ้านห้วยไร่', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `plant_id` int(11) NOT NULL COMMENT 'รหัสชนิดพืช',
  `type_id` int(11) NOT NULL COMMENT 'ชื่อชนิด',
  `plant_name` varchar(100) NOT NULL COMMENT 'ชื่อพืช',
  `caltivated_area` varchar(200) NOT NULL COMMENT 'พื้นที่เพราะปลูก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='รหัสพืช';

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`plant_id`, `type_id`, `plant_name`, `caltivated_area`) VALUES
(1, 2, 'คุณนายตื่นสาย', 'ซึ่งควรปลูกอยู่กลางแจ้ง สามารถรับแสงแดดได้ทั้งวัน และควรรดน้ำทุกวันวันละครั้งแต่ระวังอย่าให้น้ำขัง'),
(4, 2, 'วาสนา', 'พื้นหน้าบ้าน'),
(8, 1, 'ดาวเรือง', 'กระถาง');

-- --------------------------------------------------------

--
-- Table structure for table `typeplant`
--

CREATE TABLE `typeplant` (
  `type_id` int(11) NOT NULL COMMENT 'รหัสชนิดพืช',
  `type_name` varchar(100) DEFAULT NULL COMMENT 'ชื่อชนิด',
  `note` varchar(200) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeplant`
--

INSERT INTO `typeplant` (`type_id`, `type_name`, `note`) VALUES
(1, 'ไม้ดอก', 'เช่น เฟื่องฟ้า ชบา ดาวกระจาย บานชื่น คุณนายตื่นสาย ชวนชม โป๊ยเซียน กุหลาบ พวงชมพู่ เป็นต้น'),
(2, 'ไม้ประดับ', 'เช่น หมากผู้หมากเมีย โปร่งฟ้า เฟิร์น พลับพลึง เป็นต้น'),
(3, 'ไม้ผล', 'เช่น มะม่วง องุ่น ขนุน น้อยหน่า แอปเปิ้ล ละมุด ฝรั่ง มังคุด ลำไย เป็นต้น'),
(6, 'พืชผักสวนครัว', 'เช่น ขิง ข่า กะเพรา เป็นต้น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ageiculturist`
--
ALTER TABLE `ageiculturist`
  ADD PRIMARY KEY (`agriculturist_id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`plant_id`);

--
-- Indexes for table `typeplant`
--
ALTER TABLE `typeplant`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ageiculturist`
--
ALTER TABLE `ageiculturist`
  MODIFY `agriculturist_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเกษตรกร', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `plant_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดพืช', AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `typeplant`
--
ALTER TABLE `typeplant`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดพืช', AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
