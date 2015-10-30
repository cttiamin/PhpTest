<?php 
//���������Ϣ
error_reporting(E_ALL|E_STRICT); 
//����ʱ��
date_default_timezone_set('Asia/Shanghai'); 
//PATH_SEPARATOR �Ƿֺ� ��;�� �ָ���,
set_include_path('.'. PATH_SEPARATOR . './library' 
   . PATH_SEPARATOR . './application/models/'
   . PATH_SEPARATOR . './application/controllers/'  
   . PATH_SEPARATOR . './application/views/'  
   . PATH_SEPARATOR . get_include_path()); 
//���� zend ���ļ�,����ļ����о�̬����Թ����ǵ���,��ʹ������������������
include "Zend/Loader.php"; 
//����ǰ�˿�����
Zend_Loader::loadClass('Zend_Controller_Front'); 
//����zend config�����ļ���
Zend_Loader::loadClass('Zend_Config_Ini'); 
//����zend registerע�ắ����
Zend_Loader::loadClass('Zend_Registry'); 

//����Zend_DB��ʵ����ʹ�þ�̬����Zend_Db_Table::setDefaultAdapter()��ע�����ǵ�������Ϣ��
//zend/db  �����Ǵ��������ݿ�Ĳ���
Zend_Loader::loadClass('Zend_Db'); 
//����zend/db/table ��
Zend_Loader::loadClass('Zend_Db_Table'); 
//����zend�ķ�ҳ������
Zend_Loader::loadClass('Zend_Paginator'); 
Zend_Loader::loadClass('Zend_Paginator_Adapter_Array');

//�����Ƕ���������ļ�,����zend��config��,��Ϊȫ�� ,�����޸�
$config = new Zend_Config_Ini('./application/config.ini', 'general');

//���ע�ắ������,�����ǵ������ļ����ص����������ע�������,���ע�������ȫ�ֵ�
$registry = Zend_Registry::getInstance(); 

//ʹ��zend_db�����������ݿ����ӵ�������Ϣ
$database=Zend_Db::factory($config->database->adapter,$config->database->config->toArray());
//���߼򵥵�ʹ����,$db = Zend_Db::factory($config->database); Zend_Db factory֪����η�����

//�������ݿ� �ַ���
$database->query("set names {$config->charset}");

//�����ݿ���Ϣ����������
Zend_Db_Table::setDefaultAdapter($database);

//���ǰ�˿������ĵ���
$frontController = Zend_Controller_Front::getInstance(); 
//�Ƿ��׳�ǰ�ο������쳣��Ϣ
$frontController->throwExceptions(true); 
//���ÿ����������·��
$frontController->setControllerDirectory('./application/controllers'); 

//����Ĭ�ϵĿ�����
$frontController->setDefaultControllerName('Login'); 

//����Ĭ�ϵ�action
$frontController->setDefaultAction('index'); 
      					
// run! 
//��������ַ�
$frontController->dispatch(); 