/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-12 12:33:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fertilizer_unit
-- ----------------------------
DROP TABLE IF EXISTS `fertilizer_unit`;
CREATE TABLE `fertilizer_unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(100) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fertilizer_unit
-- ----------------------------
INSERT INTO `fertilizer_unit` VALUES ('3', 'Anusit');
INSERT INTO `fertilizer_unit` VALUES ('4', 'zxczxcxcz');
INSERT INTO `fertilizer_unit` VALUES ('5', 'zxczxcz');
INSERT INTO `fertilizer_unit` VALUES ('6', 'sadasd');
INSERT INTO `fertilizer_unit` VALUES ('7', 'asdasdasd');
