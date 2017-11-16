-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 03 月 28 日 05:21
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phpbbs`
--

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'a', 'a', '超级管理员', '2016-04-11 10:51:02');

-- --------------------------------------------------------

--
-- 表的结构 `liuyanban`
--

CREATE TABLE IF NOT EXISTS `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `bankuai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=9 ;

--
-- 导出表中的数据 `liuyanban`
--

INSERT INTO `liuyanban` (`id`, `zhanghao`, `zhaopian`, `xingming`, `liuyan`, `addtime`, `huifu`, `issh`, `bankuai`) VALUES
(3, 'a', '', '34', '子女教育', '2016-02-26 14:54:57', NULL, '是', '444'),
(4, 'a', '', '5', '子女教育', '2016-02-26 14:55:14', NULL, '否', '子女教育'),
(5, 'a', '', '5', '子女教育', '2016-02-26 14:57:43', NULL, '否', '子女教育'),
(7, 'a', '', 'sdfsdf', 'sdfsdf', '2016-03-25 16:01:08', NULL, '否', '爱情基因'),
(8, 'a', '', '李达', '你好', '2016-03-25 16:01:47', 'hahdfsdf', '是', '爱情基因');

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `zhaopian`, `addtime`, `issh`) VALUES
(26, 'aaaaaa', 'aaaaaa', 'aaaaaa', '男', '浙江的所发生的方式', 'aaa', 'uploadfile/5.jpg', '2016-03-11 10:51:02', '是');
