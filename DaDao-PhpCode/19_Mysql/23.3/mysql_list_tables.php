<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("���ӷ�����ʧ��");
$tb_list = mysql_list_tables($db_name);
while ($row= mysql_fetch_row($tb_list)) {
    echo $row[0]."<br>";
    echo "<hr>";
}
mysql_close($connection);
?>
