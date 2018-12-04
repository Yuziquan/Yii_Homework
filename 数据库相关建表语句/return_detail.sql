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

 Date: 04/12/2018 11:08:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for return_detail
-- ----------------------------
DROP TABLE IF EXISTS `return_detail`;
CREATE TABLE `return_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `table_id` int(20) DEFAULT NULL COMMENT '销售单单号',
  `product_id` int(20) DEFAULT NULL COMMENT '商品编号',
  `product_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '商品名称',
  `product_number` int(10) DEFAULT NULL COMMENT '退货数量',
  `return_date` datetime(0) DEFAULT NULL,
  `registrant` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `return_money` int(15) DEFAULT NULL,
  `consignee` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `product_units` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '退货单位',
  `product_specification` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '退货规格',
  `register_date` datetime(0) DEFAULT NULL COMMENT '登记日期',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of return_detail
-- ----------------------------
INSERT INTO `return_detail` VALUES (1, 1, 20180001, '多宝鱼', 20, '2018-09-13 00:00:00', '张三', 500, '李斯', '', '', '0000-00-00 00:00:00');
INSERT INTO `return_detail` VALUES (2, 1, 1, '1', 1, '0000-00-00 00:00:00', '1', 1, '1', '1', '1', '0000-00-00 00:00:00');
INSERT INTO `return_detail` VALUES (3, 1, 20180002, 'ee ', 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
