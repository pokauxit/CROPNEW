/*
Navicat MySQL Data Transfer

Source Server         : Localhost-Xampp
Source Server Version : 50505
Source Host           : 127.0.0.1:3307
Source Database       : auxit_crop_new

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-06-07 21:49:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการเก็บเกี่ยว',
  `crop_id` int(11) NOT NULL COMMENT 'พืชที่ปลูก',
  `season` varchar(100) NOT NULL COMMENT 'วิธีการเก็บเกียว',
  `amout` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('4', '14', 'ตัด', '', '');
INSERT INTO `product` VALUES ('6', '1', 'ฤดูหนาว', '15', 'กิโลกรัม');
