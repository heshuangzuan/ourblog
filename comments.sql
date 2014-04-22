-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 22 日 08:05
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `ourblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) unsigned NOT NULL auto_increment,
  `email` varchar(200) NOT NULL default '',
  `text` text NOT NULL,
  `pid` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `author_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(16) NOT NULL,
  `status` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `comments`
--

INSERT INTO `comments` (`cid`, `email`, `text`, `pid`, `ip`, `author_id`, `owner_id`, `owner_name`, `status`, `created`, `deleted`) VALUES
(1, '', '0', 16, '1270', 0, 0, '0', 1, 1398150794, 0),
(2, '', '0', 16, '1270', 0, 0, '0', 1, 1398150885, 0),
(3, '', 'dasdasdadasdsa', 16, '0', 0, 4, '0', 1, 1398151307, 0),
(4, '', 'dsadasdsadasdasdasd', 16, '0', 0, 4, '0', 1, 1398151405, 0),
(5, '', 'sadasdsad', 16, '1270', 0, 0, '0', 1, 1398151447, 0),
(6, '', 'sadasdasd', 16, '127.0.0.1', 0, 0, '0', 1, 1398153315, 0),
(7, '', 'kkkkkkkkkk', 16, '', 0, 4, 'li903986396', 1, 1398153486, 0),
(8, '', 'asdsadsadsadsad', 16, '', 0, 4, 'li903986396', 1, 1398153832, 0),
(9, '', 'sadsadasdasdsad', 14, '127.0.0.1', 0, 0, '', 1, 1398153862, 0),
(10, '', 'asdsadasd', 14, '127.0.0.1', 0, 0, '', 1, 1398153867, 0);
