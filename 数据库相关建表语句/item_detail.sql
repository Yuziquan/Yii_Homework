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

 Date: 04/12/2018 11:07:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for item_detail
-- ----------------------------
DROP TABLE IF EXISTS `item_detail`;
CREATE TABLE `item_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '商品名',
  `product_id` int(10) DEFAULT NULL COMMENT '商品编号',
  `price` decimal(10, 2) DEFAULT NULL COMMENT '单价',
  `count` int(11) DEFAULT NULL COMMENT '数量',
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '种类',
  `table_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_detail
-- ----------------------------
INSERT INTO `item_detail` VALUES (4, '海飞丝洗发水', 2014, 20.00, 5, '日用品', 2);
INSERT INTO `item_detail` VALUES (3, '老坛酸菜牛肉面', 2012, 4.00, 5, '食品', 2);
INSERT INTO `item_detail` VALUES (5, '可口可乐', 2014, 3.00, 90, '饮料', 3);

SET FOREIGN_KEY_CHECKS = 1;
