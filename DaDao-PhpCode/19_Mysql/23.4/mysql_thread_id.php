<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$connection=mysql_connect($db_host,$db_user,$db_psw)or die("���ӷ�����ʧ��"); 
$thread_id = mysql_thread_id($connection);
//�ж��߳�ID�Ƿ����
if ($thread_id){
   echo "��ǰ�߳�ID��".$thread_id;//�����ǰ�߳�ID
}
?>
