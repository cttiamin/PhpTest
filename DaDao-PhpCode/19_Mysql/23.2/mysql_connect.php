<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$connection=mysql_connect($db_host,$db_user,$db_psw); 
if (!$connection) {
    die('����MySQL������ʧ��');
}
echo '����MySQL�������ɹ�';
mysql_close($connection);
?> 
