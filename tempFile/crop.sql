/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-28 17:28:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for crop
-- ----------------------------
DROP TABLE IF EXISTS `crop`;
CREATE TABLE `crop` (
  `crop_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสพืชที่ปลูก',
  `plant_id` int(11) NOT NULL COMMENT 'รหัสพืช',
  `argiculturist_id` int(11) NOT NULL COMMENT 'รหัสเกษตร',
  `sunlight` varchar(50) NOT NULL COMMENT 'ปริมาณแสง',
  `water_source` varchar(100) NOT NULL COMMENT 'แหล่งน้ำ',
  `wind` double(7,3) NOT NULL COMMENT 'ความเร็วลม',
  `spetial_information` varchar(200) NOT NULL COMMENT 'ข้อมูลพิเศษ',
  PRIMARY KEY (`crop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
