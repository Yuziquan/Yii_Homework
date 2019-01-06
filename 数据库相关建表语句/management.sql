/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : management

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 16/12/2018 20:58:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for item_detail
-- ----------------------------
DROP TABLE IF EXISTS `item_detail`;
CREATE TABLE `item_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品名',
  `product_id` int(10) NULL DEFAULT NULL COMMENT '商品编号',
  `price` decimal(10, 2) NULL DEFAULT NULL COMMENT '单价',
  `count` int(11) NULL DEFAULT NULL COMMENT '数量',
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '种类',
  `table_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_detail
-- ----------------------------
INSERT INTO `item_detail` VALUES (4, '海飞丝洗发水', 2014, 20.00, 5, '日用品', 2);
INSERT INTO `item_detail` VALUES (3, '老坛酸菜牛肉面', 2012, 4.00, 5, '食品', 2);
INSERT INTO `item_detail` VALUES (5, '可口可乐', 2014, 3.00, 90, '饮料', 3);

-- ----------------------------
-- Table structure for item_table
-- ----------------------------
DROP TABLE IF EXISTS `item_table`;
CREATE TABLE `item_table`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sales_id` int(20) NULL DEFAULT NULL,
  `sales_company` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '销售公司',
  `registrant_date` datetime(0) NULL DEFAULT NULL COMMENT '登记日期',
  `sales_man` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '销售员',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of item_table
-- ----------------------------
INSERT INTO `item_table` VALUES (2, 201623, 'B公司', '2016-09-18 00:00:00', '李四');
INSERT INTO `item_table` VALUES (3, 201624, 'C公司', '2014-01-03 00:00:00', '王五');

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品名',
  `product_id` int(10) NULL DEFAULT NULL COMMENT '商品编号',
  `price` decimal(10, 2) NULL DEFAULT NULL COMMENT '单价',
  `count` int(11) NULL DEFAULT NULL COMMENT '数量',
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '种类',
  `table_id` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_detail
-- ----------------------------
INSERT INTO `order_detail` VALUES (5, '小米手机', 2111, 3000.00, 1, '电器', 3);
INSERT INTO `order_detail` VALUES (4, '饼干', 2018, 10.00, 2, '食品', 3);
INSERT INTO `order_detail` VALUES (3, '牛肉丸', 2011, 30.00, 1, '食品', 4);
INSERT INTO `order_detail` VALUES (9, '苹果', 1123, 14.00, 2, '水果', 4);

-- ----------------------------
-- Table structure for order_table
-- ----------------------------
DROP TABLE IF EXISTS `order_table`;
CREATE TABLE `order_table`  (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '生成的id',
  `order_num` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '订单编号',
  `order_time` datetime(0) NOT NULL COMMENT '下单时间',
  `amount` double(20, 0) NOT NULL COMMENT '金额',
  `client_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '客户名',
  `phone_num` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '客户手机号码',
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '送货目的地址',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '订单状态',
  `review_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `review`(`review_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_table
-- ----------------------------
INSERT INTO `order_table` VALUES (3, '233254363', '2018-11-28 21:31:07', 3233, 'chengminghai', '15521414444', '华师西三宿舍楼319', '未完成', 1);
INSERT INTO `order_table` VALUES (4, '24242525', '2018-12-04 01:21:59', 1344, 'wuchangi', '11114243253', '华师西三宿舍楼318', '完成', 1);
INSERT INTO `order_table` VALUES (5, '555555', '2018-12-10 16:01:53', 800, 'cmh', '15521345666', '广州', '未完成', 1);

-- ----------------------------
-- Table structure for people
-- ----------------------------
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people`  (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '生成的id',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of people
-- ----------------------------
INSERT INTO `people` VALUES (0, '销售人员', '待出库');
INSERT INTO `people` VALUES (1, '仓库管理员', '待发货');
INSERT INTO `people` VALUES (2, '发货人员', '待收货');
INSERT INTO `people` VALUES (3, '财务人员', '已完成');

-- ----------------------------
-- Table structure for return_detail
-- ----------------------------
DROP TABLE IF EXISTS `return_detail`;
CREATE TABLE `return_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `table_id` int(20) NULL DEFAULT NULL COMMENT '销售单单号',
  `product_id` int(20) NULL DEFAULT NULL COMMENT '商品编号',
  `product_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品名称',
  `product_number` int(10) NULL DEFAULT NULL COMMENT '退货数量',
  `return_date` datetime(0) NULL DEFAULT NULL,
  `registrant` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `return_money` int(15) NULL DEFAULT NULL,
  `consignee` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_units` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '退货单位',
  `product_specification` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '退货规格',
  `register_date` datetime(0) NULL DEFAULT NULL COMMENT '登记日期',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of return_detail
-- ----------------------------
INSERT INTO `return_detail` VALUES (1, 1, 20180001, '多宝鱼', 20, '2018-09-13 00:00:00', '张三', 500, '李斯', '', '', '2018-01-10 00:00:00');
INSERT INTO `return_detail` VALUES (2, 1, 1, '1', 1, '2018-01-10 00:00:00', '1', 1, '1', '1', '1', '2018-01-10 00:00:00');
INSERT INTO `return_detail` VALUES (3, 1, 20180002, 'ee ', 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sales_return_table
-- ----------------------------
DROP TABLE IF EXISTS `sales_return_table`;
CREATE TABLE `sales_return_table`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `salesreturn_id` int(20) NULL DEFAULT NULL,
  `sales_id` int(20) NULL DEFAULT NULL,
  `return_company` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `salesman` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `handler` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `return_date` datetime(0) NULL DEFAULT NULL COMMENT '退货日期',
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '退货原因',
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '备注',
  `return_department` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '退货部门',
  `check` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '审核',
  `warehouse_id` int(10) NULL DEFAULT NULL COMMENT '收货仓库',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sales_return_table
-- ----------------------------
INSERT INTO `sales_return_table` VALUES (1, 411, 201623, 'ABC公司', '张安1', '李斯', '2016-05-12 00:00:00', '', '', '', '', 51);
INSERT INTO `sales_return_table` VALUES (2, 412, 512, '111', '111', '111', '2016-05-12 00:00:00', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for warehouse
-- ----------------------------
DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE `warehouse`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warehouse_id` int(11) NULL DEFAULT NULL COMMENT '仓库编号',
  `warehouse_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '仓库名',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of warehouse
-- ----------------------------
INSERT INTO `warehouse` VALUES (1, 51, '海鲜仓库');
INSERT INTO `warehouse` VALUES (2, 52, '蔬果仓库');

-- ----------------------------
-- Triggers structure for table mall_products
-- ----------------------------
DROP TRIGGER IF EXISTS `product_up_af`;
delimiter ;;
CREATE TRIGGER `product_up_af` AFTER UPDATE ON `mall_products` FOR EACH ROW begin
set  @count=(select count(*) from mall_products where supplier_id=new.supplier_id);/*单位发布商品数回填单位*/
update club_list set product_num=@count  where id=new.supplier_id;
set  @count1=(select count(*) from mall_products where type=new.type);/*商品发布类型回填商品分类*/
update mall_products_type_sname set count=@count1  where id=new.type;
end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table mall_products
-- ----------------------------
DROP TRIGGER IF EXISTS `product_insert`;
delimiter ;;
CREATE TRIGGER `product_insert` BEFORE INSERT ON `mall_products` FOR EACH ROW begin
set new.material_title=(select v_title from gf_material where id=new.material_id);
set new.display_name=(select F_NAME from base_code where f_id=new.display);
set new.admin_nick=(select admin_gfnick from qmdd_administrators where id=new.admin_id);
/*set new.type_code=(select tn_code from mall_products_type_sname where id=new.type);商品分类编码*/

end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table mall_products
-- ----------------------------
DROP TRIGGER IF EXISTS `product_insert_af`;
delimiter ;;
CREATE TRIGGER `product_insert_af` AFTER INSERT ON `mall_products` FOR EACH ROW begin
set  @count=(select count(*) from mall_products where supplier_id=new.supplier_id);/*单位发布商品数回填单位*/
update club_list set product_num=@count  where id=new.supplier_id;
/*set  @count1=(select count(*) from mall_products where type=new.type);商品发布类型回填商品分类*/
/*update mall_products_type_sname set count=@count1  where id=new.type;*/
end
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table mall_products
-- ----------------------------
DROP TRIGGER IF EXISTS `product_updata`;
delimiter ;;
CREATE TRIGGER `product_updata` BEFORE UPDATE ON `mall_products` FOR EACH ROW begin
set new.material_title=(select v_title from gf_material where id=new.material_id);
set new.display_name=(select F_NAME from base_code where f_id=new.display);
set new.admin_nick=(select admin_gfnick from qmdd_administrators where id=new.admin_id);
end
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
