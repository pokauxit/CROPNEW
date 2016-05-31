/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-31 14:17:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for crop_problem
-- ----------------------------
DROP TABLE IF EXISTS `crop_problem`;
CREATE TABLE `crop_problem` (
  `crop_problem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสปัญหาของพืชที่ปลูก',
  `crop_id` int(11) NOT NULL COMMENT 'รหัสพืชที่ปลูก',
  `problem_type_id` int(11) NOT NULL COMMENT 'รหัสชนิดปัญหา',
  `crop_problem_detail` varchar(200) NOT NULL COMMENT 'รายละเอียดปัญหาของพืชที่ปลูก',
  `in_seiouscase` int(5) NOT NULL COMMENT 'ความร้ายแรงของปัญหา',
  `note` varchar(200) NOT NULL,
  PRIMARY KEY (`crop_problem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='ปัญหาของพืชที่ปลูก';

-- ----------------------------
-- Records of crop_problem
-- ----------------------------
INSERT INTO `crop_problem` VALUES ('1', '11', '3', 'sdfsdf', '1', '32454334dsvsdf');
