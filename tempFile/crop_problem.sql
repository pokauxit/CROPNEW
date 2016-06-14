/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-14 22:22:12
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
  `disease_pest_weed_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL,
  PRIMARY KEY (`crop_problem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='ปัญหาของพืชที่ปลูก';

-- ----------------------------
-- Records of crop_problem
-- ----------------------------
INSERT INTO `crop_problem` VALUES ('1', '11', '3', 'sdfsdf', '1', '32454334dsvsdf', '0', '0');
INSERT INTO `crop_problem` VALUES ('2', '14', '1', 'dddd', '1', 'sfddd', '0', '0');
INSERT INTO `crop_problem` VALUES ('3', '1', '1', 'ใบหยิกงอ', '1', '-', '7', '0');
INSERT INTO `crop_problem` VALUES ('4', '1', '2', 'test', '0', 'testtest', '6', '0');
INSERT INTO `crop_problem` VALUES ('5', '1', '1', 'dfgdfg', '1', 'dfgdfgdfg', '2', '0');
INSERT INTO `crop_problem` VALUES ('6', '5', '2', 'erertert', '1', 'ertertertet', '13', '0');
