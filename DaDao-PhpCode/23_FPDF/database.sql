-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- ����: localhost
-- ��������: 2009 �� 02 �� 12 �� 05:20
-- �������汾: 5.0.51
-- PHP �汾: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ���ݿ�: `sunyang`
-- 

-- --------------------------------------------------------

-- 
-- ��Ľṹ `sale`
-- 

CREATE TABLE `sale` (
  `id` int(11) NOT NULL auto_increment,
  `month` int(11) NOT NULL,
  `supermarket` float NOT NULL,
  `clothes` float NOT NULL,
  `chandlery` float NOT NULL,
  `fitting` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- �������е����� `sale`
-- 

INSERT INTO `sale` VALUES (1, 1, 72.2342, 82.3426, 73.4555, 95.6735);
INSERT INTO `sale` VALUES (2, 2, 81.2423, 72.4568, 84.5612, 93.4679);
INSERT INTO `sale` VALUES (3, 3, 72.2346, 84.5623, 87.6885, 98.9743);
INSERT INTO `sale` VALUES (4, 4, 72.3454, 85.6764, 97.4568, 95.3233);
INSERT INTO `sale` VALUES (5, 5, 83.4335, 76.5432, 87.5238, 89.7345);
INSERT INTO `sale` VALUES (6, 6, 93.1216, 84.6345, 76.5434, 84.3133);
