-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2008 年 12 月 20 日 15:19
-- 服务器版本: 5.1.26
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `sunyang`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `employee`
-- 

CREATE TABLE `employee` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_number` varchar(25) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `emp_age` int(3) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `employee`
-- 

INSERT INTO `employee` VALUES (1, 'sy0801', 'employee1', 25);
INSERT INTO `employee` VALUES (2, 'sy0802', ' employee2', 30);
INSERT INTO `employee` VALUES (3, 'sy0803', ' employee3', 28);
