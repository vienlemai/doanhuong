/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : do_an_huong

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-12-13 20:46:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `benhs`
-- ----------------------------
DROP TABLE IF EXISTS `benhs`;
CREATE TABLE `benhs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ten_benh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mua` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `trieu_chung` text COLLATE utf8_unicode_ci,
  `nguyen_nhan` text COLLATE utf8_unicode_ci,
  `cach_phong_tranh` text COLLATE utf8_unicode_ci,
  `thong_tin_them` text COLLATE utf8_unicode_ci,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of benhs
-- ----------------------------
INSERT INTO benhs VALUES ('1', 'Bệnh 1', '1', '2013-12-07 21:19:31', '2013-12-07 21:19:31', 'Triệu chứng', 'Nguyên Nhân', 'Cách phòng tránh', 'Thông tin thêm', '/doanhuong/app/webroot/img/images/P020712_15.16.jpg');
INSERT INTO benhs VALUES ('2', 'Bệnh test thumbnail', '1', '2013-12-07 23:27:44', '2013-12-07 23:27:44', 'Bệnh thần kinh, bệnh đang cập nhật . . .', 'Chưa rõ', 'Chưa rõ . .. ', 'Chưa có . . . ', '/doanhuong/app/webroot/img/images/P020712_15.16.jpg');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_tab` tinyint(4) DEFAULT NULL,
  `is_right` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', '0', 'Thuốc dị ứng', 'thuoc-di-ung', '1', null, '2013-11-23 03:25:42', '2013-11-23 03:25:42', null, null);
INSERT INTO categories VALUES ('2', '0', 'Thuốc tâm thần', 'thuoc-tam-than', '1', null, '2013-11-23 03:26:14', '2013-11-23 03:26:14', null, null);
INSERT INTO categories VALUES ('3', '0', 'thuốc ho', 'thuoc-ho', '1', null, '2013-12-08 02:34:48', '2013-12-08 02:34:48', null, null);

-- ----------------------------
-- Table structure for `cmts`
-- ----------------------------
DROP TABLE IF EXISTS `cmts`;
CREATE TABLE `cmts` (
  `id_cmt` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(4) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaycmt` date NOT NULL,
  `id_tin` int(4) NOT NULL,
  PRIMARY KEY (`id_cmt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cmts
-- ----------------------------

-- ----------------------------
-- Table structure for `donthuocs`
-- ----------------------------
DROP TABLE IF EXISTS `donthuocs`;
CREATE TABLE `donthuocs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_thuoc` int(4) NOT NULL,
  `id_benh` int(4) NOT NULL,
  `lieudung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cachdung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of donthuocs
-- ----------------------------

-- ----------------------------
-- Table structure for `lienhes`
-- ----------------------------
DROP TABLE IF EXISTS `lienhes`;
CREATE TABLE `lienhes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `dien_thoai` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `noi_dung` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lienhes
-- ----------------------------
INSERT INTO lienhes VALUES ('1', 'Lê Mai Viện', 'Hòa khánh', '01689973826', 'lemaibk08@gmail.com', 'hello', '2013-12-08 09:09:53', '2013-12-08 09:09:53');
INSERT INTO lienhes VALUES ('2', 'Lê Mai Viện', 'Hòa khánh', '01689973826', 'lemaibk08@gmail.com', 'hello', '2013-12-08 09:10:41', '2013-12-08 09:10:41');
INSERT INTO lienhes VALUES ('3', 'Lê Mai Viện', 'Hòa khánh', '01689973826', 'lemaibk08@gmail.com', 'fsdafds', '2013-12-08 09:11:51', '2013-12-08 09:11:51');
INSERT INTO lienhes VALUES ('4', 'Lê Mai Viện', 'Hòa khánh', '01689973826', 'lemaibk08@gmail.com', 'fdsfsd', '2013-12-08 09:13:46', '2013-12-08 09:13:46');

-- ----------------------------
-- Table structure for `login_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------
INSERT INTO login_tokens VALUES ('18', '1', 'a480c3b0d250d678d093c5650880a327', '2 weeks', '0', '2013-11-07 07:59:36', '2013-11-21 07:59:36');
INSERT INTO login_tokens VALUES ('17', '1', '327a70a1838da2b9024e21976fabae00', '2 weeks', '0', '2013-11-07 07:33:04', '2013-11-21 07:33:04');
INSERT INTO login_tokens VALUES ('16', '1', 'd28b1b30e27a7f26b1921e09fb02372d', '2 weeks', '0', '2013-11-07 01:31:39', '2013-11-21 01:31:39');
INSERT INTO login_tokens VALUES ('15', '1', 'b06a87d921d3bc509ad20e2fed01587b', '2 weeks', '1', '2013-11-06 18:30:37', '2013-11-20 18:30:37');
INSERT INTO login_tokens VALUES ('19', '1', 'fc63b85cdc522c4f958497796fd6f01c', '2 weeks', '1', '2013-11-13 15:16:26', '2013-11-27 15:16:26');
INSERT INTO login_tokens VALUES ('20', '1', '49958913d847b14364faa522e22bf2af', '2 weeks', '0', '2013-11-18 01:53:09', '2013-12-02 01:53:09');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `ordering` int(11) NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sumary` text CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0' COMMENT 'Đếm số lần hiển thị bài viết',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for `thuocs`
-- ----------------------------
DROP TABLE IF EXISTS `thuocs`;
CREATE TABLE `thuocs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ten_thuoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `thanh_phan` text COLLATE utf8_unicode_ci,
  `dang_bao_che` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quy_cach_dong_goi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chong_chi_dinh` text COLLATE utf8_unicode_ci,
  `cach_dung` text COLLATE utf8_unicode_ci,
  `cty_phan_phoi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dang_ky` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thong_tin_them` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of thuocs
-- ----------------------------
INSERT INTO thuocs VALUES ('1', 'Thuốc ho 1', '1', '/doanhuong/app/webroot/img/images/P050712_08.52.jpg', '2013-12-08 02:47:29', '2013-12-08 02:47:29', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', null, 'Đang cập nhật . . .');
INSERT INTO thuocs VALUES ('2', 'Thuốc 2', '1', '/doanhuong/app/webroot/img/images/P050712_08.52.jpg', '2013-12-08 02:59:14', '2013-12-08 02:59:14', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', 'Đang cập nhật . . .', null, 'Đang cập nhật . . .');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `salt` text CHARACTER SET latin1,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '1', 'admin', '73dd22a5352d9b6a6588fab0ab62b0cc', '0a05df7556534f914c51e5510177fa21', 'admin@admin.com', 'Admin', '', '1', '1', '', '2013-11-03 15:00:36', '2013-11-06 18:15:17');
INSERT INTO users VALUES ('6', '2', 'lemaibk08', 'cd2a8881d4f310b0f03646396d56038e', '3466cab0e12097e4be82529e18aee72d', 'vienlm@ilucians.com', 'Lê Mai Viện', null, '1', '1', null, '2013-11-07 14:48:57', '2013-11-07 15:07:58');
INSERT INTO users VALUES ('7', '2', 'Thành Luân', '93ac8b7f5b2ac8aa13e573939cbbbf4c', '7def0d0fdbe03504df22e70d12d0ea9c', 'htluan2605@gmail.com', 'Thành', 'Luân', '0', '1', '127.12.7.129', '2013-11-08 01:17:19', '2013-11-08 01:17:19');

-- ----------------------------
-- Table structure for `user_groups`
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO user_groups VALUES ('1', 'Admin', 'Admin', '0', '2013-11-03 15:00:36', '2013-11-03 15:00:36');
INSERT INTO user_groups VALUES ('2', 'User', 'User', '1', '2013-11-03 15:00:36', '2013-11-03 15:00:36');
INSERT INTO user_groups VALUES ('3', 'Guest', 'Guest', '0', '2013-11-03 15:00:36', '2013-11-03 15:00:36');

-- ----------------------------
-- Table structure for `user_group_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO user_group_permissions VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO user_group_permissions VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO user_group_permissions VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO user_group_permissions VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO user_group_permissions VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO user_group_permissions VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO user_group_permissions VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO user_group_permissions VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO user_group_permissions VALUES ('26', '2', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('27', '3', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('30', '3', 'Users', 'myprofile', '0');
INSERT INTO user_group_permissions VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('44', '2', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO user_group_permissions VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO user_group_permissions VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('54', '3', 'Users', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO user_group_permissions VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO user_group_permissions VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO user_group_permissions VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('78', '3', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('79', '1', 'Admin', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('80', '2', 'Admin', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('81', '3', 'Admin', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('82', '1', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('83', '2', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('84', '3', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('85', '1', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('86', '2', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('87', '3', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('88', '1', 'Albums', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('89', '2', 'Albums', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('90', '3', 'Albums', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('91', '1', 'Albums', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('92', '2', 'Albums', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('93', '3', 'Albums', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('94', '1', 'Albums', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('95', '2', 'Albums', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('96', '3', 'Albums', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('97', '1', 'Albums', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('98', '2', 'Albums', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('99', '3', 'Albums', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('100', '1', 'Albums', 'admin_upload', '1');
INSERT INTO user_group_permissions VALUES ('101', '2', 'Albums', 'admin_upload', '1');
INSERT INTO user_group_permissions VALUES ('102', '3', 'Albums', 'admin_upload', '0');
INSERT INTO user_group_permissions VALUES ('103', '1', 'Albums', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('104', '2', 'Albums', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('105', '3', 'Albums', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('106', '1', 'Albums', 'admin_deletePhoto', '1');
INSERT INTO user_group_permissions VALUES ('107', '2', 'Albums', 'admin_deletePhoto', '1');
INSERT INTO user_group_permissions VALUES ('108', '3', 'Albums', 'admin_deletePhoto', '0');
INSERT INTO user_group_permissions VALUES ('109', '1', 'App', 'admin_active', '1');
INSERT INTO user_group_permissions VALUES ('110', '2', 'App', 'admin_active', '1');
INSERT INTO user_group_permissions VALUES ('111', '3', 'App', 'admin_active', '0');
INSERT INTO user_group_permissions VALUES ('112', '1', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('113', '2', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('114', '3', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('115', '1', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('116', '2', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('117', '3', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('118', '1', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('119', '2', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('120', '3', 'Articles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('121', '1', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('122', '2', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('123', '3', 'Articles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('124', '1', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('125', '2', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('126', '3', 'Articles', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('127', '1', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('128', '2', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('129', '3', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('130', '1', 'Blogs', 'viewArticle', '0');
INSERT INTO user_group_permissions VALUES ('131', '2', 'Blogs', 'viewArticle', '1');
INSERT INTO user_group_permissions VALUES ('132', '3', 'Blogs', 'viewArticle', '1');
INSERT INTO user_group_permissions VALUES ('133', '1', 'Blogs', 'add', '1');
INSERT INTO user_group_permissions VALUES ('134', '2', 'Blogs', 'add', '1');
INSERT INTO user_group_permissions VALUES ('135', '3', 'Blogs', 'add', '0');
INSERT INTO user_group_permissions VALUES ('136', '1', 'Blogs', 'view', '1');
INSERT INTO user_group_permissions VALUES ('137', '2', 'Blogs', 'view', '1');
INSERT INTO user_group_permissions VALUES ('138', '3', 'Blogs', 'view', '0');
INSERT INTO user_group_permissions VALUES ('139', '1', 'Categories', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('140', '2', 'Categories', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('141', '3', 'Categories', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('142', '1', 'Categories', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('143', '2', 'Categories', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('144', '3', 'Categories', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('145', '1', 'Categories', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('146', '2', 'Categories', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('147', '3', 'Categories', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('148', '1', 'Categories', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('149', '2', 'Categories', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('150', '3', 'Categories', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('151', '1', 'Categories', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('152', '2', 'Categories', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('153', '3', 'Categories', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('154', '1', 'Categories', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('155', '2', 'Categories', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('156', '3', 'Categories', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('157', '1', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('158', '2', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('159', '3', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('160', '1', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('161', '2', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('162', '3', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('163', '1', 'Posts', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('164', '2', 'Posts', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('165', '3', 'Posts', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('166', '1', 'Posts', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('167', '2', 'Posts', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('168', '3', 'Posts', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('169', '1', 'Posts', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('170', '2', 'Posts', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('171', '3', 'Posts', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('172', '1', 'Posts', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('173', '2', 'Posts', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('174', '3', 'Posts', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('175', '1', 'Posts', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('176', '2', 'Posts', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('177', '3', 'Posts', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('178', '1', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('179', '2', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('180', '3', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('181', '1', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('182', '2', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('183', '3', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('184', '1', 'Resources', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('185', '2', 'Resources', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('186', '3', 'Resources', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('187', '1', 'Resources', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('188', '2', 'Resources', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('189', '3', 'Resources', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('190', '1', 'Resources', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('191', '2', 'Resources', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('192', '3', 'Resources', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('193', '1', 'Resources', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('194', '2', 'Resources', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('195', '3', 'Resources', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('196', '1', 'Resources', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('197', '2', 'Resources', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('198', '3', 'Resources', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('199', '1', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('200', '2', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('201', '3', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('202', '1', 'Resources', 'listResources', '0');
INSERT INTO user_group_permissions VALUES ('203', '2', 'Resources', 'listResources', '1');
INSERT INTO user_group_permissions VALUES ('204', '3', 'Resources', 'listResources', '1');
INSERT INTO user_group_permissions VALUES ('205', '1', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('206', '2', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('207', '3', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('208', '1', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('209', '2', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('210', '3', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('211', '1', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('212', '2', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('213', '3', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('214', '1', 'Videos', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('215', '2', 'Videos', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('216', '3', 'Videos', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('217', '1', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('218', '2', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('219', '3', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('220', '1', 'Videos', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('221', '2', 'Videos', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('222', '3', 'Videos', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('223', '1', 'Videos', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('224', '2', 'Videos', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('225', '3', 'Videos', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('226', '1', 'Videos', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('227', '2', 'Videos', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('228', '3', 'Videos', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('229', '1', 'Videos', 'admin_videoActive', '1');
INSERT INTO user_group_permissions VALUES ('230', '2', 'Videos', 'admin_videoActive', '1');
INSERT INTO user_group_permissions VALUES ('231', '3', 'Videos', 'admin_videoActive', '0');
