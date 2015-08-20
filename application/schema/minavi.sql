-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015 年 8 月 20 日 09:38
-- サーバのバージョン： 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minavi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `local_items`
--

CREATE TABLE IF NOT EXISTS `local_items` (
  `id` int(11) NOT NULL,
  `talk_group_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lon` double NOT NULL,
  `lat` double NOT NULL,
  `ar_image_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `lon_min` double NOT NULL,
  `lat_min` double NOT NULL,
  `lon_max` double NOT NULL,
  `lat_max` double NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `is_removed` int(11) NOT NULL,
  `r_datetime` datetime NOT NULL,
  `m_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_events`
--

CREATE TABLE IF NOT EXISTS `talk_events` (
`talk_event_id` int(11) NOT NULL,
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
  `deleted` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_groups`
--

CREATE TABLE IF NOT EXISTS `talk_groups` (
`talk_group_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL DEFAULT '0',
  `select_flg` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_enabled` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `talk_selects`
--

CREATE TABLE IF NOT EXISTS `talk_selects` (
`talk_select_id` int(11) NOT NULL,
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
  `deleted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talk_events`
--
ALTER TABLE `talk_events`
 ADD PRIMARY KEY (`talk_event_id`);

--
-- Indexes for table `talk_groups`
--
ALTER TABLE `talk_groups`
 ADD PRIMARY KEY (`talk_group_id`);

--
-- Indexes for table `talk_selects`
--
ALTER TABLE `talk_selects`
 ADD PRIMARY KEY (`talk_select_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talk_events`
--
ALTER TABLE `talk_events`
MODIFY `talk_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `talk_groups`
--
ALTER TABLE `talk_groups`
MODIFY `talk_group_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `talk_selects`
--
ALTER TABLE `talk_selects`
MODIFY `talk_select_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
