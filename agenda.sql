/*
Navicat MySQL Data Transfer

Source Server         : locallhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : agenda

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-06-29 12:01:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tblp_agenda
-- ----------------------------
DROP TABLE IF EXISTS `tblp_agenda`;
CREATE TABLE `tblp_agenda` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT '',
  `numero` varchar(255) DEFAULT '',
  `descripcion` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tblp_agenda
-- ----------------------------
INSERT INTO `tblp_agenda` VALUES ('1', 'Jon', '9611', 'a');
INSERT INTO `tblp_agenda` VALUES ('2', 'Carl', '9612', 'b');
INSERT INTO `tblp_agenda` VALUES ('3', 'Gera', '9613', 'c');
INSERT INTO `tblp_agenda` VALUES ('4', 'Vic', '9614', 'd');
INSERT INTO `tblp_agenda` VALUES ('5', 'Moi', '9615', 'e');
INSERT INTO `tblp_agenda` VALUES ('8', 'Mich', '9616', 'f');
