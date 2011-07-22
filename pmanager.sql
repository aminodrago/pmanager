-- phpMyAdmin SQL Dump
-- version 3.4.3deb1.natty~ppa.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2011 a las 13:59:38
-- Versión del servidor: 5.1.54
-- Versión de PHP: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pmanager`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_activity_logs`
--

CREATE TABLE IF NOT EXISTS `acx_activity_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT 'ActivityLog',
  `object_id` int(11) unsigned NOT NULL DEFAULT '0',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `action` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by_id` smallint(6) DEFAULT NULL,
  `created_by_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `created_on` (`created_on`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `acx_activity_logs`
--

INSERT INTO `acx_activity_logs` (`id`, `type`, `object_id`, `project_id`, `action`, `created_on`, `created_by_id`, `created_by_name`, `created_by_email`, `comment`) VALUES
(1, 'ObjectCreatedActivityLog', 5, 1, NULL, '2011-07-06 23:23:02', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(2, 'NewTaskActivityLog', 6, 1, NULL, '2011-07-06 23:23:33', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(3, 'NewTaskActivityLog', 7, 1, NULL, '2011-07-06 23:23:44', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(4, 'TimeAddedActivityLog', 8, 1, NULL, '2011-07-06 23:24:05', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(5, 'NewCommentActivityLog', 9, 1, NULL, '2011-07-06 23:26:47', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(6, 'ObjectTrashedActivityLog', 7, 1, NULL, '2011-07-06 23:33:18', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(7, 'ObjectCreatedActivityLog', 14, 2, NULL, '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(8, 'NewTaskActivityLog', 15, 2, NULL, '2011-07-07 20:51:19', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(9, 'NewTaskActivityLog', 16, 2, NULL, '2011-07-07 20:52:52', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(10, 'NewCommentActivityLog', 17, 2, NULL, '2011-07-07 20:53:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(11, 'NewFileActivityLog', 18, 2, NULL, '2011-07-11 22:15:54', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(12, 'ObjectCreatedActivityLog', 19, 2, NULL, '2011-07-11 22:16:55', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(13, 'ObjectCreatedActivityLog', 20, 2, NULL, '2011-07-11 22:17:39', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(14, 'ObjectCreatedActivityLog', 21, 2, NULL, '2011-07-11 22:18:14', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(15, 'ObjectCreatedActivityLog', 22, 2, NULL, '2011-07-11 22:19:32', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(16, 'TimeAddedActivityLog', 23, 2, NULL, '2011-07-11 22:20:14', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL),
(17, 'TimeAddedActivityLog', 24, 2, NULL, '2011-07-18 22:22:18', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(18, 'TimeAddedActivityLog', 25, 1, NULL, '2011-07-18 22:22:39', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(19, 'NewCommentActivityLog', 26, 1, NULL, '2011-07-19 17:37:09', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(20, 'NewCommentActivityLog', 27, 1, NULL, '2011-07-19 17:37:31', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(21, 'NewCommentActivityLog', 28, 2, NULL, '2011-07-19 17:41:57', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(22, 'NewCommentActivityLog', 29, 1, NULL, '2011-07-19 18:08:28', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(23, 'NewCommentActivityLog', 30, 2, NULL, '2011-07-19 18:10:41', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(24, 'NewCommentActivityLog', 31, 1, NULL, '2011-07-19 18:11:25', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(25, 'NewCommentActivityLog', 32, 1, NULL, '2011-07-19 18:45:11', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL),
(26, 'NewCommentActivityLog', 33, 1, NULL, '2011-07-19 18:46:26', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_assignments`
--

CREATE TABLE IF NOT EXISTS `acx_assignments` (
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_owner` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`object_id`),
  KEY `object_id` (`object_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_assignments`
--

INSERT INTO `acx_assignments` (`user_id`, `object_id`, `is_owner`) VALUES
(19, 7, 1),
(19, 14, 0),
(19, 21, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_assignment_filters`
--

CREATE TABLE IF NOT EXISTS `acx_assignment_filters` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `is_private` tinyint(1) unsigned NOT NULL,
  `user_filter` enum('anybody','not_assigned','logged_user','logged_user_responsible','company','selected') NOT NULL DEFAULT 'logged_user',
  `user_filter_data` text,
  `project_filter` enum('all','active','selected') NOT NULL,
  `project_filter_data` text,
  `date_filter` enum('all','late','today','tomorrow','this_week','next_week','this_month','next_month','selected_date','selected_range') NOT NULL DEFAULT 'all',
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `status_filter` enum('active','completed','all') NOT NULL DEFAULT 'all',
  `objects_per_page` smallint(5) unsigned DEFAULT NULL,
  `order_by` varchar(50) DEFAULT NULL,
  `created_by_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `acx_assignment_filters`
--

INSERT INTO `acx_assignment_filters` (`id`, `name`, `group_name`, `is_private`, `user_filter`, `user_filter_data`, `project_filter`, `project_filter_data`, `date_filter`, `date_from`, `date_to`, `status_filter`, `objects_per_page`, `order_by`, `created_by_id`) VALUES
(1, 'All', 'Mine', 0, 'logged_user', 'N;', 'active', 'N;', 'all', NULL, NULL, 'all', 30, 'priority DESC', 19),
(2, 'Today', 'Mine', 0, 'logged_user', 'N;', 'active', 'N;', 'today', NULL, NULL, 'all', 30, 'priority DESC', 19),
(3, 'Late', 'Mine', 0, 'logged_user', 'N;', 'active', 'N;', 'late', NULL, NULL, 'all', 30, 'due_on ASC', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_attachments`
--

CREATE TABLE IF NOT EXISTS `acx_attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `parent_type` varchar(30) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `mime_type` varchar(100) NOT NULL DEFAULT 'application/octet-stream',
  `size` int(10) unsigned NOT NULL DEFAULT '0',
  `location` varchar(50) NOT NULL,
  `attachment_type` enum('attachment','file_revision') NOT NULL DEFAULT 'attachment',
  `created_on` datetime DEFAULT NULL,
  `created_by_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `created_by_name` varchar(100) DEFAULT NULL,
  `created_by_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `created_on` (`created_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `acx_attachments`
--

INSERT INTO `acx_attachments` (`id`, `parent_id`, `parent_type`, `name`, `mime_type`, `size`, `location`, `attachment_type`, `created_on`, `created_by_id`, `created_by_name`, `created_by_email`) VALUES
(1, 14, 'Ticket', '1.png', 'image/png', 1224454, 'zu9WRtFSnY-DAdzAoK1rx-dazktXp1ph-pKfaJXueEI', 'attachment', '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(2, 14, 'Ticket', '2.png', 'image/png', 880159, '3997wyj8nA-trBTCUFRKV-ZZu515Qj0k-R2hPWDc6zq', 'attachment', '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(3, 14, 'Ticket', '3.jpg', 'image/jpeg', 261926, 'uSHVA0F7Pe-RE4ayS6e35-oJUvnFYpzn-FU6bEvaqQd', 'attachment', '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(4, 14, 'Ticket', '4.png', 'image/png', 760406, '8j89HO4LGW-ZeFkra9Gzk-bjfdNAdNRT-QN3MLzqDWp', 'attachment', '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(5, 14, 'Ticket', '5.png', 'image/png', 975218, 'Z2U0hV8Ojh-PsmS7NVItD-o8v2HUhaU5-pIUG2UDF5K', 'attachment', '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(6, 18, 'File', '_20110711_1114.sql', 'text/x-sql', 84791, 'OaDCfjx8Xt-XJ80fB0Pxt-2wKViQlj0C-Y06peeMa2M', 'file_revision', '2011-07-11 22:15:54', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(7, 19, 'Discussion', 'crossdomain.xml', 'text/xml', 158, 'yGBr5Sk5mN-7C4M4sz6bG-9taNYkVthx-wG5YXXF9RR', 'attachment', '2011-07-11 22:16:55', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com'),
(8, 27, 'Comment', 'pgadmin.log', 'text/x-log', 786728, 'vTKKnGgrYU-3ZAHtPCpM1-UghmAgQUod-JJXiiaPprC', 'attachment', '2011-07-19 17:37:30', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(9, 28, 'Comment', 'soapui-settings.xml', 'text/xml', 3007, 'lkfyM18l0l-I9pQ5Oa2Ul-C8ihNkTUCV-6B7a1H1WTZ', 'attachment', '2011-07-19 17:41:57', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(10, 28, 'Comment', 'server_information.jpg', 'image/jpeg', 61235, '9qWm8P29GK-i0HqfjBY44-IYtEZiaO6U-C4ne7464yF', 'attachment', '2011-07-19 17:41:57', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(11, 29, 'Comment', 'Picture 2.png', 'image/png', 162167, 'LzEdzXZWEL-EGzmSsjR3A-HwGuu8550k-nJJRN0DBU9', 'attachment', '2011-07-19 18:08:27', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(12, 30, 'Comment', 'examples.desktop', 'application/octet-stream', 179, 'Kv3jFaewJW-9iuRhYpZ2W-UjVOyLkYUN-Yt0PDDPH1n', 'attachment', '2011-07-19 18:10:40', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(13, 31, 'Comment', 'default-soapui-workspace.xml', 'text/xml', 699, 'EmmV44EBwn-zrOYKLHj6V-kYaZMWC0Z1-tlcde6HFrU', 'attachment', '2011-07-19 18:11:25', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(14, 32, 'Comment', 'mod_promotionrates.php', 'application/x-httpd-php', 2951, 'BAogVfiCcf-pGhEtoUtXI-mI4nX6QS4h-hho4mwuoBJ', 'attachment', '2011-07-19 18:45:11', 20, 'Jose  Mejia', 'joseg867@gmail.com'),
(15, 33, 'Comment', 'index.php', 'application/x-httpd-php', 5941, 'RdSAaUwOem-DkvbNQOVca-B4XTw0JkJ8-VqCQmcOqoh', 'attachment', '2011-07-19 18:46:26', 20, 'Jose  Mejia', 'joseg867@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_commit_project_objects`
--

CREATE TABLE IF NOT EXISTS `acx_commit_project_objects` (
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `object_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `revision` int(10) unsigned NOT NULL DEFAULT '0',
  `repository_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`revision`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_companies`
--

CREATE TABLE IF NOT EXISTS `acx_companies` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `is_owner` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_archived` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `acx_companies`
--

INSERT INTO `acx_companies` (`id`, `name`, `is_owner`, `is_archived`, `created_on`, `updated_on`) VALUES
(2, 'Emarketing', 1, 0, '2011-07-05 10:45:15', NULL),
(3, 'TPP', 0, 0, '2011-07-05 22:14:16', '2011-07-05 22:14:25'),
(4, 'TPP E-Marketing', 0, 0, '2011-07-21 23:08:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_company_config_options`
--

CREATE TABLE IF NOT EXISTS `acx_company_config_options` (
  `company_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `value` text,
  PRIMARY KEY (`company_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_company_config_options`
--

INSERT INTO `acx_company_config_options` (`company_id`, `name`, `value`) VALUES
(3, 'office_address', 's:6:"Ciudad";'),
(3, 'office_fax', 's:9:"123456789";'),
(3, 'office_homepage', 's:21:"http://www.google.com";'),
(3, 'office_phone', 's:9:"123456789";');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_config_options`
--

CREATE TABLE IF NOT EXISTS `acx_config_options` (
  `name` varchar(50) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL DEFAULT '',
  `type` enum('system','project','user','company') NOT NULL DEFAULT 'system',
  `value` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_config_options`
--

INSERT INTO `acx_config_options` (`name`, `module`, `type`, `value`) VALUES
('backup_enabled', 'backup', 'system', 'b:0;'),
('backup_how_many_backups', 'backup', 'system', 'i:5;'),
('default_assignments_filter', 'system', 'user', 'i:1;'),
('default_role', 'system', 'system', 'i:6;'),
('discussion_categories', 'discussions', 'system', 'a:1:{i:0;s:7:"General";}'),
('file_categories', 'files', 'system', 'a:1:{i:0;s:7:"General";}'),
('format_date', 'system', 'user', 's:9:"%b %d. %Y";'),
('format_time', 'system', 'user', 's:8:"%I:%M %p";'),
('im_type', 'system', 'user', 's:0:"";'),
('im_value', 'system', 'user', 's:0:"";'),
('language', 'system', 'user', 'i:3;'),
('last_daily_activity', 'system', 'system', 'N;'),
('last_frequently_activity', 'system', 'system', 'N;'),
('last_hourly_activity', 'system', 'system', 'N;'),
('mailing', 'system', 'system', 's:6:"native";'),
('mailing_empty_return_path', 'system', 'system', 'b:0;'),
('mailing_mark_as_bulk', 'system', 'system', 'b:1;'),
('mailing_native_options', 'system', 'system', 's:9:"-oi -f %s";'),
('mailing_smtp_authenticate', 'system', 'system', 'b:0;'),
('mailing_smtp_host', 'system', 'system', 's:0:"";'),
('mailing_smtp_password', 'system', 'system', 's:0:"";'),
('mailing_smtp_port', 'system', 'system', 'i:25;'),
('mailing_smtp_security', 'system', 'system', 'i:25;'),
('mailing_smtp_username', 'system', 'system', 's:0:"";'),
('maintenance_enabled', 'system', 'system', 'b:0;'),
('maintenance_message', 'system', 'system', 'N;'),
('notifications_from_email', 'system', 'system', 's:0:"";'),
('notifications_from_name', 'system', 'system', 's:0:"";'),
('office_address', 'system', 'company', 's:0:"";'),
('office_fax', 'system', 'company', 's:0:"";'),
('office_homepage', 'system', 'company', 's:0:"";'),
('office_phone', 'system', 'company', 's:0:"";'),
('on_logout_url', 'system', 'system', 's:0:"";'),
('pages_categories', 'pages', 'system', 'a:1:{i:0;s:7:"General";}'),
('phone_mobile', 'system', 'user', 's:0:"";'),
('phone_work', 'system', 'user', 's:0:"";'),
('projects_use_client_icons', 'system', 'system', 'b:0;'),
('project_templates_group', 'system', 'system', 's:0:"";'),
('public_submit_default_project', 'public_submit', 'system', 'i:0;'),
('public_submit_enabled', 'public_submit', 'system', 'b:0;'),
('public_submit_enable_captcha', 'public_submit', 'system', 'b:1;'),
('show_welcome_message', 'system', 'system', 'b:0;'),
('source_svn_config_dir', 'source', 'system', 'N;'),
('source_svn_path', 'source', 'system', 'N;'),
('status_update_last_visited', 'status', 'user', 'N;'),
('theme', 'system', 'user', 's:7:"sandbox";'),
('ticket_categories', 'tickets', 'system', 'a:1:{i:0;s:7:"General";}'),
('time_dst', 'system', 'user', 'i:0;'),
('time_first_week_day', 'system', 'user', 'i:0;'),
('time_timezone', 'system', 'user', 'i:0;'),
('title', 'system', 'user', 'b:0;'),
('visual_editor', 'system', 'user', 'b:1;'),
('welcome_message', 'system', 'user', 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_criticality`
--

CREATE TABLE IF NOT EXISTS `acx_criticality` (
  `criticality_id` int(11) NOT NULL AUTO_INCREMENT,
  `criticality_name` varchar(50) NOT NULL,
  `criticality_order` int(11) NOT NULL,
  PRIMARY KEY (`criticality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_documents`
--

CREATE TABLE IF NOT EXISTS `acx_documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` tinyint(3) unsigned DEFAULT NULL,
  `type` enum('text','file') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'text',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `mime_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visibility` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `is_pinned` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created_by_id` smallint(5) unsigned NOT NULL,
  `created_by_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_by_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `acx_documents`
--

INSERT INTO `acx_documents` (`id`, `category_id`, `type`, `name`, `body`, `mime_type`, `visibility`, `is_pinned`, `created_by_id`, `created_by_name`, `created_by_email`, `created_on`) VALUES
(1, 1, 'text', 'documentJonas001', '<p>DescripcionDocumentJonas001</p>', NULL, 1, 1, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-18 23:24:22'),
(2, 2, 'file', 'dumpPronet', 'Zazu3ig4L4-unUxxkD4kt-P552qHCu9L-yWLXgD7nvG', 'application/octet-stream', 1, 0, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-18 23:24:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_document_categories`
--

CREATE TABLE IF NOT EXISTS `acx_document_categories` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `acx_document_categories`
--

INSERT INTO `acx_document_categories` (`id`, `name`) VALUES
(1, 'General'),
(2, 'testCategory');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_email_templates`
--

CREATE TABLE IF NOT EXISTS `acx_email_templates` (
  `name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `body` text,
  `variables` text,
  PRIMARY KEY (`name`,`module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_email_templates`
--

INSERT INTO `acx_email_templates` (`name`, `module`, `subject`, `body`, `variables`) VALUES
('forgot_password', 'system', 'Reset your password', '<p>Hi,</p>\n<p>Visit <a href=":reset_url">this page</a> to reset your password. This page will be valid for 2 days!</p>\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nreset_url'),
('new_comment', 'resources', '[:project_name] New comment on '':object_name'' :object_type has been posted', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> has replied to <a href=":object_url">:object_name</a> :object_type:</p>\n\n<hr />\n\n:comment_body\n<hr />\n\n<p><a href=":comment_url">Click here</a> to see the comment. <a href=":object_url">:object_name</a> :object_type details:</p>\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncomment_body\ncomment_url\ncreated_by_url\ncreated_by_name\ndetails_body'),
('new_discussion', 'discussions', '[:project_name] Discussion '':object_name'' has been started', '<p>Hi,</p>\n<p><a href=":created_by_url">:created_by_name</a> has started a new discussion:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\nlast_comment_body\ndetails_body'),
('new_file', 'files', '[:project_name] File '':object_name'' has been uploaded', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> uploaded a new file:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\ndetails_body'),
('new_page', 'pages', '[:project_name] Page '':object_name'' has been created', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> has created a new page:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\ndetails_body'),
('new_revision', 'files', '[:project_name] New version of '':object_name'' file is up', '<p>Hi,</p>\n<p><a href=":created_by_url">:created_by_name</a> has uploaded a new version of <a href=":object_url">:object_name</a> file in <a href=":project_url">:project_name</a> project.</p>\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_url\ncreated_by_name'),
('new_revision', 'pages', '[:project_name] Revision #:revision_num of '':old_name'' page has been posted', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> has created a new version of <a href=":old_url">:old_name</a> page:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_url\ncreated_by_name\nrevision_num\nold_url\nold_name\nold_body\nnew_url\nnew_name\nnew_body\ndetails_body'),
('new_user', 'system', 'Your account has been created', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> has created a new account for you. You can <a href=":login_url">log in</a> with these parameters:</p>\n\n<p>Email: '':email'' (without quotes)<br />Password: '':password'' (without quotes)</p>\n\n<hr />\n\n<p>:welcome_body</p>\n\n<hr />\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\ncreated_by_id\ncreated_by_name\ncreated_by_url\nemail\npassword\nlogin_url\nwelcome_body'),
('reminder', 'system', '[:project_name] :reminded_by_name sent you a reminder', '<p>Hi,</p>\n\n<p><a href=":reminded_by_url">:reminded_by_name</a> wants you to check out <a href=":object_url">:object_name</a> :object_type. Comment:</p>\n\n<hr />\n\n<p>:comment_body</p>\n\n<hr />\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nreminded_by_name\nreminded_by_url\nobject_name\nobject_url\nobject_type\ncomment_body\nproject_name\nproject_url'),
('repository_updated', 'source', '[:project_name] '':object_name'' :object_type has just been updated', ':details_body\n<p>Hi,</p>\n<p>:object_type :object_name at :project_name project has just been updated with :commit_count new commits</p>\n<div>:commits_body</div>\n<p>Best,<br />:owner_company_name</p>', 'commits_body\ndetails_body\nproject_name\nobject_name\nobject_type\nobject_url\nproject_url\ncommit_count'),
('task_assigned', 'resources', '[:project_name] New :object_type has been posted', '<p>Hi,</p>\n\n<p><a href=":created_by_url">:created_by_name</a> created a new :object_type:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\ndetails_body'),
('task_completed', 'resources', '[:project_name] '':object_name'' :object_type has been completed', '<p>Hi,</p>\n\n<p><a href=":completed_by_url">:completed_by_name</a> has completed :object_type <a href=":object_url">:object_name</a>:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\ncompleted_by_name\ncompleted_by_url\ndetails_body'),
('task_completed_with_comment', 'resources', '[:project_name] '':object_name'' :object_type has been completed', '<p>Hi,</p>\n\n<p><a href=":completed_by_url">:completed_by_name</a> has completed :object_type <a href=":object_url">:object_name</a> with a comment:</p>\n\n<hr />\n\n:completion_comment_body\n\n<hr />\n\n<p><a href=":object_url">:object_name</a> :object_type details:</p>\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\ncompleted_by_name\ncompleted_by_url\ncompletion_comment_body\ndetails_body'),
('task_reassigned', 'resources', '[:project_name] '':object_name'' :object_type reassigned', '<p>Hi,</p>\n\n<p>We have an update that you might be interested in: :object_type <a href=":object_url">:object_name</a> has been updated. Changes:\n\n:changes_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\nchanges_body'),
('task_reopened', 'resources', '[:project_name] '':object_name'' :object_type has been reopened', '<p>Hi,</p>\n\n<p><a href=":reopened_by_url">:reopened_by_name</a> has reopened :object_type <a href=":object_url">:object_name</a>:</p>\n\n:details_body\n\n<p>Best,<br />:owner_company_name</p>', 'owner_company_name\nproject_name\nproject_url\nobject_type\nobject_name\nobject_body\nobject_url\ncreated_by_name\ncreated_by_url\nreopened_by_name\nreopened_by_url\ndetails_body');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_email_template_translations`
--

CREATE TABLE IF NOT EXISTS `acx_email_template_translations` (
  `name` varchar(50) NOT NULL,
  `module` varchar(50) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `body` text,
  PRIMARY KEY (`name`,`module`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_email_template_translations`
--

INSERT INTO `acx_email_template_translations` (`name`, `module`, `locale`, `subject`, `body`) VALUES
('new_comment', 'resources', 'es.UTF-8', '[:project_name] New comment on '':object_name'' :object_type has been posted', '<p>Hi,</p>\r\n\r\n<p><a href=":created_by_url">:created_by_name</a> has replied to <a href=":object_url">:object_name</a> :object_type:</p>\r\n\r\n<hr />\r\n\r\n:comment_body\r\n<hr />\r\n\r\n<p><a href=":comment_url">Click here</a> to see the comment. <a href=":object_url">:object_name</a> :object_type details:</p>\r\n:details_body\r\n\r\n<p>Best,<br />:owner_company_name</p>'),
('new_comment', 'resources', 'es_ES.UTF-8', '[:project_name] New comment on '':object_name'' :object_type has been posted', '<p>Hi,</p>\r\n\r\n<p><a href=":created_by_url">:created_by_name</a> has replied to <a href=":object_url">:object_name</a> :object_type:</p>\r\n\r\n<hr />\r\n\r\n:comment_body\r\n<hr />\r\n\r\n<p><a href=":comment_url">Click here</a> to see the comment. <a href=":object_url">:object_name</a> :object_type details:</p>\r\n:details_body\r\n\r\n<p>Best,<br />:owner_company_name</p>'),
('new_page', 'pages', 'es_ES.UTF-8', '[:project_name] Page '':object_name'' has been created', '<p>Hi,</p>\r\n\r\n<p><a href=":created_by_url">:Creado_por_nombre</a> has created a new page:</p>\r\n\r\n:details_body\r\n\r\n<p>Best,<br />:owner_company_name</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_hability`
--

CREATE TABLE IF NOT EXISTS `acx_hability` (
  `hability_id` int(11) NOT NULL AUTO_INCREMENT,
  `hability_name` varchar(100) NOT NULL,
  `hability_order` tinyint(2) NOT NULL,
  PRIMARY KEY (`hability_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_incoming_mailboxes`
--

CREATE TABLE IF NOT EXISTS `acx_incoming_mailboxes` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` smallint(5) unsigned DEFAULT NULL,
  `object_type` enum('discussion','ticket') NOT NULL DEFAULT 'ticket',
  `mailbox` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `host` varchar(255) DEFAULT NULL,
  `from_name` varchar(50) DEFAULT NULL,
  `from_email` varchar(100) DEFAULT NULL,
  `type` enum('POP3','IMAP') NOT NULL DEFAULT 'POP3',
  `port` int(10) unsigned DEFAULT NULL,
  `security` enum('NONE','TLS','SSL') NOT NULL DEFAULT 'NONE',
  `last_status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `enabled` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `accept_all_registered` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `accept_anonymous` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_incoming_mails`
--

CREATE TABLE IF NOT EXISTS `acx_incoming_mails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `project_id` smallint(5) unsigned DEFAULT NULL,
  `incoming_mailbox_id` smallint(5) unsigned DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` text,
  `headers` longtext,
  `object_type` enum('discussion','comment','ticket') NOT NULL DEFAULT 'ticket',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `created_by_id` smallint(5) unsigned DEFAULT NULL,
  `created_by_name` varchar(255) DEFAULT NULL,
  `created_by_email` varchar(255) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_incoming_mail_activity_logs`
--

CREATE TABLE IF NOT EXISTS `acx_incoming_mail_activity_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mailbox_id` smallint(5) unsigned DEFAULT NULL,
  `state` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `response` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `incoming_mail_id` int(10) unsigned DEFAULT NULL,
  `project_object_id` int(10) unsigned DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_on` (`created_on`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_incoming_mail_attachments`
--

CREATE TABLE IF NOT EXISTS `acx_incoming_mail_attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail_id` int(10) unsigned DEFAULT NULL,
  `temporary_filename` varchar(255) DEFAULT NULL,
  `original_filename` varchar(255) DEFAULT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_languages`
--

CREATE TABLE IF NOT EXISTS `acx_languages` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `locale` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `acx_languages`
--

INSERT INTO `acx_languages` (`id`, `name`, `locale`) VALUES
(1, 'English', 'en_US.UTF-8'),
(2, 'Español', 'es_ES.UTF-8'),
(3, 'Español2', 'es.UTF-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_modules`
--

CREATE TABLE IF NOT EXISTS `acx_modules` (
  `name` varchar(50) NOT NULL DEFAULT '',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `position` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_modules`
--

INSERT INTO `acx_modules` (`name`, `is_system`, `position`) VALUES
('backup', 0, 0),
('calendar', 0, 6),
('checklists', 0, 0),
('discussions', 0, 3),
('documents', 0, 0),
('files', 0, 5),
('milestones', 1, 4),
('mobile_access', 0, 10),
('pages', 0, 7),
('project_exporter', 0, 0),
('public_submit', 0, 0),
('resources', 1, 2),
('source', 0, 0),
('status', 0, 0),
('system', 1, 1),
('tickets', 0, 8),
('timetracking', 0, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_page_versions`
--

CREATE TABLE IF NOT EXISTS `acx_page_versions` (
  `page_id` int(10) unsigned NOT NULL DEFAULT '0',
  `version` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `body` longtext,
  `created_on` datetime DEFAULT NULL,
  `created_by_id` smallint(5) unsigned DEFAULT NULL,
  `created_by_name` varchar(100) DEFAULT NULL,
  `created_by_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`page_id`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_pinned_projects`
--

CREATE TABLE IF NOT EXISTS `acx_pinned_projects` (
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`project_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_pinned_projects`
--

INSERT INTO `acx_pinned_projects` (`project_id`, `user_id`) VALUES
(2, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_priority`
--

CREATE TABLE IF NOT EXISTS `acx_priority` (
  `priority_id` mediumint(5) NOT NULL DEFAULT '0',
  `priority_alias` varchar(25) NOT NULL,
  `priority_name` varchar(25) NOT NULL,
  `priority_order` tinyint(2) NOT NULL,
  PRIMARY KEY (`priority_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acx_priority`
--

INSERT INTO `acx_priority` (`priority_id`, `priority_alias`, `priority_name`, `priority_order`) VALUES
(-2, 'lowest', 'Lowest', 1),
(-1, 'low', 'Low', 2),
(0, 'normal', 'Normal', 3),
(1, 'high', 'High', 4),
(2, 'highest', 'Highest', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_projects`
--

CREATE TABLE IF NOT EXISTS `acx_projects` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `company_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '',
  `leader_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `leader_name` varchar(100) DEFAULT NULL,
  `leader_email` varchar(100) DEFAULT NULL,
  `overview` text,
  `status` enum('active','paused','completed','canceled') NOT NULL DEFAULT 'active',
  `type` enum('normal','system') NOT NULL DEFAULT 'normal',
  `default_visibility` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `starts_on` date DEFAULT NULL,
  `completed_on` datetime DEFAULT NULL,
  `completed_by_id` smallint(5) unsigned DEFAULT NULL,
  `completed_by_name` varchar(100) DEFAULT NULL,
  `completed_by_email` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by_id` smallint(5) unsigned DEFAULT NULL,
  `created_by_name` varchar(100) DEFAULT NULL,
  `created_by_email` varchar(100) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `open_tasks_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `total_tasks_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `created_on` (`created_on`),
  KEY `group_id` (`group_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `acx_projects`
--

INSERT INTO `acx_projects` (`id`, `group_id`, `company_id`, `name`, `leader_id`, `leader_name`, `leader_email`, `overview`, `status`, `type`, `default_visibility`, `starts_on`, `completed_on`, `completed_by_id`, `completed_by_name`, `completed_by_email`, `created_on`, `created_by_id`, `created_by_name`, `created_by_email`, `updated_on`, `open_tasks_count`, `total_tasks_count`) VALUES
(1, 1, 3, 'Plataforma de Juegos', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '<p>Sitio desarrollado en PHP en framework de Joomla</p>', 'active', 'normal', 0, '2011-06-29', NULL, NULL, NULL, NULL, '2011-07-06 23:21:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-07 20:30:57', 2, 2),
(2, 1, 0, 'Referidos Hoduras', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '<p>Sitio desarrollado en PHP  en el framwork Joomla, para efectos de desarrollo se implentara en telefoniaguatemala.com</p>', 'active', 'normal', 1, '2011-07-07', NULL, NULL, NULL, NULL, '2011-07-07 20:28:43', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:18:14', 5, 5),
(3, 0, 2, '111', 19, 'Jose Mejia', 'nopticon@gmail.com', '<p>222</p>', 'active', 'normal', 1, NULL, NULL, NULL, NULL, NULL, '2011-07-20 23:30:02', 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:34:12', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_config_options`
--

CREATE TABLE IF NOT EXISTS `acx_project_config_options` (
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `value` text,
  PRIMARY KEY (`project_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_groups`
--

CREATE TABLE IF NOT EXISTS `acx_project_groups` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `acx_project_groups`
--

INSERT INTO `acx_project_groups` (`id`, `name`) VALUES
(1, 'Default'),
(2, 'Project Group 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_objects`
--

CREATE TABLE IF NOT EXISTS `acx_project_objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source` varchar(50) DEFAULT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'ProjectObject',
  `module` varchar(30) NOT NULL DEFAULT 'system',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `milestone_id` int(10) unsigned DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `parent_type` varchar(30) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `body` longtext,
  `tags` text,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  `visibility` tinyint(4) NOT NULL DEFAULT '0',
  `priority` tinyint(4) DEFAULT NULL,
  `resolution` varchar(50) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `created_by_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `created_by_name` varchar(100) DEFAULT NULL,
  `created_by_email` varchar(100) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by_id` smallint(5) unsigned DEFAULT NULL,
  `updated_by_name` varchar(100) DEFAULT NULL,
  `updated_by_email` varchar(100) DEFAULT NULL,
  `due_on` date DEFAULT NULL,
  `completed_on` datetime DEFAULT NULL,
  `completed_by_id` smallint(5) unsigned DEFAULT NULL,
  `completed_by_name` varchar(100) DEFAULT NULL,
  `completed_by_email` varchar(100) DEFAULT NULL,
  `comments_count` smallint(5) unsigned DEFAULT NULL,
  `has_time` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_locked` tinyint(3) unsigned DEFAULT NULL,
  `varchar_field_1` varchar(255) DEFAULT NULL,
  `varchar_field_2` varchar(255) DEFAULT NULL,
  `integer_field_1` int(11) DEFAULT NULL,
  `integer_field_2` int(11) DEFAULT NULL,
  `float_field_1` double(10,2) DEFAULT NULL,
  `float_field_2` double(10,2) DEFAULT NULL,
  `text_field_1` text,
  `text_field_2` text,
  `date_field_1` date DEFAULT NULL,
  `date_field_2` date DEFAULT NULL,
  `datetime_field_1` datetime DEFAULT NULL,
  `datetime_field_2` datetime DEFAULT NULL,
  `boolean_field_1` tinyint(1) unsigned DEFAULT NULL,
  `boolean_field_2` tinyint(1) unsigned DEFAULT NULL,
  `position` int(10) unsigned DEFAULT NULL,
  `version` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `module` (`module`),
  KEY `project_id` (`project_id`),
  KEY `parent_id` (`parent_id`),
  KEY `created_on` (`created_on`),
  KEY `due_on` (`due_on`),
  KEY `completed_on` (`completed_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `acx_project_objects`
--

INSERT INTO `acx_project_objects` (`id`, `source`, `type`, `module`, `project_id`, `milestone_id`, `parent_id`, `parent_type`, `name`, `body`, `tags`, `state`, `visibility`, `priority`, `resolution`, `created_on`, `created_by_id`, `created_by_name`, `created_by_email`, `updated_on`, `updated_by_id`, `updated_by_name`, `updated_by_email`, `due_on`, `completed_on`, `completed_by_id`, `completed_by_name`, `completed_by_email`, `comments_count`, `has_time`, `is_locked`, `varchar_field_1`, `varchar_field_2`, `integer_field_1`, `integer_field_2`, `float_field_1`, `float_field_2`, `text_field_1`, `text_field_2`, `date_field_1`, `date_field_2`, `datetime_field_1`, `datetime_field_2`, `boolean_field_1`, `boolean_field_2`, `position`, `version`) VALUES
(1, NULL, 'Category', 'discussions', 1, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-06 23:21:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'discussions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, NULL, 'Category', 'files', 1, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-06 23:21:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'files', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, NULL, 'Category', 'pages', 1, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-06 23:21:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'pages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, NULL, 'Category', 'tickets', 1, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-06 23:21:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, NULL, 'Ticket', 'tickets', 1, 0, 4, NULL, 'test summary', '<p>testLeonel aaa</p>', 'trotar', 3, 1, 0, NULL, '2011-07-06 23:23:02', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:26', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-06', NULL, NULL, NULL, NULL, 7, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(6, NULL, 'Task', 'resources', 1, 0, 5, 'Ticket', NULL, 'test222', NULL, 3, 1, 1, NULL, '2011-07-06 23:23:33', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:17:24', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2012-07-18', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 6),
(7, NULL, 'Task', 'resources', 1, 0, 5, 'Ticket', NULL, 'test', NULL, 1, 1, 1, NULL, '2011-07-06 23:23:44', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-06 23:33:18', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4),
(8, NULL, 'TimeRecord', 'timetracking', 1, NULL, NULL, NULL, NULL, '1111', NULL, 3, 1, NULL, NULL, '2011-07-06 23:24:05', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Jose  Mejia', 'joseg867@gmail.com', 0, 1, 1.00, NULL, NULL, NULL, '2011-07-06', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>asdasd</p>', NULL, 3, 1, NULL, NULL, '2011-07-06 23:26:45', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-06 23:27:20', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(10, NULL, 'Category', 'discussions', 2, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-07 20:28:43', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'discussions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, NULL, 'Category', 'files', 2, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-07 20:28:43', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'files', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, NULL, 'Category', 'pages', 2, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-07 20:28:43', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'pages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, NULL, 'Category', 'tickets', 2, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-07 20:28:43', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, NULL, 'Ticket', 'tickets', 2, 0, 13, NULL, 'Favor de Iniciar este proyecto, hay que levantarlo en joomla en telefonia, hay que hacer el flujo de las pantallas', '', '', 3, 1, 2, NULL, '2011-07-07 20:47:06', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-19 18:10:40', 0, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-12', NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6),
(15, NULL, 'Task', 'resources', 2, 0, 14, 'Ticket', NULL, 'Enmaquetar este sitio porfavor, montarlo en telefonia guatemalam, ver comentario #1', NULL, 3, 1, 2, NULL, '2011-07-07 20:51:19', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-07 20:54:16', 19, NULL, NULL, '2011-07-08', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(16, NULL, 'Task', 'resources', 2, 0, 14, 'Ticket', NULL, 'Erick, porfavor hacer el registro de usuarios con sus referidos de amigos, ver imagen "4.png"', NULL, 3, 1, 2, NULL, '2011-07-07 20:52:52', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, '2011-07-08', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, NULL, 'Comment', 'resources', 2, NULL, 14, 'Ticket', NULL, '<p>para Diseño:</p><p> </p><p>Javier, este es el link apra descargar las artes:</p><p><a href="http://www.sendspace.com/file/9btjw1">http://www.sendspace.com/file/9btjw1</a></p>', NULL, 3, 1, NULL, NULL, '2011-07-07 20:53:46', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, NULL, 'File', 'files', 2, 0, 11, NULL, '_20110711_1114.sql', '', '', 3, 1, NULL, NULL, '2011-07-11 22:15:54', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, NULL, 'Discussion', 'discussions', 2, 0, 10, NULL, 'test', '<p>test</p>', '', 3, 1, NULL, NULL, '2011-07-11 22:16:55', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2011-07-11 22:16:55', NULL, 0, NULL, NULL, 1),
(20, NULL, 'Checklist', 'checklists', 2, 0, NULL, NULL, 'ejemplo Lista de Tareas', '<p>test</p>', 'etiquitaListaTarea', 3, 1, NULL, NULL, '2011-07-11 22:17:39', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, NULL, 'Milestone', 'milestones', 2, NULL, NULL, NULL, 'HitoEjemplo', '', 'etiqueta2Hito', 3, 1, 0, NULL, '2011-07-11 22:18:14', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', NULL, NULL, NULL, NULL, '2011-07-12', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2011-07-11', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, NULL, 'Page', 'pages', 2, 21, 12, NULL, 'pageDeEjemplo', '<p>test de la pagina de ejemplo</p>', 'etiqueta3Page', 3, 1, NULL, NULL, '2011-07-11 22:19:32', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:19:32', 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, NULL, 'TimeRecord', 'timetracking', 2, NULL, NULL, NULL, NULL, 'INGRESO DE HORA DE REFERIDOS DE HONDURAS', NULL, 3, 1, NULL, NULL, '2011-07-11 22:20:14', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:20:26', 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Jose Mejia', 'jmejia.tpp@gmail.com', 19, 3, 8.00, NULL, NULL, NULL, '2011-07-11', NULL, NULL, NULL, NULL, NULL, NULL, 4),
(24, NULL, 'TimeRecord', 'timetracking', 2, NULL, 14, 'Ticket', NULL, 'se completo la tarea', NULL, 3, 1, NULL, NULL, '2011-07-18 22:22:18', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Jose  Mejia', 'joseg867@gmail.com', 0, 1, 1.90, NULL, NULL, NULL, '2011-07-18', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, NULL, 'TimeRecord', 'timetracking', 1, NULL, 6, 'Task', NULL, 'casi finalizado', NULL, 3, 1, NULL, NULL, '2011-07-18 22:22:39', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Jose  Mejia', 'joseg867@gmail.com', 0, 1, 998.00, NULL, NULL, NULL, '2011-07-18', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>toto al atacque</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 17:37:08', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(27, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>toto al atacque 2</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 17:37:30', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, NULL, 'Comment', 'resources', 2, NULL, 14, 'Ticket', NULL, '<p>nuevo atachemet</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 17:41:57', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>yoyoyoyoyoy</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 18:08:27', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(30, NULL, 'Comment', 'resources', 2, NULL, 14, 'Ticket', NULL, '<p>yoy2</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 18:10:40', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(31, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>yoyo1</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 18:11:25', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(32, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>1.esta es una prueba.</p><p>2.esta es una prueba2.</p><p>3.esta es una prueba3.</p><p> </p>', NULL, 3, 1, NULL, NULL, '2011-07-19 18:45:11', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(33, NULL, 'Comment', 'resources', 1, NULL, 5, 'Ticket', NULL, '<p>tomate 123456789</p>', NULL, 3, 1, NULL, NULL, '2011-07-19 18:46:26', 0, 'Jose  Mejia', 'joseg867@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(34, NULL, 'Category', 'discussions', 3, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-20 23:30:02', 19, 'Jose Mejia', 'nopticon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'discussions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(35, NULL, 'Category', 'files', 3, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-20 23:30:02', 19, 'Jose Mejia', 'nopticon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'files', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(36, NULL, 'Category', 'pages', 3, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-20 23:30:02', 19, 'Jose Mejia', 'nopticon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'pages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(37, NULL, 'Category', 'tickets', 3, NULL, NULL, NULL, 'General', NULL, NULL, 3, 1, NULL, NULL, '2011-07-20 23:30:02', 19, 'Jose Mejia', 'nopticon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_object_views`
--

CREATE TABLE IF NOT EXISTS `acx_project_object_views` (
  `object_id` int(10) unsigned NOT NULL,
  `created_by_id` smallint(5) unsigned NOT NULL,
  `created_by_name` varchar(100) NOT NULL,
  `created_by_email` varchar(150) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `object_id` (`object_id`,`created_by_id`),
  KEY `created_by_id` (`created_by_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_project_object_views`
--

INSERT INTO `acx_project_object_views` (`object_id`, `created_by_id`, `created_by_name`, `created_by_email`, `created_on`) VALUES
(7, 20, 'jose jose', 'joseg867@gmail.com', '2011-07-06 23:33:13'),
(14, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(1, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(2, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(3, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(4, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(5, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(15, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(16, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(17, 25, 'Javier Rodas', 'jrodas@tppemarketing.com', '2011-07-07 21:02:19'),
(19, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:16:56'),
(7, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:16:56'),
(20, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:17:39'),
(21, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:18:15'),
(22, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-11 22:19:33'),
(14, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(1, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(2, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(3, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(4, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(5, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(15, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(16, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(17, 24, 'Erick Alvarado', 'ealvarado@tppemarketing.com', '2011-07-14 14:44:58'),
(24, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-18 22:29:57'),
(23, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-18 22:29:57'),
(6, 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-18 22:46:17'),
(1, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(2, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(3, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(4, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(16, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(17, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(28, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(30, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(10, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(12, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:10:43'),
(5, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(6, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(9, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(26, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(27, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(29, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(31, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(32, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(33, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(8, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(11, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(13, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(14, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(15, 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 18:46:27'),
(14, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(1, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(2, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(3, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(4, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(5, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(15, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(16, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(17, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(28, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(30, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(9, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(10, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43'),
(12, 19, 'Jose Mejia', 'nopticon@gmail.com', '2011-07-20 23:23:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_observations`
--

CREATE TABLE IF NOT EXISTS `acx_project_observations` (
  `observation_id` int(11) NOT NULL DEFAULT '0',
  `observation_project` int(11) NOT NULL,
  `observation_description` text NOT NULL,
  PRIMARY KEY (`observation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_project_users`
--

CREATE TABLE IF NOT EXISTS `acx_project_users` (
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `role_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `permissions` text,
  PRIMARY KEY (`user_id`,`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_project_users`
--

INSERT INTO `acx_project_users` (`user_id`, `project_id`, `role_id`, `permissions`) VALUES
(19, 1, 0, 'N;'),
(19, 2, 0, 'N;'),
(19, 3, 0, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_reference`
--

CREATE TABLE IF NOT EXISTS `acx_reference` (
  `reference_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_project` int(11) NOT NULL,
  `reference_link` varchar(255) NOT NULL,
  `reference_description` varchar(255) NOT NULL,
  PRIMARY KEY (`reference_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_reminders`
--

CREATE TABLE IF NOT EXISTS `acx_reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `comment` text,
  `created_by_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `created_by_name` varchar(100) NOT NULL,
  `created_by_email` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `created_on` (`created_on`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_resource`
--

CREATE TABLE IF NOT EXISTS `acx_resource` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_firstname` varchar(100) NOT NULL,
  `resource_lastname` varchar(100) NOT NULL,
  `resource_phone` varchar(20) NOT NULL,
  `resource_email` varchar(100) NOT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_resource_hability`
--

CREATE TABLE IF NOT EXISTS `acx_resource_hability` (
  `rhability_id` int(11) NOT NULL AUTO_INCREMENT,
  `rhability_resource` int(11) NOT NULL,
  `rhability_level` smallint(2) NOT NULL,
  PRIMARY KEY (`rhability_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_resource_type`
--

CREATE TABLE IF NOT EXISTS `acx_resource_type` (
  `resource_` int(11) NOT NULL AUTO_INCREMENT,
  `resource_name` text NOT NULL,
  `resource_order` tinyint(2) NOT NULL,
  PRIMARY KEY (`resource_`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_risk`
--

CREATE TABLE IF NOT EXISTS `acx_risk` (
  `risk_id` int(11) NOT NULL AUTO_INCREMENT,
  `risk_project` int(11) NOT NULL,
  `risk_criticality` mediumint(5) NOT NULL,
  `risk_description` text NOT NULL,
  `risk_mitigation` varchar(255) NOT NULL,
  PRIMARY KEY (`risk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_roles`
--

CREATE TABLE IF NOT EXISTS `acx_roles` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `type` enum('system','project') NOT NULL DEFAULT 'system',
  `permissions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `acx_roles`
--

INSERT INTO `acx_roles` (`id`, `name`, `type`, `permissions`) VALUES
(11, 'Administrador General', 'system', 'a:14:{s:13:"system_access";s:1:"1";s:12:"admin_access";s:1:"1";s:18:"project_management";s:1:"1";s:17:"people_management";s:1:"1";s:11:"add_project";s:1:"1";s:22:"manage_company_details";s:1:"1";s:23:"can_see_private_objects";s:1:"1";s:12:"manage_trash";s:1:"1";s:25:"manage_assignment_filters";s:1:"1";s:22:"can_use_status_updates";s:1:"1";s:17:"can_use_documents";s:1:"1";s:17:"can_add_documents";s:1:"1";s:16:"use_time_reports";s:1:"1";s:19:"manage_time_reports";s:1:"1";}'),
(12, 'Administrador de Sistema', 'system', 'a:14:{s:13:"system_access";s:1:"1";s:12:"admin_access";s:1:"1";s:18:"project_management";s:1:"1";s:17:"people_management";s:1:"1";s:11:"add_project";s:1:"1";s:22:"manage_company_details";s:1:"1";s:23:"can_see_private_objects";s:1:"1";s:12:"manage_trash";s:1:"1";s:25:"manage_assignment_filters";s:1:"1";s:22:"can_use_status_updates";s:1:"1";s:17:"can_use_documents";s:1:"1";s:17:"can_add_documents";s:1:"1";s:16:"use_time_reports";s:1:"1";s:19:"manage_time_reports";s:1:"1";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_search_index`
--

CREATE TABLE IF NOT EXISTS `acx_search_index` (
  `object_id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `content` longtext,
  PRIMARY KEY (`object_id`,`type`),
  FULLTEXT KEY `content` (`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_search_index`
--

INSERT INTO `acx_search_index` (`object_id`, `type`, `content`) VALUES
(19, 'User', 'jmejia.tpp@gmail.com\n\nJose Mejia'),
(1, 'Project', 'Plataforma de Juegos\n\n<p>Sitio desarrollado en PHP en framework de Joomla</p>'),
(1, 'ProjectObject', 'General\n\n'),
(2, 'ProjectObject', 'General\n\n'),
(3, 'ProjectObject', 'General\n\n'),
(4, 'ProjectObject', 'General\n\n'),
(5, 'ProjectObject', 'test summary\n\n<p>testLeonel aaa</p>\n\ntrotar\n\n'),
(6, 'ProjectObject', 'test222\n\n'),
(7, 'ProjectObject', 'test\n\n'),
(8, 'ProjectObject', '1111\n\n'),
(9, 'ProjectObject', '<p>asdasd</p>\n\n'),
(2, 'Project', 'Referidos Hoduras\n\n<p>Sitio desarrollado en PHP  en el framwork Joomla, para efectos de desarrollo se implentara en telefoniaguatemala.com</p>'),
(10, 'ProjectObject', 'General\n\n'),
(11, 'ProjectObject', 'General\n\n'),
(12, 'ProjectObject', 'General\n\n'),
(13, 'ProjectObject', 'General\n\n'),
(14, 'ProjectObject', 'Favor de Iniciar este proyecto, hay que levantarlo en joomla en telefonia, hay que hacer el flujo de las pantallas\n\n'),
(15, 'ProjectObject', 'Enmaquetar este sitio porfavor, montarlo en telefonia guatemalam, ver comentario #1\n\n'),
(16, 'ProjectObject', 'Erick, porfavor hacer el registro de usuarios con sus referidos de amigos, ver imagen "4.png"\n\n'),
(17, 'ProjectObject', '<p>para Diseño:</p><p> </p><p>Javier, este es el link apra descargar las artes:</p><p><a href="http://www.sendspace.com/file/9btjw1">http://www.sendspace.com/file/9btjw1</a></p>\n\n'),
(18, 'ProjectObject', '_20110711_1114.sql\n\n'),
(19, 'ProjectObject', 'test\n\n<p>test</p>\n\n'),
(20, 'ProjectObject', 'ejemplo Lista de Tareas\n\n<p>test</p>\n\netiquitaListaTarea\n\n'),
(21, 'ProjectObject', 'HitoEjemplo\n\netiqueta2Hito\n\n'),
(22, 'ProjectObject', 'pageDeEjemplo\n\n<p>test de la pagina de ejemplo</p>\n\netiqueta3Page\n\n'),
(23, 'ProjectObject', 'INGRESO DE HORA DE REFERIDOS DE HONDURAS\n\n'),
(24, 'ProjectObject', 'se completo la tarea\n\n'),
(25, 'ProjectObject', 'casi finalizado\n\n'),
(26, 'ProjectObject', '<p>toto al atacque</p>\n\n'),
(27, 'ProjectObject', '<p>toto al atacque 2</p>\n\n'),
(28, 'ProjectObject', '<p>nuevo atachemet</p>\n\n'),
(29, 'ProjectObject', '<p>yoyoyoyoyoy</p>\n\n'),
(30, 'ProjectObject', '<p>yoy2</p>\n\n'),
(31, 'ProjectObject', '<p>yoyo1</p>\n\n'),
(32, 'ProjectObject', '<p>1.esta es una prueba.</p><p>2.esta es una prueba2.</p><p>3.esta es una prueba3.</p><p> </p>\n\n'),
(33, 'ProjectObject', '<p>tomate 123456789</p>\n\n'),
(3, 'Project', '111\n\n<p>222</p>'),
(34, 'ProjectObject', 'General\n\n'),
(35, 'ProjectObject', 'General\n\n'),
(36, 'ProjectObject', 'General\n\n'),
(37, 'ProjectObject', 'General\n\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_source_users`
--

CREATE TABLE IF NOT EXISTS `acx_source_users` (
  `repository_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `repository_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`repository_id`,`repository_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_starred_objects`
--

CREATE TABLE IF NOT EXISTS `acx_starred_objects` (
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_status_updates`
--

CREATE TABLE IF NOT EXISTS `acx_status_updates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by_id` smallint(5) unsigned NOT NULL,
  `created_by_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_by_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `created_on` (`created_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `acx_status_updates`
--

INSERT INTO `acx_status_updates` (`id`, `message`, `created_by_id`, `created_by_name`, `created_by_email`, `created_on`) VALUES
(1, 'estoy revisando las tablas para ver lo del gestionador', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-18 23:26:42'),
(2, 'Totot', 19, 'Jose Mejia', 'jmejia.tpp@gmail.com', '2011-07-18 23:57:53'),
(3, 'hola hoy es martes', 20, 'Jose  Mejia', 'joseg867@gmail.com', '2011-07-19 17:32:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_subscriptions`
--

CREATE TABLE IF NOT EXISTS `acx_subscriptions` (
  `user_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_subscriptions`
--

INSERT INTO `acx_subscriptions` (`user_id`, `parent_id`) VALUES
(19, 6),
(19, 7),
(19, 14),
(19, 15),
(19, 16),
(19, 18),
(19, 19),
(19, 21),
(19, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_ticket_changes`
--

CREATE TABLE IF NOT EXISTS `acx_ticket_changes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ticket_id` int(10) unsigned NOT NULL DEFAULT '0',
  `version` int(10) unsigned NOT NULL DEFAULT '0',
  `old_value` text,
  `new_value` text,
  `changes` longtext,
  `created_on` datetime DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `created_by_name` varchar(100) DEFAULT NULL,
  `created_by_email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `acx_ticket_changes`
--

INSERT INTO `acx_ticket_changes` (`id`, `ticket_id`, `version`, `old_value`, `new_value`, `changes`, `created_on`, `created_by_id`, `created_by_name`, `created_by_email`) VALUES
(1, 5, 8, NULL, NULL, 'a:2:{s:5:"owner";a:2:{i:0;i:20;i:1;s:2:"23";}s:9:"assignees";a:2:{i:0;a:1:{i:0;i:20;}i:1;a:1:{i:0;s:2:"23";}}}', '2011-07-19 18:18:48', 0, 'Jose  Mejia', 'joseg867@gmail.com'),
(2, 5, 9, NULL, NULL, 'a:2:{s:5:"owner";a:2:{i:0;i:23;i:1;s:2:"20";}s:9:"assignees";a:2:{i:0;a:1:{i:0;i:23;}i:1;a:1:{i:0;s:2:"20";}}}', '2011-07-19 18:20:28', 0, 'Jose  Mejia', 'joseg867@gmail.com'),
(3, 5, 10, NULL, NULL, 'a:5:{s:5:"owner";a:2:{i:0;i:20;i:1;s:2:"23";}s:9:"assignees";a:2:{i:0;a:1:{i:0;i:20;}i:1;a:1:{i:0;s:2:"23";}}s:4:"name";a:2:{i:0;s:4:"test";i:1;s:12:"test summary";}s:4:"body";a:2:{i:0;s:11:"<p>test</p>";i:1;s:21:"<p>testLeonel aaa</p>";}s:8:"priority";a:2:{i:0;i:2;i:1;i:0;}}', '2011-07-19 18:23:08', 0, 'Jose  Mejia', 'joseg867@gmail.com'),
(4, 5, 11, NULL, NULL, 'a:2:{s:5:"owner";a:2:{i:0;i:23;i:1;s:2:"20";}s:9:"assignees";a:2:{i:0;a:1:{i:0;i:23;}i:1;a:1:{i:0;s:2:"20";}}}', '2011-07-19 18:25:41', 0, 'Jose  Mejia', 'joseg867@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_time_reports`
--

CREATE TABLE IF NOT EXISTS `acx_time_reports` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_filter` enum('anybody','logged_user','company','selected') NOT NULL DEFAULT 'anybody',
  `user_filter_data` text,
  `billable_filter` enum('all','billable','not_billable','billable_billed','billable_not_billed','pending_payment') NOT NULL DEFAULT 'all',
  `date_filter` enum('all','today','last_week','this_week','last_month','this_month','selected_date','selected_range') NOT NULL DEFAULT 'all',
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `sum_by_user` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `acx_time_reports`
--

INSERT INTO `acx_time_reports` (`id`, `name`, `group_name`, `is_default`, `user_filter`, `user_filter_data`, `billable_filter`, `date_filter`, `date_from`, `date_to`, `sum_by_user`) VALUES
(1, 'Last week', 'General', 1, 'anybody', 'N;', 'all', 'last_week', NULL, NULL, 0),
(2, 'Last week, summarized', 'General', 0, 'anybody', 'N;', 'all', 'last_week', NULL, NULL, 1),
(3, 'Last month', 'General', 0, 'anybody', 'N;', 'all', 'last_month', NULL, NULL, 0),
(4, 'Last month, summarized', 'General', 0, 'anybody', 'N;', 'all', 'last_month', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_update_history`
--

CREATE TABLE IF NOT EXISTS `acx_update_history` (
  `id` smallint(11) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(30) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `acx_update_history`
--

INSERT INTO `acx_update_history` (`id`, `version`, `created_on`) VALUES
(1, '2.3', '2011-07-05 10:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_users`
--

CREATE TABLE IF NOT EXISTS `acx_users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `role_id` tinyint(3) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(150) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `token` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `last_login_on` datetime DEFAULT NULL,
  `last_visit_on` datetime DEFAULT NULL,
  `last_activity_on` datetime DEFAULT NULL,
  `auto_assign` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `auto_assign_role_id` tinyint(3) unsigned DEFAULT NULL,
  `auto_assign_permissions` text,
  `password_reset_key` varchar(20) DEFAULT NULL,
  `password_reset_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `acx_users`
--

INSERT INTO `acx_users` (`id`, `company_id`, `role_id`, `first_name`, `last_name`, `email`, `password`, `token`, `created_on`, `updated_on`, `last_login_on`, `last_visit_on`, `last_activity_on`, `auto_assign`, `auto_assign_role_id`, `auto_assign_permissions`, `password_reset_key`, `password_reset_on`) VALUES
(19, 4, 12, 'Jose', 'Mejia', 'nopticon@gmail.com', 'fec993d0fb593875cd788fcc87593b66428df2cc', 'NyNugScS4DfvOlny2cRiNccJyMZXTSzguUnbWmUO', NULL, '2011-07-21 23:08:24', '2011-07-22 13:44:35', '2011-07-21 20:22:27', '2011-07-22 18:59:36', 0, NULL, 'N;', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_user_config_options`
--

CREATE TABLE IF NOT EXISTS `acx_user_config_options` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `value` text,
  PRIMARY KEY (`user_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acx_user_config_options`
--

INSERT INTO `acx_user_config_options` (`user_id`, `name`, `value`) VALUES
(19, 'im_type', 's:6:"Google";'),
(19, 'im_value', 's:20:"jmejia.tpp@gmail.com";'),
(19, 'language', 's:1:"2";'),
(19, 'status_update_last_visited', 'O:13:"DateTimeValue":8:{s:4:"hour";i:22;s:6:"minute";i:39;s:6:"second";i:33;s:9:"timestamp";i:1311287973;s:3:"day";i:21;s:5:"month";i:7;s:4:"year";i:2011;s:9:"date_data";a:11:{s:7:"seconds";i:33;s:7:"minutes";i:39;s:5:"hours";i:22;s:4:"mday";i:21;s:4:"wday";i:4;s:3:"mon";i:7;s:4:"year";i:2011;s:4:"yday";i:201;s:7:"weekday";s:8:"Thursday";s:5:"month";s:4:"July";i:0;i:1311287973;}}'),
(19, 'time_first_week_day', 'i:0;'),
(19, 'time_timezone', 'i:0;'),
(19, 'visual_editor', 'b:1;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acx_user_sessions`
--

CREATE TABLE IF NOT EXISTS `acx_user_sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_ip` varchar(15) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `visits` int(10) unsigned NOT NULL DEFAULT '0',
  `remember` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `created_on` datetime DEFAULT NULL,
  `last_activity_on` datetime DEFAULT NULL,
  `expires_on` datetime DEFAULT NULL,
  `session_key` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `session_key` (`session_key`),
  KEY `expires_on` (`expires_on`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `acx_user_sessions`
--

INSERT INTO `acx_user_sessions` (`id`, `user_id`, `user_ip`, `user_agent`, `visits`, `remember`, `created_on`, `last_activity_on`, `expires_on`, `session_key`) VALUES
(70, 25, '168.234.227.28', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:5.0) Gecko/20100101 Firefox/5.0', 10, 1, '2011-07-07 14:59:50', '2011-07-19 12:05:45', '2011-08-02 18:05:45', 'vgwSNnpstWKHO7u76qn994OHTrP5n3otn88AmoT0'),
(82, 23, '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Ubuntu/11.04 Chromium/12.0.742.112 Chrome/12.0.742.112 Safari/534.30', 1, 1, '2011-07-20 09:39:45', '2011-07-20 15:39:45', '2011-08-03 15:39:45', 'KbBh8dbhFb8TsbEVJlx34yX9OZnPx8D995f68gcB'),
(83, 19, '10.10.10.148', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Ubuntu/11.04 Chromium/12.0.742.112 Chrome/12.0.742.112 Safari/534.30', 537, 1, '2011-07-21 11:12:23', '2011-07-22 12:59:36', '2011-08-05 18:59:36', 'KpFzJGjdT2kWDHhu3x4Rif3AySqgc1vIp6HVdLE6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
