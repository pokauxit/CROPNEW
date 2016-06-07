/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-08 00:11:43
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
  `area_sequence` int(11) NOT NULL,
  `agr_standard_id` int(11) NOT NULL,
  `sunlight` varchar(50) NOT NULL COMMENT 'ปริมาณแสง',
  `water_source` varchar(100) NOT NULL COMMENT 'แหล่งน้ำ',
  `wind` double(7,3) NOT NULL COMMENT 'ความเร็วลม',
  `spetial_information` varchar(200) NOT NULL COMMENT 'ข้อมูลพิเศษ',
  PRIMARY KEY (`crop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of crop
-- ----------------------------
INSERT INTO `crop` VALUES ('1', '9', '1', '1', '4', '0', '-', '0.000', '-');
INSERT INTO `crop` VALUES ('2', '8', '1', '3', '4', '13', '-', '0.300', 'ทดสอบ');
