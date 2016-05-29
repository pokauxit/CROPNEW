/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-30 00:26:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cultivated_area
-- ----------------------------
DROP TABLE IF EXISTS `cultivated_area`;
CREATE TABLE `cultivated_area` (
  `area_sequence` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับของพื้นที่',
  `crop_id` int(11) NOT NULL COMMENT 'รหัสพืชที่ปลูก',
  `soil_id` int(11) NOT NULL COMMENT 'รหัสดิน',
  `lat` varchar(10) NOT NULL COMMENT 'ละติจูด',
  `long` varchar(10) NOT NULL COMMENT 'ลองติจูด',
  `area_detail` varchar(200) NOT NULL COMMENT 'ข้อมูลพื้นที่',
  `soil_drainage` varchar(100) NOT NULL COMMENT 'การระบายน้ำของดิน',
  PRIMARY KEY (`area_sequence`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='พื้นที่เพาะปลูก';

-- ----------------------------
-- Records of cultivated_area
-- ----------------------------
INSERT INTO `cultivated_area` VALUES ('1', '1', '3', '0.99999999', '0.99999999', 'test001', 'test002');
INSERT INTO `cultivated_area` VALUES ('3', '1', '0', '234234234', '324234234', '32423sfdfsdf', '32423dsffsdf');
