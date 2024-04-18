-- 基本标识表
CREATE TABLE `_metas`  (
   `mid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '名称',
   `ico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '徽标',
   `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '说明',
   `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'tag' COMMENT '类型',
   `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'draft' COMMENT '状态',
   `order` int(11) NULL DEFAULT 0 COMMENT '排序',
   `count` int(11) NULL DEFAULT 0 COMMENT '计数',
   `parent` int(11) NULL DEFAULT 0 COMMENT '父本',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`mid`) USING BTREE,
   UNIQUE INDEX `metas_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
-- 基本内容表
CREATE TABLE `_contents`  (
   `cid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标题',
   `ico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '徽标',
   `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '内容',
   `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'post' COMMENT '类型',
   `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'draft' COMMENT '状态',
   `template` int(11) NULL DEFAULT 0 COMMENT '模板',
   `user` int(11) NULL DEFAULT 0 COMMENT '用户ID',
   `views` int(11) NULL DEFAULT 0 COMMENT '访问量',
   `order` int(11) NULL DEFAULT 0 COMMENT '排序',
   `count` int(11) NULL DEFAULT 0 COMMENT '计数',
   `parent` int(11) NULL DEFAULT 0 COMMENT '父本',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`cid`) USING BTREE,
   UNIQUE INDEX `contents_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- 基本链接表
CREATE TABLE `_links`  (
   `lid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标题',
   `ico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '徽标',
   `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '说明',
   `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'post' COMMENT '类型',
   `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'draft' COMMENT '状态',
   `views` int(11) NULL DEFAULT 0 COMMENT '访问量',
   `order` int(11) NULL DEFAULT 0 COMMENT '排序',
   `count` int(11) NULL DEFAULT 0 COMMENT '计数',
   `parent` int(11) NULL DEFAULT 0 COMMENT '父本',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`lid`) USING BTREE,
   UNIQUE INDEX `links_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
-- 基本字段表
CREATE TABLE `_fields`  (
   `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '名称',
   `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '类型',
   `str_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '字符串',
   `int_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '整数值',
   `float_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '浮点数',
   `object_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL COMMENT '对象值',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`id`) USING BTREE,
   UNIQUE INDEX `fields_slug_unique`(`slug`) USING BTREE
} ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
-- 基本回复表
CREATE TABLE `_comments`  (
   `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`id`) USING BTREE,
   UNIQUE INDEX `comments_slug_unique`(`slug`) USING BTREE
} ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;
-- 基本用户表
CREATE TABLE `_users`  (
   `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '编号',
   `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT '标识',
   `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
   `updated_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
   `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
   `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
   PRIMARY KEY (`uid`) USING BTREE,
   UNIQUE INDEX `users_slug_unique`(`slug`) USING BTREE
} ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

alter table _users change id uid bigint unsigned auto_increment;

-- 基本关联表
CREATE TABLE `_relationships`  (
  -- base
  `mid` int(11) NULL DEFAULT NULL,
  `cid` int(11) NULL DEFAULT NULL,
  `lid` int(11) NULL DEFAULT NULL,
  `article_mid` int(11) NULL DEFAULT NULL,
  `article_cid` int(11) NULL DEFAULT NULL,
  `article_lid` int(11) NULL DEFAULT NULL,
  `icon_mid` int(11) NULL DEFAULT NULL,
  `icon_cid` int(11) NULL DEFAULT NULL,
  `icon_lid` int(11) NULL DEFAULT NULL,
  `spider_mid` int(11) NULL DEFAULT NULL,
  `spider_cid` int(11) NULL DEFAULT NULL,
  `spider_lid` int(11) NULL DEFAULT NULL,
  `webstack_mid` int(11) NULL DEFAULT NULL,
  `webstack_cid` int(11) NULL DEFAULT NULL,
  `webstack_lid` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '关联信息表' ROW_FORMAT = Dynamic;

-- 附加字段
ALTER TABLE `_relationships`
  ADD `awesome_mid` INT(11) NULL AFTER `lid`,
  ADD `awesome_cid` INT(11) NULL AFTER `awesome_mid`,
  ADD `awesome_lid` INT(11) NULL AFTER `awesome_cid`;

ALTER TABLE `_relationships`
  ADD `book_mid` INT(11) NULL AFTER `awesome_lid`,
  ADD `book_cid` INT(11) NULL AFTER `book_mid`,
  ADD `book_lid` INT(11) NULL AFTER `book_cid`;

ALTER TABLE `_relationships`
  ADD `cheatsheet_mid` INT(11) NULL AFTER `book_lid`,
  ADD `cheatsheet_cid` INT(11) NULL AFTER `cheatsheet_mid`,
  ADD `cheatsheet_lid` INT(11) NULL AFTER `cheatsheet_cid`;

ALTER TABLE `_relationships`
  ADD `news_mid` INT(11) NULL AFTER `icon_lid`,
  ADD `news_cid` INT(11) NULL AFTER `news_mid`,
  ADD `news_lid` INT(11) NULL AFTER `news_cid`;

ALTER TABLE `_relationships`
  ADD `toolkit_mid` INT(11) NULL AFTER `spider_lid`,
  ADD `toolkit_cid` INT(11) NULL AFTER `toolkit_mid`,
  ADD `toolkit_lid` INT(11) NULL AFTER `toolkit_cid`;

-- 添加徽标(ico)字段至slug后
ALTER TABLE `article_contents` ADD `ico` VARCHAR(25) NULL AFTER `slug`;
ALTER TABLE `awesome_contents` ADD `ico` VARCHAR(25) NULL AFTER `slug`;
ALTER TABLE `cheatsheet_contents` ADD `ico` VARCHAR(25) NULL AFTER `slug`;
ALTER TABLE `question_contents` ADD `ico` VARCHAR(25) NULL AFTER `slug`;

-- 修改类型(type)字段长度
ALTER TABLE `article_metas` CHANGE `type` `type` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'tag' COMMENT '类型';
ALTER TABLE `awesome_metas` CHANGE `type` `type` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'tag' COMMENT '类型';
ALTER TABLE `cheatsheet_metas` CHANGE `type` `type` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'tag' COMMENT '类型';
ALTER TABLE `question_metas` CHANGE `type` `type` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT 'tag' COMMENT '类型';

-- 迁移其它 _relationships 至 relationships
-- article
INSERT INTO relationships (article_mid, article_cid) SELECT mid AS article_mid, cid AS article_cid FROM article_relationships;
-- article
INSERT INTO relationships (icon_mid, icon_cid) SELECT mid AS icon_mid, cid AS icon_cid FROM icon_relationships;
-- article
INSERT INTO relationships (spider_mid, spider_cid) SELECT mid AS spider_mid, cid AS spider_cid FROM spider_relationships;
-- article
INSERT INTO relationships (webstack_mid, webstack_cid) SELECT mid AS webstack_mid, cid AS webstack_cid FROM webstack_relationships;
-- 基本日志表
CREATE TABLE `_logs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `instance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `channel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remote_addr` int(10) UNSIGNED NULL DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `logs_instance_index`(`instance`) USING BTREE,
  INDEX `logs_channel_index`(`channel`) USING BTREE,
  INDEX `logs_level_index`(`level`) USING BTREE,
  INDEX `logs_created_by_index`(`created_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 0 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- WebStack
-- UPDATE m SET m.mname=l.name  FROM m ,l WHERE l.lid=m.lid;
-- update table_a as t1 inner join table_b as t2 on t1.unm=t2.code set t1.aid =t2.id where  t2.unm=t1.code
UPDATE `webstack_contents` INNER JOIN `webstack_fields` ON `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'url' SET `webstack_contents`.`url` = `webstack_fields`.`str_value` WHERE `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'url';
UPDATE `webstack_contents` INNER JOIN `webstack_fields` ON `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'text' SET `webstack_contents`.`text` = `webstack_fields`.`str_value` WHERE `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'text';
UPDATE `webstack_contents` INNER JOIN `webstack_fields` ON `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'logo' SET `webstack_contents`.`ico` = `webstack_fields`.`str_value` WHERE `webstack_contents`.`cid` = `webstack_fields`.`cid` AND `webstack_fields`.`name` = 'logo';

--
ALTER TABLE `_contents` ADD `status` VARCHAR(25) NULL DEFAULT 'draft' AFTER `type`;
--
UPDATE `_contents` SET `type` = 'post';
UPDATE `_contents` SET `status` = 'publish';


-- ********************* [ BEG::Question ] *********************
-- question_metas
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('HTML', 'tag', 'publish');
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('CSS', 'tag', 'publish');
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('JavaScript', 'tag', 'publish');
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('jQuery', 'tag', 'publish');
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('Vue', 'tag', 'publish');
INSERT INTO `question_metas` (`name`, `type`, `status`) VALUES ('React', 'tag', 'publish');

-- question_contents
-- question_links
-- ********************* [ END::Question ] *********************

CREATE TABLE `_options`  (
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '名称',
  `user` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '用户',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '说明',
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'string' COMMENT '数据类型',
  `value` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '数据值',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  `release_at` timestamp NULL DEFAULT NULL COMMENT '发布时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`name`, `user`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('meta.type.default', 0, 'string', 'post');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('meta.type.options.default', 0, 'object', 'a:4:{i:0;a:2:{s:5:"label";s:6:"目录";s:5:"value";s:8:"caterory";}i:1;a:2:{s:5:"label";s:6:"标签";s:5:"value";s:3:"tag";}i:2;a:2:{s:5:"label";s:6:"集合";s:5:"value";s:10:"collection";}i:3;a:2:{s:5:"label";s:6:"榜单";s:5:"value";s:4:"rank";}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('meta.status.default', 0, 'string', 'draft');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('meta.status.options.default', 0, 'object', 'a:3:{i:0;a:2:{s:5:"label";s:6:"草稿";s:5:"value";s:5:"draft";}i:1;a:2:{s:5:"label";s:6:"私有";s:5:"value";s:7:"private";}i:2;a:2:{s:5:"label";s:6:"公开";s:5:"value";s:7:"publish";}}');
-- a:2:{s:5:"label";s:6:"草稿";s:5:"value";s:5:"draft";}
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.type.default', 0, 'string', 'post');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.type.options.default', 0, 'object', 'a:3:{i:0;a:2:{s:5:"label";s:6:"正文";s:5:"value";s:4:"post";}i:1;a:2:{s:5:"label";s:6:"模板";s:5:"value";s:8:"template";}i:2;a:2:{s:5:"label";s:6:"页面";s:5:"value";s:4:"page";}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.type.options.question', 0, 'object', 'a:6:{i:0;a:3:{s:5:"label";s:6:"单选";s:5:"value";s:5:"radio";s:6:"values";a:3:{i:0;s:5:"radio";i:1;s:6:"单选";i:2;s:9:"单选题";}}i:1;a:3:{s:5:"label";s:6:"多选";s:5:"value";s:8:"checkbox";s:6:"values";a:4:{i:0;s:8:"checkbox";i:1;s:5:"check";i:2;s:6:"多选";i:3;s:9:"多选题";}}i:2;a:3:{s:5:"label";s:6:"判断";s:5:"value";s:6:"switch";s:6:"values";a:3:{i:0;s:6:"switch";i:1;s:6:"判断";i:2;s:9:"判断题";}}i:3;a:3:{s:5:"label";s:6:"填空";s:5:"value";s:5:"input";s:6:"values";a:3:{i:0;s:5:"input";i:1;s:6:"填空";i:2;s:9:"填空题";}}i:4;a:3:{s:5:"label";s:6:"概述";s:5:"value";s:8:"markdown";s:6:"values";a:5:{i:0;s:8:"markdown";i:1;s:6:"概述";i:2;s:9:"概述题";i:3;s:6:"简述";i:4;s:9:"简述题";}}i:5;a:3:{s:5:"label";s:6:"编程";s:5:"value";s:4:"code";s:6:"values";a:5:{i:0;s:4:"code";i:1;s:6:"编程";i:2;s:9:"编程题";i:3;s:6:"代码";i:4;s:9:"代码题";}}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.type.options.spider', 0, 'object', 'a:9:{i:0;a:2:{s:5:"label";s:6:"音频";s:5:"value";s:10:"post_audio";}i:1;a:2:{s:5:"label";s:6:"图片";s:5:"value";s:10:"post_image";}i:2;a:2:{s:5:"label";s:6:"资讯";s:5:"value";s:9:"post_news";}i:3;a:2:{s:5:"label";s:6:"小说";s:5:"value";s:10:"post_novel";}i:4;a:2:{s:5:"label";s:6:"试题";s:5:"value";s:13:"post_question";}i:5;a:2:{s:5:"label";s:6:"语录";s:5:"value";s:10:"post_quote";}i:6;a:2:{s:5:"label";s:6:"应用";s:5:"value";s:13:"post_software";}i:7;a:2:{s:5:"label";s:6:"故事";s:5:"value";s:10:"post_story";}i:8;a:2:{s:5:"label";s:6:"视频";s:5:"value";s:10:"post_video";}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.status.default', 0, 'string', 'draft');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.status.options.default', 0, 'object', 'a:3:{i:0;a:2:{s:5:"label";s:6:"草稿";s:5:"value";s:5:"draft";}i:1;a:2:{s:5:"label";s:6:"私有";s:5:"value";s:7:"private";}i:2;a:2:{s:5:"label";s:6:"公开";s:5:"value";s:7:"publish";}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.text.default', 0, 'string', '<!--markdown-->\r\n\r\n\r\n\r\n<!--more-->\r\n\r\n\r\n');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.text.spider', 0, 'object', 'a:4:{s:8:"discover";a:7:{s:4:"urls";a:0:{}s:3:"url";s:0:"";s:6:"groups";a:0:{}s:8:"contents";s:47:"repeated//*[contains(@class,\'content_wrapper\')]";s:13:"contents_slug";s:68:"//*[contains(@class,\'content_slug_wrapper\')]/@href|fill_url({{url}})";s:14:"contents_title";s:52:"//*[contains(@class,\'content_title_wrapper\')]/@title";s:12:"contents_ico";s:58:"//*[contains(@class,\'content_ico_wrapper\')]/@data-original";}s:6:"detail";a:0:{}s:8:"field_01";a:0:{}s:8:"field_02";a:0:{}}');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.text.openapi', 0, 'object', '');
REPLACE INTO `_options` (`name`, `user`, `type`, `value`) VALUES ('content.text.snippet', 0, 'object', '');


-- ********************* [ BEG::Spider ] *********************
-- spider_metas
-- spider_contents
UPDATE `spider_contents` SET `type` = 'post_video' WHERE `type` = 'video_source';
UPDATE `spider_contents` SET `type` = 'post_novel' WHERE `type` = 'novel_source';
UPDATE `spider_contents` SET `type` = 'post_question' WHERE `type` = 'question_source';
-- spider_links
-- ********************* [ END::Spider ] *********************
