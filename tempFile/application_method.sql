/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-29 13:45:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for application_method
-- ----------------------------
DROP TABLE IF EXISTS `application_method`;
CREATE TABLE `application_method` (
  `step` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับขั้นตอน',
  `crop_id` int(11) NOT NULL COMMENT 'พืชที่ปลูก',
  `step_detail` varchar(200) NOT NULL COMMENT 'รายละเอียด',
  `time_start` date DEFAULT NULL COMMENT 'เวลาที่เริ่มปลูก',
  `fertiltzer_peroid` varchar(50) DEFAULT NULL COMMENT 'ช่วงเวลาที่ให้ปุ๋ย',
  PRIMARY KEY (`step`,`crop_id`),
  KEY `crop_id` (`crop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of application_method
-- ----------------------------
INSERT INTO `application_method` VALUES ('4', '1', 'ทดสอบขั้นตอน 1', '2016-10-01', 'เช้า เที่ยง เย็น หรือเวลาไม่มีแดด');
INSERT INTO `application_method` VALUES ('5', '1', 'atyutyutyu6574567567567567', null, 'gfhgfjghkhl');
