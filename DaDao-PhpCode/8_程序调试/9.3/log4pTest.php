<?php
//定义LOG4PHP_DIR目录名为log4php
define(LOG4PHP_DIR, "log4php");
//包含文件LoggerManager.php
require_once(LOG4PHP_DIR . '/LoggerManager.php');
//定义一个字串$str, 用来测试
$str = "Hello,sunyang!";
//通过LoggerManager类的getLogger()静态方法取得一个logger类,并规定输出调试信息的条件
$logger = LoggerManager::getLogger('test');
if (""!= $str) {
      $logger->debug("变量str的值不为空!");
      $logger->debug("变量str的值为：".$str);
}else{
      $logger->debug("变量str的值为空!");
}
if (strlen($str) >3) {
    $logger->debug("变量str的长度大于3!");
}else{
  $logger->debug("变量str的长度小于等于3!");
}
LoggerManager::shutdown(); 
?>
