-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2009 年 01 月 10 日 13:55
-- 服务器版本: 5.1.26
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `forum`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `topic`
-- 

CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `posttime` datetime NOT NULL,
  `user` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

-- 
-- 导出表中的数据 `topic`
-- 

INSERT INTO `topic` VALUES (1, '11111', '111111111111', '2008-01-06 13:42:05', '11');
INSERT INTO `topic` VALUES (2, '2222', '22222222222222', '2008-02-06 13:42:05', '222');
INSERT INTO `topic` VALUES (3, '333333', '3333333333', '2008-03-06 13:42:05', '33');
INSERT INTO `topic` VALUES (4, 'Smarty模板技术', 'Smarty是一个PHP模板引擎，它是由Monte Ohrt和Andrei Zmievski使用PHP语言开发的，发展到今天已经成为一个非常流行的模板引擎。\r\nSmarty提供了一种易于管理和使用的方法，将PHP代码从HTML页面中分离出来，这种做法使得PHP程序员和页面设计者之间的分工更加的明确，PHP程序员只需专注于业务逻辑的实现，页面设计者只需专注于页面美工的设计。因此，团队的整体开发效率会得到很大程度的提高。\r\nSmarty的优点包括：1.速度快：\r\n和其它模板引擎相比，使用Smarty的程序运行速度要快。\r\n2.丰富的标签：\r\nSmarty提供了一系列丰富的标签来处理数据。\r\n3.编译型：\r\n默认情况下Smarty会将模板编译成PHP文件，再次访问该模板时，请求会被转换到已编译的PHP文件中，因此访问速度会很快。\r\n4.缓存：\r\nSmarty提供了缓存技术，可缓存静态HTML页面，还可指定缓存时间。\r\n5.安全：\r\n在Smarty中可设置安全选项，用于防止恶意的攻击。\r\n6.插件：\r\n插件实质上是一些自定义函数，Smarty可以自定义插件。　\r\n', '2009-01-09 13:44:35', 'sunyang');
INSERT INTO `topic` VALUES (5, '认识MySQL', '5555', '2009-01-12 13:47:22', 'sunyang');
INSERT INTO `topic` VALUES (6, 'PHP语言', '666666666666', '2009-01-18 13:47:55', 'sunyang');
INSERT INTO `topic` VALUES (7, '777', '7777', '2009-01-11 13:48:24', '77');
INSERT INTO `topic` VALUES (88, '888', '88888', '2009-01-11 13:48:24', '888');
INSERT INTO `topic` VALUES (99, '999', '999999999', '2009-01-11 13:48:24', '99');
