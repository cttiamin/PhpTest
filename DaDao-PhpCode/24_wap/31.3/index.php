<?php
define('ROOT_PATH' , '');									//�����Ŀ¼
header("Content-type: text/vnd.wap.wml");
//���� Smarty

require_once( ROOT_PATH . 'includes/smarty/Smarty.class.php');		//����smarty���ļ�
$smarty=new Smarty();						//��ʼ��Smarty

$smarty->compile_check = true;			//��ģ�������
$smarty->debugging = false;				//�رյ���
$smarty->caching = false;				//�رջ���
$smarty->template_dir = "template";	//����ģ��·��
$smarty->compile_dir = 'template_c';	//���ñ����ļ���ŵ��ļ���
$smarty->left_delimiter = '[##';		//������߽��
$smarty->right_delimiter = '##]';		//�����ұ߽����

$smarty->assign("content", "Welcome smarty!");
$smarty->display("index.tpl");			//��ʾindex.tplģ��

?>