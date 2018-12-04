/*
 Navicat MySQL Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : management

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 04/12/2018 11:08:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for item_table
-- ----------------------------
DROP TABLE IF EXISTS `item_table`;
CREATE TABLE `item_table`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sales_id` int(20) DEFAULT NULL,
  `sales_company` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '销售公司',
  `registrant_date` datetime(0) DEFAULT NULL COMMENT '登记日期',
  `sales_man` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '销售员',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_table
-- ----------------------------
INSERT INTO `item_table` VALUES (2, 201623, 'B公司', '2016-09-18 00:00:00', '李四');
INSERT INTO `item_table` VALUES (3, 201624, 'C公司', '2014-01-03 00:00:00', '王五');

SET FOREIGN_KEY_CHECKS = 1;
