-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2009 年 05 月 25 日 06:35
-- 服务器版本: 5.1.30
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `ajaxpage`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `userinfo`
-- 

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- 导出表中的数据 `userinfo`
-- 

INSERT INTO `userinfo` VALUES (1, 'sunyang1', 'sunyang1');
INSERT INTO `userinfo` VALUES (2, 'sunyang2', 'sunyang2');
INSERT INTO `userinfo` VALUES (3, 'sunyang3', 'sunyang3');
INSERT INTO `userinfo` VALUES (4, 'sunyang4', 'sunyang4');
INSERT INTO `userinfo` VALUES (5, 'sunyang5', 'sunyang5');
INSERT INTO `userinfo` VALUES (6, 'Changchun1', 'Changchun1');
INSERT INTO `userinfo` VALUES (7, 'Changchun2', 'Changchun2');
INSERT INTO `userinfo` VALUES (8, 'Changchun3', 'Changchun3');
INSERT INTO `userinfo` VALUES (9, 'Changchun4', 'Changchun4');
INSERT INTO `userinfo` VALUES (10, 'Changchun5', 'Changchun5');
INSERT INTO `userinfo` VALUES (11, 'Jilin1', 'Jilin1');
INSERT INTO `userinfo` VALUES (12, 'Jilin2', 'Jilin2');
INSERT INTO `userinfo` VALUES (13, 'Jilin3', 'Jilin3');
