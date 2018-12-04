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

 Date: 04/12/2018 11:08:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sales_return_table
-- ----------------------------
DROP TABLE IF EXISTS `sales_return_table`;
CREATE TABLE `sales_return_table`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `salesreturn_id` int(20) DEFAULT NULL,
  `sales_id` int(20) DEFAULT NULL,
  `return_company` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `salesman` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `handler` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `return_date` datetime(0) DEFAULT NULL COMMENT '退货日期',
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '退货原因',
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '备注',
  `return_department` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '退货部门',
  `check` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '审核',
  `warehouse_id` int(10) DEFAULT NULL COMMENT '收货仓库',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sales_return_table
-- ----------------------------
INSERT INTO `sales_return_table` VALUES (1, 411, 201623, 'ABC公司', '张安1', '李斯', '2016-05-12 00:00:00', '', '', '', '', 51);
INSERT INTO `sales_return_table` VALUES (2, 412, 512, '111', '111', '111', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
