<?php
//mysql_list_processes ���ط�����������Ϣ
$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
mysql_select_db($db_name,$connection);

$result = mysql_list_processes($connection);
while($row=mysql_fetch_array($result)){
	echo $row['Id']."<br>"; //����ID
	echo $row['User']."<br>"; //�û�
	echo $row['Host']."<br>"; //����
	echo $row['db']."<br>"; //���ݿ�
	echo $row['Command']."<br>"; //ִ�е�����
	echo $row['Time']."<br>"; //ִ��ʱ��
}
mysql_free_result($result);

?>
