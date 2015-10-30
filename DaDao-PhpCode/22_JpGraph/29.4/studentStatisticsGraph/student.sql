SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE `studentnumber` (
  `YEAR` year(4) NOT NULL COMMENT '年',
  `STU_NUM` varchar(50) NOT NULL COMMENT '学生人数',
  PRIMARY KEY  (`YEAR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `studentnumber` VALUES (2003, '165');
INSERT INTO `studentnumber` VALUES (2004, '276');
INSERT INTO `studentnumber` VALUES (2005, '338');
INSERT INTO `studentnumber` VALUES (2006, '366');
INSERT INTO `studentnumber` VALUES (2007, '396');
INSERT INTO `studentnumber` VALUES (2008, '403');
