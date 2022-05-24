/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : db_c_dev

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 12/04/2022 11:24:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_barang_keluar
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang_keluar`;
CREATE TABLE `tb_barang_keluar`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_masuk` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_keluar` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barang_keluar
-- ----------------------------
INSERT INTO `tb_barang_keluar` VALUES (1, 'IB-202232791605', '2022-04-11', '2022-04-12', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '40');
INSERT INTO `tb_barang_keluar` VALUES (2, 'IB-202232791605', '2022-04-11', '2022-04-12', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '20');
INSERT INTO `tb_barang_keluar` VALUES (3, 'IB-202232791605', '2022-04-11', '2022-04-12', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '30');
INSERT INTO `tb_barang_keluar` VALUES (4, 'IB-202232791605', '2022-04-11', '2022-04-13', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '20');
INSERT INTO `tb_barang_keluar` VALUES (5, 'IB-202232791605', '2022-04-11', '2022-04-12', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '30');
INSERT INTO `tb_barang_keluar` VALUES (6, 'IB-202249580673', '2022-04-11', '2022-04-13', 'Yogyakarta', 'baso', 'baso ikan', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (7, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '35');
INSERT INTO `tb_barang_keluar` VALUES (8, 'IB-202232791605', '2022-04-11', '2022-04-16', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '35');
INSERT INTO `tb_barang_keluar` VALUES (9, 'IB-202279608324', '2022-04-10', '2022-04-16', 'Aceh', 'kay', 'kayu', 'Dus', '10');
INSERT INTO `tb_barang_keluar` VALUES (10, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '25');
INSERT INTO `tb_barang_keluar` VALUES (11, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '25');
INSERT INTO `tb_barang_keluar` VALUES (12, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '35');
INSERT INTO `tb_barang_keluar` VALUES (13, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '10');
INSERT INTO `tb_barang_keluar` VALUES (14, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '30');
INSERT INTO `tb_barang_keluar` VALUES (15, 'IB-202232791605', '2022-04-11', '2022-04-14', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '30');
INSERT INTO `tb_barang_keluar` VALUES (16, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '25');
INSERT INTO `tb_barang_keluar` VALUES (17, 'IB-202232791605', '2022-04-11', '2022-04-12', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (18, 'IB-202232791605', '2022-04-11', '2022-04-16', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '10');
INSERT INTO `tb_barang_keluar` VALUES (19, 'IB-202232791605', '2022-04-11', '2022-04-18', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (20, 'IB-202232791605', '2022-04-11', '2022-04-14', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (21, 'IB-202232791605', '2022-04-11', '2022-04-13', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (22, 'IB-202232791605', '2022-04-11', '2022-04-13', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (23, 'IB-202232791605', '2022-04-11', '2022-04-15', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '5');
INSERT INTO `tb_barang_keluar` VALUES (24, 'IB-202232791605', '2022-04-11', '2022-04-13', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '10');
INSERT INTO `tb_barang_keluar` VALUES (25, 'IB-202249580673', '2022-04-11', '2022-04-15', 'Yogyakarta', 'baso', 'baso ikan', 'Dus', '5');

-- ----------------------------
-- Table structure for tb_barang_masuk
-- ----------------------------
DROP TABLE IF EXISTS `tb_barang_masuk`;
CREATE TABLE `tb_barang_masuk`  (
  `id_transaksi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `satuan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_transaksi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_barang_masuk
-- ----------------------------
INSERT INTO `tb_barang_masuk` VALUES ('IB-202219824673', '2022-04-10', 'Bengkulu', '12', 'roko', 'Dus', '12');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202232791605', '2022-04-11', 'Kalimantan Barat', 'susu', 'susu kerbau', 'Dus', '40');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202238615294', '2022-04-04', 'Papua', 'bm', 'buah merah', 'Dus', '1');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202246570931', '2022-04-10', 'Jawa Tengah', 't001', 'teh', 'Dus', '10');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202246598120', '2022-04-10', 'Aceh', 'm001', 'mie', 'Dus', '10');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202249580673', '2022-04-11', 'Yogyakarta', 'baso', 'baso ikan', 'Dus', '5');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202250498267', '2022-04-10', 'Jakarta', 'k002', 'Kopi Jakarta', 'Dus', '12');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202252139467', '2022-04-10', 'Jambi', 'test', 'test', 'Dus', '1');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202261902347', '2022-04-10', 'Aceh', 'kopi', 'kopi aceh', 'Dus', '1');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202272683904', '2022-04-11', 'Jawa Tengah', 'tutut', 'tutut', 'Dus', '10');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202278314256', '2022-04-10', 'Jawa Tengah', 'koo1', 'okan', 'Dus', '1');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202278546039', '2022-04-11', 'Kalimantan Barat', 'man', 'mandau', 'Dus', '12');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202279608324', '2022-04-10', 'Aceh', 'kay', 'kayu', 'Dus', '12');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202283076942', '2022-04-10', 'Jawa Tengah', 'koo1', 'okan', 'Dus', '1');
INSERT INTO `tb_barang_masuk` VALUES ('IB-202292048765', '2022-04-10', 'Jakarta', 'k004', 'koyo', 'Dus', '13');
INSERT INTO `tb_barang_masuk` VALUES ('WG-201871602934', '18/01/2018', 'Papua', '312212331222', 'Kopi Hitam', 'Dus', '90');

-- ----------------------------
-- Table structure for tb_satuan
-- ----------------------------
DROP TABLE IF EXISTS `tb_satuan`;
CREATE TABLE `tb_satuan`  (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_satuan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_satuan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_satuan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_satuan
-- ----------------------------
INSERT INTO `tb_satuan` VALUES (1, 'Dus', 'Dus');
INSERT INTO `tb_satuan` VALUES (3, 'Pcss', 'Pcss');

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NULL DEFAULT NULL,
  `menu_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (1, 1, 1);
INSERT INTO `user_access_menu` VALUES (2, 1, 2);
INSERT INTO `user_access_menu` VALUES (3, 2, 2);
INSERT INTO `user_access_menu` VALUES (4, 1, 3);
INSERT INTO `user_access_menu` VALUES (8, 2, 4);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES (1, 'admin');
INSERT INTO `user_menu` VALUES (2, 'profile');
INSERT INTO `user_menu` VALUES (3, 'Menu');
INSERT INTO `user_menu` VALUES (4, 'Barang');
INSERT INTO `user_menu` VALUES (5, 'test');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'admin');
INSERT INTO `user_role` VALUES (2, 'member');

-- ----------------------------
-- Table structure for user_sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NULL DEFAULT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_sub_menu
-- ----------------------------
INSERT INTO `user_sub_menu` VALUES (1, 1, 'Dashboard', 'admin', 'ni ni-shop text-info', 1);
INSERT INTO `user_sub_menu` VALUES (2, 2, 'Profile', 'profile', 'ni ni-badge text-orange', 1);
INSERT INTO `user_sub_menu` VALUES (3, 3, 'Menu Management', 'menu', 'ni ni-controller text-green', 1);
INSERT INTO `user_sub_menu` VALUES (4, 3, 'Submenu Management', 'menu/submenu', 'ni ni-controller text-green', 1);
INSERT INTO `user_sub_menu` VALUES (5, 4, 'Barang Masuk', 'barang', 'fa fa-cubes', 1);
INSERT INTO `user_sub_menu` VALUES (7, 1, 'Role', 'admin/role', 'ni ni-ui-04 text-info', 1);
INSERT INTO `user_sub_menu` VALUES (8, 1, 'User', 'admin/user', 'ni ni-collection text-info', 1);
INSERT INTO `user_sub_menu` VALUES (9, 4, 'Barang Keluar', 'barang/barangkeluar', 'fa fa-cubes', 1);
INSERT INTO `user_sub_menu` VALUES (10, 4, 'Satuan', 'barang/tabel_satuan', 'fa fa-cubes', 1);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` int(11) NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `active` int(11) NULL DEFAULT NULL,
  `profile_picture` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (4, 'admin', '$2y$10$qschOcxBi4/9fa63LuvlRuUt0WJHHQBx2GDhmu6EpjPx.qMvedv8O', 1, 'admin ganteng', 1, 'team-1.jpg', 'cibinong', 'admin@gmail.com');
INSERT INTO `users` VALUES (5, NULL, '$2y$10$D2foSk.H8sTVUIS4Lp3Cs.ixbiXxYW2uj/PWvGly6/zMFRGLtqm.y', 2, NULL, 1, 'team-12.jpg', 'jabar1', NULL);
INSERT INTO `users` VALUES (6, 'koko', '$2y$10$k678ztcZHN8rBnuHRnCAD.FomjE5g.x4rUrYAXuQgBfFarsR6mkli', 2, 'koko', 1, 'no-photo.png', 'cibinong', 'koko@gmail.com');
INSERT INTO `users` VALUES (7, 'kohar', '$2y$10$2vEko6JI5.5MbAnfOBOrLu5AhlbJ7t/2Y2V20FJsKSAM5aPuZ5HcO', 2, 'kohar', 1, 'no-photo.png', 'bogor', 'kohar@yahoo.com');
INSERT INTO `users` VALUES (8, 'user', '$2y$10$WFikh7tbPP5S5r4.LaD1gusrMKKgH/Dm76nHonQdIzWQbanKt228e', 2, 'user', 1, 'no-photo.png', 'jakarta', 'user@gmail.com');

-- ----------------------------
-- Triggers structure for table tb_barang_keluar
-- ----------------------------
DROP TRIGGER IF EXISTS `t_barang_masuk`;
delimiter ;;
CREATE DEFINER = `root`@`localhost` TRIGGER `t_barang_masuk` AFTER INSERT ON `tb_barang_keluar` FOR EACH ROW BEGIN

   UPDATE tb_barang_masuk SET jumlah = jumlah - NEW.jumlah

   WHERE id_transaksi = NEW.id_transaksi;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
