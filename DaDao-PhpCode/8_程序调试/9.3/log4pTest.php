<?php
//����LOG4PHP_DIRĿ¼��Ϊlog4php
define(LOG4PHP_DIR, "log4php");
//�����ļ�LoggerManager.php
require_once(LOG4PHP_DIR . '/LoggerManager.php');
//����һ���ִ�$str, ��������
$str = "Hello,sunyang!";
//ͨ��LoggerManager���getLogger()��̬����ȡ��һ��logger��,���涨���������Ϣ������
$logger = LoggerManager::getLogger('test');
if (""!= $str) {
      $logger->debug("����str��ֵ��Ϊ��!");
      $logger->debug("����str��ֵΪ��".$str);
}else{
      $logger->debug("����str��ֵΪ��!");
}
if (strlen($str) >3) {
    $logger->debug("����str�ĳ��ȴ���3!");
}else{
  $logger->debug("����str�ĳ���С�ڵ���3!");
}
LoggerManager::shutdown(); 
?>
