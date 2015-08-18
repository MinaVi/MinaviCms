-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2015 年 8 月 18 日 13:31
-- サーバのバージョン: 5.5.27
-- PHP のバージョン: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `minavi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `local_items`
--

CREATE TABLE IF NOT EXISTS `local_items` (
  `id` int(11) NOT NULL,
  `talk_group_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lon` double NOT NULL,
  `lat` double NOT NULL,
  `ar_image_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `lon_min` double NOT NULL,
  `lat_min` double NOT NULL,
  `lon_max` double NOT NULL,
  `lat_max` double NOT NULL,
  `r_datetime` datetime NOT NULL,
  `m_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_events`
--

CREATE TABLE IF NOT EXISTS `talk_events` (
  `talk_event_id` int(11) NOT NULL AUTO_INCREMENT,
  `talk_group_id` int(11) NOT NULL,
  `talk_body` text COLLATE utf8_unicode_ci NOT NULL,
  `image_file_name` text COLLATE utf8_unicode_ci NOT NULL,
  `image_position_type` text COLLATE utf8_unicode_ci NOT NULL,
  `image_animation_type` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `is_removed` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`talk_event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- テーブルのデータのダンプ `talk_events`
--

INSERT INTO `talk_events` (`talk_event_id`, `talk_group_id`, `talk_body`, `image_file_name`, `image_position_type`, `image_animation_type`, `user_id`, `is_enabled`, `is_removed`, `created`, `modified`, `deleted`) VALUES
(1, 1, 'hogehoge', '', '', '', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'hogehoge', '', '', '', 0, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_groups`
--

CREATE TABLE IF NOT EXISTS `talk_groups` (
  `talk_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_id` int(11) NOT NULL DEFAULT '0',
  `select_flg` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`talk_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_selects`
--

CREATE TABLE IF NOT EXISTS `talk_selects` (
  `talk_select_id` int(11) NOT NULL AUTO_INCREMENT,
  `talk_group_id` int(11) NOT NULL,
  `answers_count` int(11) NOT NULL,
  `first_answer_body` text COLLATE utf8_unicode_ci NOT NULL,
  `first_talk_group_id` int(11) NOT NULL,
  `second_answer_body` text COLLATE utf8_unicode_ci NOT NULL,
  `second_talk_group_id` int(11) NOT NULL,
  `third_answer_body` text COLLATE utf8_unicode_ci NOT NULL,
  `third_talk_group_id` int(11) NOT NULL,
  `forth_answer_body` text COLLATE utf8_unicode_ci NOT NULL,
  `forth_talk_group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`talk_select_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
