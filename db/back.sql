/*
Navicat MySQL Data Transfer

Source Server         : mysql1
Source Server Version : 50634
Source Host           : 192.168.180.44:3306
Source Database       : back

Target Server Type    : MYSQL
Target Server Version : 50634
File Encoding         : 65001

Date: 2016-12-12 10:20:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_kfjl
-- ----------------------------
DROP TABLE IF EXISTS `think_kfjl`;
CREATE TABLE `think_kfjl` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_kfjl
-- ----------------------------

-- ----------------------------
-- Table structure for think_kycg
-- ----------------------------
DROP TABLE IF EXISTS `think_kycg`;
CREATE TABLE `think_kycg` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_kycg
-- ----------------------------
INSERT INTO `think_kycg` VALUES ('9', 'holyland', '<p>123</p>\r\n', '123', '1', '1481420410', '1481463694', '1');

-- ----------------------------
-- Table structure for think_lx
-- ----------------------------
DROP TABLE IF EXISTS `think_lx`;
CREATE TABLE `think_lx` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_lx
-- ----------------------------

-- ----------------------------
-- Table structure for think_posts
-- ----------------------------
DROP TABLE IF EXISTS `think_posts`;
CREATE TABLE `think_posts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL COMMENT '文章编辑',
  `post_content` longtext,
  `post_title` text NOT NULL,
  `post_excerpt` text,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) DEFAULT '',
  `comment_count` bigint(20) DEFAULT '0',
  `feature_image` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_status_date` (`status`,`create_time`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_posts
-- ----------------------------
INSERT INTO `think_posts` VALUES ('12', '1', '<p>大家好啊</p>\r\n', '大家', null, '1', 'open', '', '0', null, '1479432817', '1480386722');
INSERT INTO `think_posts` VALUES ('13', 'holyland', '<p>　　2016年11月7日，由中国保密协会隐私保护专业委员会（以下简称“专委会”）主办，中国人民大学、中国科学院信息工程研究所联合承办的“2016（首届）中国隐私保护学术会议”，在中国人民大学召开，并获得圆满成功。&nbsp;</p>\r\n\r\n<p>　　大会围绕数据隐私保护与安全等研究领域，邀请了国内外著名院士、学者等专家到会作了特邀报告及专题报告，共同探讨数据隐私保护发展现状，以及所面临的关键性挑战问题和研究方向。本次大会由中国人民大学教授、CCF会士、隐私保护专业委会副主任委员孟小峰主持。&nbsp;</p>\r\n\r\n<p>　　报告结束后，隐私保护专业委会主任委员林东岱研究员主持了隐私保护专委工作会议及发展研讨会议，主要讨论了专委会的年度工作计划、专委会组织架构的完善以及如何推动隐私保护事业的发展等事项。与会委员积极发言，提出了诸多宝贵意见。&nbsp;</p>\r\n\r\n<p>　　中国保密协会副秘书长王炎冰、中国保密协会隐私保护专业委员会主任委员林东岱、副主任委员杜跃进、孟小峰、秘书长薛锐，以及专委会其他委员和来自各企事业、研究单位、高校的专家、学者逾150人参加了本次大会。&nbsp;</p>\r\n', '2016（首届）中国隐私保护学术会议在京圆满召开', null, '1', 'open', '', '0', null, '1480288197', '1480331434');
INSERT INTO `think_posts` VALUES ('14', 'holyland', '<p>1231231312</p>\r\n', '12313', null, '1', 'open', '', '0', null, '1480386812', '1480386979');

-- ----------------------------
-- Table structure for think_rcdw
-- ----------------------------
DROP TABLE IF EXISTS `think_rcdw`;
CREATE TABLE `think_rcdw` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_rcdw
-- ----------------------------

-- ----------------------------
-- Table structure for think_sys
-- ----------------------------
DROP TABLE IF EXISTS `think_sys`;
CREATE TABLE `think_sys` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_sys
-- ----------------------------
INSERT INTO `think_sys` VALUES ('1', 'holyland', '<p>&nbsp; &nbsp;信息安全国家重点实验室筹建于1989年，1991年通过国家验收并正式对外开放，是我国信息安全领域创建最早的研究机构之一，也是目前国内唯一一家信息安全领域的国家重点实验室，依托单位为中国科学院信息工程研究所。&nbsp;</p>\r\n\r\n<p>　　实验室的总体定位是：瞄准国际信息安全学科发展前沿，密切结合国家信息安全战略需求，进行信息安全前沿性和前瞻性科学问题创新性研究和自主信息安全关键技术研发。</p>\r\n\r\n<p>　　实验室的总体目标是：为国家信息安全保障体系建设提供理论指导和科学依据；对前沿性和前瞻性信息安全科学问题进行创新性研究，以促进和推动信息安全学科的发展；研发具有自主知识产权的关键安全技术和系统，以满足国家和行业部门的需求；为国家培养高水平的信息安全专业人才。&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp; 截至2015年底，信息安全国家重点实验室已发表学术论文3500余篇，出版著作（译著）110部，获得国家发明专利授权94项，获得软件著作权登记326项；完成国家标准、行业规范40余项，参与撰写国际标准4项；承担国家级和省部级项目660余项，科研成果获国家级、省部级奖励31项，其中获国家科技进步一等奖1项，国家科技进步二等奖5项，国家自然科学三等奖2项，省部级一等奖14项。目前，实验室有固定人员205人，其中，正高级职称24人，副高级职称48人；有流动人员（包括高级访问学者、博士后、博士生、硕士生、短期聘用、客座学生等）400余人。实验室拥有8800多平方米的办公科研用房，已建成一流的信息安全实验环境。&nbsp;</p>\r\n', '信息安全国家重点实验室简介', '1', '1481161021', '1481161175', '1');

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `login_count` int(11) DEFAULT NULL COMMENT '登陆次数',
  `last_login_time` int(11) DEFAULT NULL COMMENT '最后一次登录时间',
  `last_login_ip` varchar(100) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '注册时间',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', 'holyland', 'admin', 'holyland', '978573910@qq.com', '1', '1481507208', '192.168.180.1', '1', '2016-11-18 19:43:20', '2016-11-21 10:03:48');
INSERT INTO `think_user` VALUES ('2', '123', '123', '123', '123@123', null, '1479695878', '192.168.180.1', '1', '2016-11-20 15:57:13', '2016-11-21 10:37:58');

-- ----------------------------
-- Table structure for think_xwzx
-- ----------------------------
DROP TABLE IF EXISTS `think_xwzx`;
CREATE TABLE `think_xwzx` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_xwzx
-- ----------------------------
INSERT INTO `think_xwzx` VALUES ('1', 'holyland', '<p>这里是图片新闻</p>\r\n', '这里是图片新闻', '1', '1480906393', '1480949640', '1');
INSERT INTO `think_xwzx` VALUES ('3', 'holyland', '<p>综合新闻</p>\r\n', '综合新闻', '1', '1480906570', '1480949778', '1');
INSERT INTO `think_xwzx` VALUES ('4', 'holyland', '<p>综合新闻</p>\r\n', '综合新闻', '1', '1480906631', '1480949835', '1');
INSERT INTO `think_xwzx` VALUES ('5', 'holyland', '<p>综合新闻</p>\r\n', '综合新闻', '1', '1480906631', '1480950103', '1');
INSERT INTO `think_xwzx` VALUES ('6', 'holyland', '<p>综合新闻</p>\r\n', '综合新闻', '1', '1480906631', '1480950208', '4');
INSERT INTO `think_xwzx` VALUES ('8', 'holyland', '<p>这里是综合新闻</p>\r\n', '这里是综合新闻', '1', '1480980197', '1481023420', '2');
INSERT INTO `think_xwzx` VALUES ('9', 'holyland', '<p><img alt=\"\" src=\"/userfiles/images/QQ%E5%9B%BE%E7%89%8720161107223341.jpg\" style=\"height:100px; width:56px\" /></p>\r\n\r\n<p>这是我的女朋友</p>\r\n', '我女朋友', '1', '1481410057', '1481453343', '1');

-- ----------------------------
-- Table structure for think_yjs
-- ----------------------------
DROP TABLE IF EXISTS `think_yjs`;
CREATE TABLE `think_yjs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_author` varchar(255) NOT NULL,
  `post_content` longtext CHARACTER SET utf8,
  `post_title` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `taxonomy` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_yjs
-- ----------------------------
