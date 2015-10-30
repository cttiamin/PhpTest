-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2009 年 05 月 26 日 01:48
-- 服务器版本: 5.1.30
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `users`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `userinfo`
-- 

CREATE TABLE `userinfo` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userno` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `userinfo`
-- 

INSERT INTO `userinfo` VALUES (2, 'admin', 'admin', '001');
