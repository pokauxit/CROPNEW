/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-13 21:18:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cultivated_area
-- ----------------------------
DROP TABLE IF EXISTS `cultivated_area`;
CREATE TABLE `cultivated_area` (
  `area_sequence` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับของพื้นที่',
  `agriculturist_id` int(11) NOT NULL COMMENT 'รหัสพืชที่ปลูก',
  `soil_id` int(11) NOT NULL COMMENT 'รหัสดิน',
  `lat_map` varchar(20) NOT NULL COMMENT 'ละติจูด',
  `long_map` varchar(20) NOT NULL COMMENT 'ลองติจูด',
  `area_detail` varchar(200) NOT NULL COMMENT 'ข้อมูลพื้นที่',
  `soil_drainage` varchar(100) NOT NULL COMMENT 'การระบายน้ำของดิน',
  `call_area` varchar(100) NOT NULL,
  PRIMARY KEY (`area_sequence`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='พื้นที่เพาะปลูก';

-- ----------------------------
-- Records of cultivated_area
-- ----------------------------
INSERT INTO `cultivated_area` VALUES ('1', '1', '3', '0.99999999', '0.99999999', 'test001', 'test002', 'Anusit');
INSERT INTO `cultivated_area` VALUES ('3', '1', '1', '234234234', '324234234', '32423sfdfsdf', '32423dsffsdf', 'Anusit2');
INSERT INTO `cultivated_area` VALUES ('5', '0', '1', 'ss', 'ss', 'aaa', 'ssss', '');
INSERT INTO `cultivated_area` VALUES ('6', '14', '3', '333', '333', 'ดี', 'ดี', '');
INSERT INTO `cultivated_area` VALUES ('7', '14', '0', '15.174204751663584', '102.3489761352539', '-ถภะ', 'ไำพไำพ', '');
INSERT INTO `cultivated_area` VALUES ('8', '1', '1', '13.767897510377693', '100.90272903442383', 'asdasd', 'sadasdasd', 'sdasdasd');
