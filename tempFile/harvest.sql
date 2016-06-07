/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-07 21:47:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for harvest
-- ----------------------------
DROP TABLE IF EXISTS `harvest`;
CREATE TABLE `harvest` (
  `harvest_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการเก็บเกี่ยว',
  `crop_id` int(11) NOT NULL COMMENT 'พืชที่ปลูก',
  `harvest_algorithm` varchar(200) NOT NULL COMMENT 'วิธีการเก็บเกียว',
  PRIMARY KEY (`harvest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of harvest
-- ----------------------------
INSERT INTO `harvest` VALUES ('3', '1', 'aaaaa');
INSERT INTO `harvest` VALUES ('4', '14', 'ตัด');
