/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-29 22:15:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for harvest
-- ----------------------------
DROP TABLE IF EXISTS `harvest`;
CREATE TABLE `harvest` (
  `harvest_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการเก็บเกี่ยว',
  `crop_id` int(11) NOT NULL COMMENT 'พืชที่ปลูก',
  `season` varchar(100) NOT NULL COMMENT 'ฤดูกาล',
  `amout` int(11) DEFAULT NULL COMMENT 'จำนานผลผลิต',
  `unit` varchar(100) DEFAULT NULL COMMENT 'หน่วยผลผลิต',
  PRIMARY KEY (`harvest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of harvest
-- ----------------------------
INSERT INTO `harvest` VALUES ('1', '1', 'ฤดูฝน', '35', 'ตัน');
