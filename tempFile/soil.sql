/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-29 00:46:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for soil
-- ----------------------------
DROP TABLE IF EXISTS `soil`;
CREATE TABLE `soil` (
  `soil_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสดิน',
  `soil_name` varchar(50) NOT NULL COMMENT 'ชื่อของดิน',
  `soil_type` int(5) NOT NULL COMMENT 'ชนิดของดิน',
  `soil_factor` varchar(200) NOT NULL COMMENT 'จุดเด่นของดิน',
  `soil_problem` varchar(200) NOT NULL COMMENT 'ปัญหาของดิน',
  `soil_nutrition` varchar(200) NOT NULL COMMENT 'คุณค่าของดิน',
  PRIMARY KEY (`soil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of soil
-- ----------------------------
INSERT INTO `soil` VALUES ('1', 'ฟหกฟหก', '1', 'ฟหกฟหก', 'ฟหกฟหกฟหก', 'หฟกฟหกฟหก');
INSERT INTO `soil` VALUES ('3', 'Anusit', '3', 'Khuandee', 'TEst', 'VAlue');
