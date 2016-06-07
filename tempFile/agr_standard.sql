/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-07 22:55:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agr_standard
-- ----------------------------
DROP TABLE IF EXISTS `agr_standard`;
CREATE TABLE `agr_standard` (
  `crop_standard_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสลำดับ',
  `agriculturist_id` int(11) NOT NULL COMMENT 'รหัสพืชที่ปลูก',
  `sid` int(11) NOT NULL COMMENT 'รหัสมาตรฐาน',
  `start_year` int(4) NOT NULL COMMENT 'ปีที่ได้รับมาตรฐาน',
  `end_year` int(4) NOT NULL COMMENT 'ปีที่สิ้นสุด',
  `remark` varchar(100) NOT NULL COMMENT 'noteเพิ่มเติม',
  PRIMARY KEY (`crop_standard_id`),
  KEY `corp_id` (`agriculturist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agr_standard
-- ----------------------------
INSERT INTO `agr_standard` VALUES ('2', '0', '3', '2558', '2560', 'dsfsdfsdfsdfsdf');
INSERT INTO `agr_standard` VALUES ('4', '1', '4', '2558', '2560', 'test');
