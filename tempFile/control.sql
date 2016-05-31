/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-31 16:30:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for control
-- ----------------------------
DROP TABLE IF EXISTS `control`;
CREATE TABLE `control` (
  `control_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการควบคุม',
  `crop_problem_id` int(11) NOT NULL COMMENT 'รหัสปัญหาของพืชที่ปลูก',
  `bio_fer_id` int(11) NOT NULL COMMENT 'รหัสสารชีวภาพ/ปุ๋ย',
  `control_detail` varchar(200) NOT NULL COMMENT 'รายละเอียดการควบคุม',
  `cmaount` varchar(50) NOT NULL COMMENT 'จำนวนที่ใช้',
  `unit` varchar(50) NOT NULL COMMENT 'หน่วย',
  PRIMARY KEY (`control_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='การควบคุม';

-- ----------------------------
-- Records of control
-- ----------------------------
INSERT INTO `control` VALUES ('1', '1', '10000001', 'ทดสอบแก้ไข', '20', 'ถุง');
INSERT INTO `control` VALUES ('2', '1', '10000002', 'ทดสอบ', '10', 'ถัง');
