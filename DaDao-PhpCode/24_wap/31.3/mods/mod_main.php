<?php

function main_page()		//Ĭ�ϵ��õĺ���
{
	global $smarty;
	
	require_once( ROOT_PATH . 'includes/ubb.inc.php');		//����UBB�ļ�
	$message_array = array();
	for($i=0;$i<10;$i++)				//ѭ��ȡ�����
	{
		//�ѽ����ɶ�ά����
		$message_array[] = array(
			'id' 		=> $i,
			'username' 	=> '����username',
			'content'	=> ubb('����content'),			//��ubb�������˱���
		);
	}
	$smarty->assign('message' , $message_array);			//�滻ģ�����
	return $smarty->fetch('message.tpl');
}