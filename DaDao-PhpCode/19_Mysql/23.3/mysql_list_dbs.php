<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
$db_list = mysql_list_dbs($connection);
while ($row = mysql_fetch_object($db_list)) {
    echo $row->Database . "<br>";
    echo "<hr>";
}
mysql_close($connection);
?>
