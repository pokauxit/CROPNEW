/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-29 19:50:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for apply_fertilizer
-- ----------------------------
DROP TABLE IF EXISTS `apply_fertilizer`;
CREATE TABLE `apply_fertilizer` (
  `apply_fertilizer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการให้ปุ๋ย',
  `crop_id` int(11) NOT NULL COMMENT 'รหัสพืชที่ปลูก',
  `bio_fer_id` int(11) NOT NULL COMMENT 'รหัสปุ๋ย',
  `apply_fertilizer_amout` int(11) NOT NULL COMMENT 'จำนวนการให้ปุ้ย',
  `apply_fertiltzer_unit` varchar(50) NOT NULL COMMENT 'หน่วยการให้ปุ๋ย',
  `appy_fertilizer_frequency` varchar(100) NOT NULL COMMENT 'ความถี่ในการให้ป๋ย',
  PRIMARY KEY (`apply_fertilizer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='การให้ปุ๋ย';

-- ----------------------------
-- Records of apply_fertilizer
-- ----------------------------
INSERT INTO `apply_fertilizer` VALUES ('1', '1', '10000001', '111', '111', '111');
INSERT INTO `apply_fertilizer` VALUES ('3', '1', '10000001', '324234', '324234dfgdfgdf', 'gdfgdfgdfg');
