<?php
//mysql_thread_id //���ص�ǰ�߳�ID

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");

$thread_id = mysql_thread_id($connection);

//�ж��߳�ID�Ƿ����
if($thread_id){
	echo "��ǰ�߳�ID��".$thread_id;		//�����ǰ�߳�ID
}


?>
