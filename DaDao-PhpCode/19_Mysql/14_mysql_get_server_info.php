<?php
//mysql_get_server_info ����mysql�汾��
//mysql_get_host_info() ������������
//���ؿͻ��˿�İ汾��


$connection=mysql_connect("localhost","root","123456");
echo "���ݿ�汾��Ϊ��".mysql_get_server_info();
echo "<br>";
echo "���ݿ���������:".mysql_get_host_info();
echo "<br>";
echo "�ͻ��˿�İ汾��:".mysql_get_client_info();



?>
